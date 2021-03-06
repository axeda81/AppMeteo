<?php
	
class Archivio extends CI_Controller 
{

	function __construct()
	{
		parent::__construct();
		$this->load->helper('utilities');
		is_logged_in($this->session->userdata('is_logged_in'));
	}

	function mostra_menu_archivio() {

		// Carico una view dove ho due possibilità: fare una ricerca tra le previsioni fatte dall'utente loggato
		// oppure inserire dati relativi a previsioni già fatte 
		$data['content'] = 'members_area/appTemporali/meteo/archivio';  
		$this->load->view('includes/template', $data);

	}

	function inserisci_dati_storici() {

		// Carico la view per inserire dati storici relativi alle previsioni fatte dall'utente loggato
		$data['content'] = 'members_area/appTemporali/meteo/dati_storici_passo1';
		$data['fasceorarie'] = $this->Fasciaorariaprevisione_model->elencofasceorarie_6ore(); 
		$this->load->view('includes/template', $data);	

	}

	function salva_dati_storici_passo1 (){

		// Creo solo la riga in Previsionieffettuate perchè a questo punto sono state inserite
		// data e ora della previsione che si vuole salvare e l'info sul turno 

		// Prima cosa, bisogna inserire una riga nella tabella previsionieffettuate facendosi restituire l'ID della riga stessa 
		
		$dataeora = $this->input->post('dataeora');

		$dataeora_array = explode("-", $dataeora);
		$dataeora_array[0] = str_replace("/","-", $dataeora_array[0]); 

		$dataformattata = date_create($dataeora_array[0]);
		$dataformattata = date_format($dataformattata,"Y-m-d"); 

		if ($this->session->has_userdata('id_prev_storico')) {

			// Se nella sessione esiste già questo valore, vuol dire che sto già inserendo dati,
			// quindi non devo creare una nuova riga in Previsionieffettuate ma aggiornarla

			$id_prev_storico = $this->session->userdata('id_prev_storico');
			$this->Previsionieffettuate_model->aggiorna_dati_storici($id_prev_storico, $dataformattata, $dataeora_array[1], $this->input->post('inTurno'));
		}
		else 
		{
			// Altrimenti, creo una nuova riga 
			$id_prev_storico = $this->Previsionieffettuate_model->inserisci_riga_storico($dataformattata, $dataeora_array[1]);
		}

		// TODO: gestire eventuale errore DB

		// Controllo se le previsioni che sto inserendo son state fatte oltre le 12:00. In tal caso
		// nella view del passo2 le fasce orarie della giornata di oggi saranno disabilitate
		$fuoriorario = 0;
		$orario = explode(":", $dataeora_array[1]);

		if (fuoriorariomax_archivio($orario) == true) $fuoriorario = 1;
		else $fuoriorario = 0;

		$info = array(

			'id_prev_storico' => $id_prev_storico, 
			'fuoriorario_storico' => $fuoriorario,
			'inTurno_storico' => $this->input->post('inTurno'),
			'dataeora' => $this->input->post('dataeora')
		);

		// Salvo queste informazioni nella sessione così le posso usare anche in altre funzioni e altre view
		$this->session->set_userdata($info); 

		$data['fasceorarie'] = $this->Fasciaorariaprevisione_model->elencofasceorarie_6ore();
		$data['inTurno'] = $this->input->post('inTurno');
		$data['fuoriorario'] = $fuoriorario;

		$data['content'] = 'members_area/appTemporali/meteo/dati_storici_passo2'; // Devo andare avanti con la compilazione
		$this->load->view('includes/template', $data);		
	}

