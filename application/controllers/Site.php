<?php
	
class Site extends CI_Controller 
{

	function __construct()
	{

		parent::__construct();
		$this->is_logged_in();
	}

	function members_area () 
	{

		//Carico la view dell'area riservata agli utenti registrati, in funzione del tipo di utente

		switch ($this->Utenti_model->tipo_utente($this->session->userdata('username'))) {

			case 0: // meteorologo: fa le previsioni e può rivedere solo le sue
				$data['content'] = 'members_area/meteo/home';
				$this->verificaPrevEffettuate();
				break;
			case 1: // dirigente: può rivedere le previsioni di tutti
				$data['content'] = 'members_area/dirigente/home'; 
				$data['fuoriorario'] = false;
				break;
			case 2: // amministratore: crea/elimina/modifica utenti
				$data['content'] = 'members_area/admin/home'; 
				$data['fuoriorario'] = false;
				break;
			default: break;
		}

		// Alla fine carico la view corrispondente al caso in cui ci troviamo 
		$this->load->view('includes/template', $data);

	}

	function istruzioni() {

		$data['content'] = 'members_area/istruzioni'; 
		$this->load->view('includes/template', $data);
	}

	function fuoriorariomax()
	{

		$max = 43200; // orario massimo espresso in secondi (12:00 = 43200)
		$ora_attuale = date('H.i', time()); // estraggo l'ora attuale
		$ora = explode(".", $ora_attuale); // ricavo ora e minuti separati
		$ore = $ora[0];
		$minuti = $ora[1];
		$tempo = ($ore*3600) + ($minuti*60); // trasformo ora e minuti attuali in secondi

		if ($tempo > $max) return true;
		else return false;
	}

	function verificaPrevEffettuate() {

		$id_utente = $this->Utenti_model->id_da_username($this->session->userdata('username'));
		$var =  $this->Previsionieffettuate_model->prevgiaeffettuate($id_utente);
		$sess = array(

				'prev_fatte' => $var,
				'prev_confermate' => $var
		);
		$this->session->set_userdata($sess);
	}

	function meteorologo()
	{
		// Prima cosa: controllare se l'utente ha già effettuato le previsioni
		// in data odierna. In tal caso non può rifarle ma solo rivederle.
		
		if ($this->session->userdata('prev_confermate') == true)
		{
			// Carico la view dove si avverte l'utente che ha già effettuato le previsioni
			$data['content'] = 'members_area/meteo/prevgiaeffettuate';
		}
		else 
		{
			// Se le previsioni non son già state fatte da quell'utente, carico la view per farle 
			$data['content'] = 'members_area/meteo/da_compilare';
			
			$data['fasceorarie'] = $this->Fasciaorariaprevisione_model->elencofasceorarie();
			 	
		}

		$data['fuoriorario'] = $this->fuoriorariomax();

		// Salvo l'informazione sull'orario nella sessione perchè dovrebbe servire anche in altri controller 
		$sess = array(

			'fuoriorario' => $data['fuoriorario']
		);
		$this->session->set_userdata($sess); 

		// Carico la view 
		$this->load->view('includes/template', $data);
	}

	function is_logged_in()
	{
		// Verifico se c'è una sessione attiva, altrimenti torno al login
		$is_logged_in = $this->session->userdata('is_logged_in');

		if(!isset($is_logged_in) || $is_logged_in == false) {

			$paginaIniziale = base_url().'index.php/login';
			echo 'Sessione scaduta o login non effettuato - non hai il permesso di accedere a questa pagina. <a href='.$paginaIniziale.'>Login </a>';

			die();
		}
	}

