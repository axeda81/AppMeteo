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
		if ($this->Utenti_model->tipo_utente($this->session->userdata('username')) == 2) {

			$data['content'] = 'members_area/admin/home'; 
		}
		else $data['content'] = 'members_area/pagina_iniziale';

		$this->load->view('includes/template', $data);
	}

	function members_area_temporali () 
	{
		//Carico la view dell'area riservata agli utenti registrati, in funzione del tipo di utente

		switch ($this->Utenti_model->tipo_utente($this->session->userdata('username'))) {

			case 0: // meteorologo: fa le previsioni e può rivedere solo le sue
				$data['content'] = 'members_area/appTemporali/meteo/home';
				$this->verificaPrevEffettuate();
				break;
			case 1: // dirigente: può rivedere le previsioni di tutti
				$data['content'] = 'members_area/appTemporali/dirigente/home'; 
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

	function istruzioni() 
	{

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

	function verificaPrevEffettuate() 
	{
		$id_utente = $this->Utenti_model->id_da_username($this->session->userdata('username'));
		$var =  $this->Previsionieffettuate_model->prevgiaeffettuate($id_utente);
		
		if ($var == -1)
			$sess = array('prev_fatte' => false, 'prev_confermate' => false);
		else if ($var == 1)
			$sess = array('prev_fatte' => true, 'prev_confermate' => true);
		else if ($var == 0)
			$sess = array('prev_fatte' => true, 'prev_confermate' => false);

		$this->session->set_userdata($sess);

	}

	function meteorologo()
	{
		// Prima cosa: controllare se l'utente ha già effettuato le previsioni
		// in data odierna. In tal caso non può rifarle ma solo rivederle.
		
		if ($this->session->userdata('prev_confermate') == true)
		{
			// Previsioni già fatte per quel giorno: Carico la view home e avviso dell'errore 
			$data['content'] = 'members_area/appTemporali/meteo/home';
			$data['messaggioerrore'] = "Hai già effettuato le tue previsioni per oggi! Torna domani, preferibilmente entro le ore 12:00.";
		}
		else if (($this->session->userdata('prev_confermate') == false) && ($this->session->userdata('prev_fatte') == true)){

			// Qualcosa è andato storto nell'inserimento delle previsioni 
			$data['content'] = 'members_area/appTemporali/meteo/home';
			$data['messaggioerrore'] = "Le ultime previsioni non risultano confermate. Prova a cliccare Logout per scegliere se confermarle o annullarle.";			
		}
		else 
		{
			// Se le previsioni non son già state fatte da quell'utente, carico la view per farle 
			$data['content'] = 'members_area/appTemporali/meteo/da_compilare';
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
		// va inserita quindi una riga nella tabella previsionieffettuate facendosi restituire l'ID della riga stessa. 
		// Il campo "Confermata" verrà messo a "NO" e sarà modificato a "SI" solo una volta che si confermano le previsioni.
		$id_preveff = $this->Previsionieffettuate_model->inserisci_riga();

		$data = array(

			'id_preveff' => $id_preveff,
			'inTurno' => $this->input->post('inTurno')
		);

		// Salvo l'ID della previsione e l'info sul turno nella sessione così posso utilizzarli anche in altre funzioni
		$this->session->set_userdata($data); 

//		if (non può creare la nuova riga) {
			// Gestire questo errore 
//		}

		// Salvo nella tabella dettaglioprevisioni tutte le previsioni fatte (40 righe se sono già passate le 12, 60 altrimenti)
		$result = $this->Dettaglioprevisioni_model->inserisci_dati($id_preveff, $this->fuoriorariomax());

		if ($result = true) {

			// Inserisco nella sessione il flag che mi dice che le previsioni son state fatte (ma sono ancora da confermare)
			$prev = array(
				'prev_fatte' => true, 
				'prev_confermate' => false
			);
			$this->session->set_userdata($prev);

			// Tutti gli inserimenti nel DB sono andati a buon fine, riempio la view di riepilogo 
			$data['previsioni'] = $this->Dettaglioprevisioni_model->elenco_previsioni($id_preveff);
			$data['dati_previsione'] = $this->Previsionieffettuate_model->dati_previsione($id_preveff);
			$data['fasceorarie'] = $this->Fasciaorariaprevisione_model->elencofasceorarie();
			$data['inTurno'] = $this->input->post('inTurno');

			$data['content'] = 'members_area/appTemporali/meteo/rivedidati'; // Devo poter rivedere i dati per confermare 
			$this->load->view('includes/template', $data);
		}
		
		else {

			// ERRORE
			// Deve eliminare le righe inserite in previsionieffettuate e dettaglioprevisioni e ricaricare la view meteo così viene ricompilata

			$this->Previsionieffettuate_model->elimina_riga($id_preveff);
			$this->Dettaglioprevisioni_model->elimina_dati($id_preveff);

			$data['fasceorarie'] = $this->Fasciaorariaprevisione_model->elencofasceorarie();

			$data['content'] = 'members_area/appTemporali/meteo/da_compilare';
			$data['messaggioerrore'] = 'Errore nell\'inserimento dei dati nel DB. Per favore compila nuovamente le tue previsioni.'; // TODO - usare questo messaggio nella view
			$prev = array(
				'prev_fatte' => false, 
				'prev_confermate' => false
			);
			$this->session->set_userdata($prev);
			$this->load->view('includes/template', $data);
		}
	}

	function conferma_dati ()
	{
		// Viene chiamata quando, dopo aver rivisto i dati compilati, si da ok per salvarli definitivamente
		$prev = array(
			'prev_fatte' => true,
			'prev_confermate' => true
		);

		// Inserisco nella sessione il dato relativo al fatto che son stati confermati i dati
		$this->session->set_userdata($prev);

		$id_preveff = $this->session->userdata('id_preveff');
		$this->Previsionieffettuate_model->conferma_previsione($id_preveff);

		// Carico la view in cui confermo che le previsioni sono andate a buon fine
		$data['content'] = 'members_area/appTemporali/meteo/home';
		$data['messaggio'] = "L'inserimento delle tue previsioni è andato a buon fine.";
		$this->load->view('includes/template', $data);
	}

	function ricompila_previsioni() 
	{
		$id_preveff = $this->session->userdata('id_preveff');
		$this->Previsionieffettuate_model->indietro_previsione($id_preveff);

		// Devo caricare la view meteo_compilato, che è uguale a meteo/da_compilare ma con i dati ripresi dal db 
		$data['previsioni'] = $this->Dettaglioprevisioni_model->elenco_previsioni($id_preveff);
		
		// Questa query su dettaglioprevisioni tornerà un numero variabile di righe, lo so chiamando $this->fuoriorariomax()
		$data['fuoriorario'] = $this->fuoriorariomax();
		
		// Passo alla view anche l'informazione sul turno 
		//$res = $this->Previsionieffettuate_model->prev_in_turno($id_preveff);
		//$data['inTurno'] = $res[0]->inTurno;
		$data['inTurno'] = $this->session->userdata('inTurno');

		$data['fasceorarie'] = $this->Fasciaorariaprevisione_model->elencofasceorarie();

		$prev = array(
			'prev_fatte' => true,
			'prev_confermate' => false
		);

		// Inserisco nella sessione il dato relativo al fatto che le previsioni non sono ancora confermate
		$this->session->set_userdata($prev);

		$data['content'] = 'members_area/appTemporali/meteo/compilato';  
		
		$this->load->view('includes/template', $data);		

	}

	function aggiorna_dati() 
	{
		// Aggiorno tutti i dati delle previsioni (modificati o meno, li sovrascrivo tutti)
		$id_preveff = $this->session->userdata('id_preveff'); 
		// Aggiorno l'orario di modifica della riga con ID = id_preveff e l'informazione sul turno
		$this->Previsionieffettuate_model->aggiorna_dati($id_preveff); 
		$this->Previsionieffettuate_model->indietro_previsione($id_preveff);
		$result = $this->Dettaglioprevisioni_model->aggiorna_dati($id_preveff, $this->fuoriorariomax());

		$prev = array(
			'inTurno' => $this->input->post('inTurno'),
			'prev_fatte' => true,
			'prev_confermate' => false
		);

		// Inserisco nella sessione il dato relativo al fatto che le previsioni non sono ancora confermate
		$this->session->set_userdata($prev);	

		if ($result = true) {

			// Tutti gli aggiornamenti nel DB sono andati a buon fine 
			$data['previsioni'] = $this->Dettaglioprevisioni_model->elenco_previsioni($id_preveff);
			$data['dati_previsione'] = $this->Previsionieffettuate_model->dati_previsione($id_preveff);
			$data['fasceorarie'] = $this->Fasciaorariaprevisione_model->elencofasceorarie();
			$data['inTurno'] = $this->session->userdata('inTurno');
			$data['content'] = 'members_area/appTemporali/meteo/rivedidati'; // Devo poter rivedere i dati per confermare 
			$this->load->view('includes/template', $data);
		}

		// TODO - gestire il caso in cui $result = false
	}

	function reset_dati_compilati () 
	{
		// Elimino dal DB eventuali dati relativi alla compilazione precedente
		$id_preveff_old = $this->session->userdata('id_preveff'); 
		$this->Previsionieffettuate_model->elimina_riga($id_preveff_old); 

		// Devo resettare la view compilato.php: ricarico semplicemente quella di partenza delle previsioni
		$data['content'] = 'members_area/appTemporali/meteo/da_compilare';
		
		$data['fasceorarie'] = $this->Fasciaorariaprevisione_model->elencofasceorarie();
		$data['fuoriorario'] = $this->fuoriorariomax();

		$prev = array(
			'prev_fatte' => false,
			'prev_confermate' => false
		);

		// Inserisco nella sessione il dato relativo al fatto che le previsioni non sono ancora confermate
		$this->session->set_userdata($prev);		

		// Carico la view 
		$this->load->view('includes/template', $data);

	}

	function dati_non_confermati() 
	{

		// Chiamata se viene fatto logout senza confermare i dati
		$id_preveff = $this->session->userdata('id_preveff');
		// Carico la view 
		// Tutti gli inserimenti nel DB sono andati a buon fine
		$data['messaggioerrore'] = 'Attenzione! Conferma o annulla i tuoi dati prima di fare logout.'; 
		$data['previsioni'] = $this->Dettaglioprevisioni_model->elenco_previsioni($id_preveff);
		$data['dati_previsione'] = $this->Previsionieffettuate_model->dati_previsione($id_preveff);
		$data['fasceorarie'] = $this->Fasciaorariaprevisione_model->elencofasceorarie();
		$data['content'] = 'members_area/appTemporali/meteo/rivedidati'; // Devo poter rivedere i dati per confermare 
		$data['inTurno'] = $this->session->userdata('inTurno');
		$this->load->view('includes/template', $data);
	}

	function annulla_previsioni () 
	{
		// Cancello tutte le righe del DB relative alle previsioni effettuate 
		$id_preveff = $this->session->userdata('id_preveff');
		$this->Previsionieffettuate_model->elimina_riga($id_preveff);
		$this->Dettaglioprevisioni_model->elimina_dati($id_preveff);
		
		$prev = array(
			'prev_fatte' => false,
			'prev_confermate' => false
		);

		// Aggiorno la sessione
		$this->session->set_userdata($prev);

		// Torno alla home
		$data['content'] = 'members_area/appTemporali/meteo/home'; 
		$this->load->view('includes/template', $data);
	}
}