	function salva_dati_storici_passo2 ()
	{
		// Aggiorno tutti i dati (modificati o meno, li sovrascrivo tutti)
		$id_prev_storico = $this->session->userdata('id_prev_storico'); 
		$fuoriorario = $this->session->userdata('fuoriorario_storico'); 

		$result = $this->Dettaglioprevisioni_model->inserisci_dati_storici($id_prev_storico, $fuoriorario);

		if ($result = true) {
			// Tutti gli inserimenti nel DB sono andati a buon fine, riempio la view di riepilogo 
			$data['previsioni'] = $this->Dettaglioprevisioni_model->elenco_previsioni($id_prev_storico);
			$data['dati_previsione'] = $this->Previsionieffettuate_model->dati_previsione($id_prev_storico);
			$data['fasceorarie'] = $this->Fasciaorariaprevisione_model->elencofasceorarie_6ore();
			$data['inTurno'] = $this->session->userdata('inTurno_storico');

			$data['content'] = 'members_area/appTemporali/meteo/rivedi_dati_storici'; // Devo poter rivedere i dati per confermare 
			$this->load->view('includes/template', $data);
		}

		else {

			// ERRORE
			// Deve eliminare le righe inserite in previsionieffettuate e dettaglioprevisioni e ricaricare la view così viene ricompilata
			$this->Previsionieffettuate_model->elimina_riga($id_preveff);

			$data['fasceorarie'] = $this->Fasciaorariaprevisione_model->elencofasceorarie_6ore();

			$data['content'] = 'members_area/appTemporali/meteo/dati_storici_passo1';
			$data['messaggioerrore'] = 'Errore nell\'inserimento dei dati nel DB. Per favore compila nuovamente le tue previsioni.'; 
			$this->load->view('includes/template', $data);
		}
	}


	function aggiorna_dati_storici_passo1() 
	{
		// Aggiorno tutti i dati (modificati o meno, li sovrascrivo tutti)
		$id_prev_storico = $this->session->userdata('id_prev_storico'); 

		$dataeora = $this->input->post('dataeora');

		$dataeora_array = explode("-", $dataeora);
		$dataeora_array[0] = str_replace("/","-", $dataeora_array[0]); 

		$dataformattata = date_create($dataeora_array[0]);
		$dataformattata = date_format($dataformattata,"Y-m-d"); 

		$fuoriorario = 0;
		$orario = explode(":", $dataeora_array[1]);
		
		if (fuoriorariomax_archivio($orario) == true) $fuoriorario = 1;
		else $fuoriorario = 0;

		$inTurno = $this->input->post('inTurno');

		$info = array(

			'fuoriorario_storico' => $fuoriorario,
			'inTurno_storico' => $inTurno,
			'dataeora' => $this->input->post('dataeora')
		);

		// Salvo queste informazioni nella sessione così le posso usare anche in altre funzioni e altre view
		$this->session->set_userdata($info); 

		// Aggiorno l'orario di modifica della riga con ID = id_prev_storico e l'informazione sul turno
	 	$this->Previsionieffettuate_model->aggiorna_dati_storici($id_prev_storico, $dataformattata, $dataeora_array[1], $inTurno); 
		$result = $this->Dettaglioprevisioni_model->aggiorna_dati($id_prev_storico, $fuoriorario);

		if ($result = true) {

			// Tutti gli aggiornamenti nel DB sono andati a buon fine 
			$data['previsioni'] = $this->Dettaglioprevisioni_model->elenco_previsioni($id_prev_storico);
			$data['dati_previsione'] = $this->Previsionieffettuate_model->dati_previsione($id_prev_storico);
			$data['fasceorarie'] = $this->Fasciaorariaprevisione_model->elencofasceorarie_6ore();
			$data['turno'] = $inTurno;
			$data['fuoriorario'] = $fuoriorario;
			$data['content'] = 'members_area/appTemporali/meteo/dati_storici_passo2'; // Devo poter rivedere i dati per confermare 
			$this->load->view('includes/template', $data);
		}

		// TODO - gestire il caso in cui $result = false
	}

	function aggiorna_dati_storici_passo2() 
	{
		// Aggiorno tutti i dati (modificati o meno, li sovrascrivo tutti)
	}