	function salva_dati() 
	{

		// Prima cosa, bisogna salvare l'informazione relativa al fatto che l'utente che è loggato sta facendo le previsioni,
		// va inserita quindi una riga nella tabella previsionieffettuate facendosi restituire l'ID 
		
		$id_preveff = $this->Previsionieffettuate_model->inserisci_riga();

		$data = array(

			'id_preveff' => $id_preveff,
			'inTurno' => $this->input->post('turno')
		);

		// Salvo l'ID della previsione nella sessione così posso utilizzarlo anche in altre funzioni
		$this->session->set_userdata($data); 

//		if (non può creare la nuova riga) {
			// Gestire questo errore 
//		}

		// Salvo nella tabella dettaglioprevisioni tutte le previsioni fatte (20 righe se sono già passate le 12, 30 altrimenti)
		$result = $this->Dettaglioprevisioni_model->inserisci_dati($id_preveff, $this->fuoriorariomax());

		if ($result = true) {

			// Tutti gli inserimenti nel DB sono andati a buon fine, riempio la view di riepilogo 
			$data['previsioni'] = $this->Dettaglioprevisioni_model->elenco_previsioni($id_preveff);
			$data['dati_previsione'] = $this->Previsionieffettuate_model->dati_previsione($id_preveff);

			$data['fasceorarie'] = $this->Fasciaorariaprevisione_model->elencofasceorarie();

			$data['content'] = 'members_area/meteo/rivedidati'; // Devo poter rivedere i dati per confermare 
			$this->load->view('includes/template', $data);

			// Inserisco nella sessione il flag che mi dice che le previsioni son state fatte (ma sono ancora da confermare)
			$data = array(
				'prev_fatte' => true
			);
			$this->session->set_userdata($data);

		}
		else {

			// ERRORE
			// Deve eliminare le righe inserite in previsionieffettuate e dettaglioprevisioni e ricaricare la view meteo così viene ricompilata

			$this->Previsionieffettuate_model->elimina_riga($id_preveff);
			$this->Dettaglioprevisioni_model->elimina_dati($id_preveff);

			$data['fasceorarie'] = $this->Fasciaorariaprevisione_model->elencofasceorarie();

			$data['content'] = 'members_area/meteo/da_compilare';
			$data['messaggioerrore'] = 'Errore nell\'inserimento dei dati nel DB. Per favore compila nuovamente le tue previsioni.'; // TODO - usare questo messaggio nella view
			$this->load->view('includes/template', $data);
		}
	}

	function conferma_dati ()
	{

		// Viene chiamata quando, dopo aver rivisto i dati compilati, si da ok per salvarli definitivamente
		$data = array(
			'prev_confermate' => true
		);

		// Inserisco nella sessione il dato relativo al fatto che son stati confermati i dati
		$this->session->set_userdata($data);

		// Carico la view in cui confermo che le previsioni sono andate a buon fine
		$data['content'] = 'members_area/meteo/fine';
		$this->load->view('includes/template', $data);
	}

	function ricompila_previsioni() 
	{

		$id_preveff = $this->session->userdata('id_preveff');
		// Devo caricare la view meteo_compilato, che è uguale a meteo ma con i dati ripresi dal db 
		$data['previsioni'] = $this->Dettaglioprevisioni_model->elenco_previsioni($id_preveff);
		// Questa query su dettaglioprevisioni tornerà 20 oppure 30 righe, lo so chiamando $this->fuoriorariomax()
		$data['fuoriorario'] = $this->fuoriorariomax();

		$data['fasceorarie'] = $this->Fasciaorariaprevisione_model->elencofasceorarie();

		$data['content'] = 'members_area/meteo/compilato';  
		
		$this->load->view('includes/template', $data);		

	}

	function aggiorna_dati() 
	{

		// Aggiorno tutti i dati delle previsioni (modificati o meno, li sovrascrivo tutti)
		$id_preveff = $this->session->userdata('id_preveff'); 

		$this->Previsionieffettuate_model->aggiorna_orario_riga($id_preveff); // Aggiorno l'orario di modifica della riga con ID = id_preveff
		$result = $this->Dettaglioprevisioni_model->aggiorna_dati($id_preveff, $this->fuoriorariomax());

		if ($result = true) {

			// Tutti gli aggiornamenti nel DB sono andati a buon fine 
			$data['previsioni'] = $this->Dettaglioprevisioni_model->elenco_previsioni($id_preveff);
			$data['dati_previsione'] = $this->Previsionieffettuate_model->dati_previsione($id_preveff);
			$data['fasceorarie'] = $this->Fasciaorariaprevisione_model->elencofasceorarie();
			$data['content'] = 'members_area/meteo/rivedidati'; // Devo poter rivedere i dati per confermare 
			$this->load->view('includes/template', $data);
		}

		// TODO - gestire il caso in cui $result = false
	}

	function dati_non_confermati() 
	{

		// Chiamata se viene fatto logout senza confermare i dati
		$id_preveff = $this->session->userdata('id_preveff');
		// Carico la view 
		// Tutti gli inserimenti nel DB sono andati a buon fine
		$data['messaggioerrore'] = 'Attenzione! Conferma i tuoi dati prima di fare logout.'; 
		$data['previsioni'] = $this->Dettaglioprevisioni_model->elenco_previsioni($id_preveff);
		$data['dati_previsione'] = $this->Previsionieffettuate_model->dati_previsione($id_preveff);
		$data['fasceorarie'] = $this->Fasciaorariaprevisione_model->elencofasceorarie();
		$data['content'] = 'members_area/meteo/rivedidati'; // Devo poter rivedere i dati per confermare 
		$this->load->view('includes/template', $data);
	}

}
