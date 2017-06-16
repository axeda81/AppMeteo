<?php
	
class Ricerche extends CI_Controller 
{

	function __construct()
	{
		parent::__construct();
		$this->load->helper('utilities');
		is_logged_in($this->session->userdata('is_logged_in'));
	}

	function ricerca_per_utente()
	{

		// Carico una view in cui siano disponibili come opzioni di ricerca la zona, la data e il tipo di allerta. 
		// L'utente non è un'opzione disponibile perchè cerco solo le previsioni per l'utente loggato in questo momento. 
		// $id_utente = $this->session->userdata('id_utente');
		$data['content'] = 'members_area/appTemporali/meteo/ricerca';  
		$this->load->view('includes/template', $data);	
	}

	function ricerca_dirigente() 
	{
		// Carico una view in cui siano disponibili come opzioni di ricerca la zona, la data, il tipo di allerta e l'utente. 
		// Queto tipo di ricerca può essere fatta solo dal dirigente 
		$data['content'] = 'members_area/appTemporali/dirigente/ricerca';  
		$data['elenco_meteo'] = $this->Utenti_model->elenco_meteo();
		$this->load->view('includes/template', $data);	
	}

	function ricerca_tutto() 
	{

		// Carico una view in cui il meteorologo loggato può visualizzare le previsioni presenti nel DB, fare ricerche, ma solo
		// se ha già compilato le sue previsioni per quel giorno

		if ($this->session->userdata('prev_confermate') == true){
			$data['content'] = 'members_area/appTemporali/meteo/ricerca_tutto'; 
			$this->load->view('includes/template', $data);	
		}
		else {

			$data['content'] = 'members_area/appTemporali/meteo/archivio';
			$data['messaggioerrore'] = "Ricerca non disponibile. \nTorna dopo aver compilato le tue previsioni per oggi.";
			$this->load->view('includes/template', $data);			
		}

	}

	function esegui_ricerca()
	{

		// Chiamo funzioni del modello con le opzioni selezionate dall'utente loggato
		$id_utente = $this->session->userdata('id_utente');
		$tipo = $this->Utenti_model->tipo_utente_da_id($id_utente); 
		// $tipo = 0, l'utente è un  meteorologo e può cercare solo tra le sue previsioni

		$zona = $this->input->post('select_zona');
		$allerta = $this->input->post('select_allerta');
		if ($tipo != 0) $utenti = $this->input->post('select_utenti');

		$date = explode("-",$this->input->post('daterange')); // Prendo le due date (inizio e fine range, in formato dd/mm/YYYY) separatamente

		$date[0] = str_replace("/","-", $date[0]); // Per usare queste date nel DB, devo sostituire la / col trattino
		$date[1] = str_replace("/","-", $date[1]);

		$datainizio = date('Y-m-d', strtotime($date[0])); // YYYY-mm-dd, nel formato accettato dal DB
		$datafine = date('Y-m-d', strtotime($date[1])); // YYYY-mm-dd, nel formato accettato dal DB

		if (isset($utenti))
			$result = $this->Dettaglioprevisioni_model->ricerca($id_utente, $zona, $allerta, $datainizio, $datafine, $utenti);
		else 
			$result = $this->Dettaglioprevisioni_model->ricerca($id_utente, $zona, $allerta, $datainizio, $datafine, null);
		

		// Chiamo una view passandole i risultati della ricerca 
		if ($tipo != 0) $data['content'] = 'members_area/appTemporali/dirigente/risultati_ricerca'; 
		else $data['content'] = 'members_area/appTemporali/meteo/risultati_ricerca'; 
		$data['result'] = $result; 
		$this->load->view('includes/template', $data);	
	}

	function esegui_ricerca_tutto()
	{
		// Per le opzioni di ricerca selezionate dal meteorologo loggato (range di date, allerta/e, zona/e) faccio una ricerca nel 
		// db, per tutti gli utenti - torno i risultati ma poi non pubblicherò i nomi degli utenti 
		$id_utente = $this->session->userdata('id_utente');
		$prev_utente_loggato = $this->input->post('miePrevisioni');
		$tipo = $this->Utenti_model->tipo_utente_da_id($id_utente); 
		$zona = $this->input->post('select_zona');
		$allerta = $this->input->post('select_allerta');
		$date = explode("-",$this->input->post('daterange')); // Prendo le due date (inizio e fine range, in formato dd/mm/YYYY) separatamente
		$date[0] = str_replace("/","-", $date[0]); // Per usare queste date nel DB, devo sostituire la / col trattino
		$date[1] = str_replace("/","-", $date[1]);
		$datainizio = date('Y-m-d', strtotime($date[0])); // YYYY-mm-dd, nel formato accettato dal DB
		$datafine = date('Y-m-d', strtotime($date[1])); // YYYY-mm-dd, nel formato accettato dal DB

		$result = $this->Dettaglioprevisioni_model->ricerca_tutto($id_utente, $zona, $allerta, $datainizio, $datafine, $prev_utente_loggato);

		$data['content'] = 'members_area/appTemporali/meteo/risultati_ricerca_tutto'; 
		$data['result'] = $result; 

		$this->load->view('includes/template', $data);	
	}

}