	function dati_storici_passo1(){

		// Chiamata quando premo "indietro" nella view del passo2

		// Inserisco i dati nella view
		$data['inTurno'] = $this->session->userdata('inTurno_storico');
		$data['dataeora'] = $this->session->userdata('dataeora');

		$data['content'] = 'members_area/appTemporali/meteo/dati_storici_passo1_compilato';  
		$this->load->view('includes/template', $data);	
	}

	function conferma_dati_storici ()
	{
		// Viene chiamata quando, dopo aver rivisto i dati compilati, si da ok per salvarli definitivamente:
		// non bisogna fare niente, solo dire che è andato tutto bene, i dati sono già nel DB

		$id_prev_storico = $this->session->userdata('id_prev_storico'); 

		// Nel DB segno i dati come "confermati"
		$this->Previsionieffettuate_model->conferma_previsione($id_prev_storico); 

		$this->session->unset_userdata('id_prev_storico');

		// Carico la view in cui confermo che le previsioni sono andate a buon fine
		$data['content'] = 'members_area/appTemporali/meteo/home';
		$data['messaggio'] = "L'inserimento dei dati è andato a buon fine.";
		$this->load->view('includes/template', $data);
	}

	function reset_dati_storici_passo1 () {

		// Elimino dal DB eventuali dati relativi alla compilazione precedente
		$id_prev_storico = $this->session->userdata('id_prev_storico'); 
		$this->Previsionieffettuate_model->elimina_riga($id_prev_storico); 

		// Elimino dalla sessione l'info relativa alla previsione che stavo compilando
		$this->session->unset_userdata('id_prev_storico');

		// Devo resettare la view dati_storici_passo1_compilato.php: ricarico semplicemente quella di partenza dell'inserimento dati
		$this->inserisci_dati_storici();
	}

	function reset_dati_storici_passo2 ()
	{
		// Devo resettare la view compilato.php: ricarico semplicemente quella di partenza delle previsioni
		$data['content'] = 'members_area/appTemporali/meteo/dati_storici_passo2';
		
		$data['fasceorarie'] = $this->Fasciaorariaprevisione_model->elencofasceorarie_6ore();
		$data['fuoriorario'] = 0;

		// Carico la view 
		$this->load->view('includes/template', $data);
	
	}

	function ricompila_dati_storici() 
	{
		$id_prev_storico = $this->session->userdata('id_prev_storico');
		
		// Devo caricare la view meteo_compilato, che è uguale a meteo/da_compilare ma con i dati ripresi dal db 
		$data['previsioni'] = $this->Dettaglioprevisioni_model->elenco_previsioni($id_prev_storico);
		
		// Questa query su dettaglioprevisioni tornerà un numero variabile di righe, lo so chiamando $this->fuoriorariomax()
		$data['fuoriorario'] = $this->fuoriorariomax(); // ???
		
		// Passo alla view anche l'informazione sul turno 
		$res = $this->Previsionieffettuate_model->prev_in_turno($id_prev_storico);
		$data['inTurno'] = $res[0]->inTurno;

		$data['fasceorarie'] = $this->Fasciaorariaprevisione_model->elencofasceorarie_6ore();

		$data['content'] = 'members_area/appTemporali/meteo/dati_storici_passo2_compilato';  // ???
		
		$this->load->view('includes/template', $data);

	}

	function annulla_inserimento_dati () 
	{
		// Cancello tutte le righe del DB relative alle previsioni effettuate 
		$id_prev_storico = $this->session->userdata('id_prev_storico');
		$this->Previsionieffettuate_model->elimina_riga($id_prev_storico);

		$this->session->unset_userdata('id_prev_storico');

		// Torno alla home
		$data['content'] = 'members_area/appTemporali/meteo/home'; 
		$data['messaggio'] = 'Inserimento dati annullato. ';
		$this->load->view('includes/template', $data);
	}

}
