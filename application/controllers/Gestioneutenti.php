<?php

class Gestioneutenti extends CI_Controller 
{

	function __construct()
	{
		parent::__construct();
		$this->load->helper('utilities');
		is_logged_in($this->session->userdata('is_logged_in'));
	}	

	function index()
	{
		$data['content'] = 'members_area/admin/home';
		$this->load->view('includes/template', $data);
	}


	function crea ()
	{
		// Creazione di un nuovo utente 
		$data['content'] = 'members_area/admin/signup_form';
		$this->load->view('includes/template', $data);
	}


	function visualizza_utente($id = NULL) 
	{
		// Visualizzazione dei dati di un utente  da parte dell'Admin: può modificare tutti i campi
    if($id == null)
    {
			// Se l'id non è stato passato correttamente ricarico tutta la view con l'elenco degli utenti
			$data['users'] = $this->Utenti_model->elenco_utenti();
			$data['content'] = 'members_area/admin/update_form';

			$this->load->view('includes/template', $data);
     }

		$data['dati_utente'] = $this->Utenti_model->dati_utente($id);
		$data['content'] = 'members_area/admin/pagina_utente';
		$this->load->view('includes/template', $data);
	}

	function salva_modifiche_utente($id=null){

		$data['dati_utente'] = $this->Utenti_model->dati_utente($id);

		//Regole di validazione
		$this->form_validation->set_rules('nome', 'Nome', 'trim|required');
		$this->form_validation->set_rules('cognome', 'Cognome', 'trim|required');
		$this->form_validation->set_rules('email', 'e-mail', 'trim|required|valid_email');
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|min_length[6]|max_length[32]');
		$this->form_validation->set_rules('password2', 'Conferma password', 'trim|matches[password]');

		if ($this->form_validation->run() == false)
		{
			$data['messaggioerrore'] = 'Attenzione! ';
			$data['content'] = 'members_area/admin/pagina_utente';
			$this->load->view('includes/template', $data);	
		}

		else
		{
			if ($this->input->post('password') !== "") 
			{

				// Se è stata modificata la password la devo salvare (so che è uguale alla "conferma password" 
				// perchè se arrivo qui ho superato la validazione)
				$datiModificati = array(

					'nome' => $this->input->post('nome'),
					'cognome' => $this->input->post('cognome'),
					'username' => $this->input->post('username'),
					'email' => $this->input->post('email'),
					'tipo' => $this->input->post('tipo'),
					'password' => md5($this->input->post('password'))
				);	
			}

			else 
			{
				// Non devo salvare la password perchè non è stata modificata 	
				$datiModificati = array(

					'nome' => $this->input->post('nome'),
					'cognome' => $this->input->post('cognome'),
					'username' => $this->input->post('username'),
					'email' => $this->input->post('email'),
					'tipo' => $this->input->post('tipo')
				);		
			}
			
			// Scrittura su DB
			$result = $this->Utenti_model->aggiorna_utente($datiModificati, $this->input->post('id_utente')); 

			if ($result == true) 
			{

				// Aggiornamento dei dati andato a buon fine 
				$data['messaggio'] = 'Le modifiche sono state salvate correttamente!';
				$data['users'] = $this->Utenti_model->elenco_utenti();
				$data['content'] = 'members_area/admin/update_form';

				$this->load->view('includes/template', $data);
			}

			else 
			{

				$data['messaggioerrore'] = 'Attenzione! Errore nel salvataggio dei dati';
				$data['content'] = 'members_area/admin/pagina_utente';
				$this->load->view('includes/template', $data);	

			}
		}
	}

	function elimina ($id = NULL)
	{
		// Eliminazione dell'utente selezionato
    if($id == null)
    {
			// Se l'id non è stato passato correttamente ricarico tutta la view con l'elenco degli utenti
			$data['users'] = $this->Utenti_model->elenco_utenti();
			$data['content'] = 'members_area/admin/update_form';

			$this->load->view('includes/template', $data);
    }

    $this->Utenti_model->elimina_utente($id);

    $data['messaggio'] = 'Cancellazione dell\'utente andata a buon fine.';
    $data['users'] = $this->Utenti_model->elenco_utenti();
		$data['content'] = 'members_area/admin/update_form';
		$this->load->view('includes/template', $data);

	}

	function amministra_utenti()
	{

		$data['content'] = 'members_area/admin/amministra_utenti';
		$this->load->view('includes/template', $data);
	}


	function crea_nuovo_utente() 
	{

		// Regole di validazione
		$this->form_validation->set_rules('nome', 'Nome', 'trim|required');
		$this->form_validation->set_rules('cognome', 'Cognome', 'trim|required');
		$this->form_validation->set_rules('email', 'E-mail', 'trim|required|valid_email');
		$this->form_validation->set_rules('username', 'Username', 'trim|required|is_unique[utenti.username]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|max_length[32]');
		$this->form_validation->set_rules('password2', 'Conferma password', 'trim|required|matches[password]');

		if ($this->form_validation->run() == false){

			$data['messaggioerrore'] = 'Attenzione! ';
			$data['content'] = 'members_area/admin/signup_form';
			$this->load->view('includes/template', $data);	
		}
		else 
		{

			// Se la validazione è andata a buon fine si inserisce il nuovo utente nel DB

			$result = $this->Utenti_model->crea_nuovo_utente();

			if ($result = true){

				$data['content'] = 'members_area/admin/home';
				$data['messaggio'] = "La creazione del nuovo utente è andata a buon fine.";
				$this->load->view('includes/template', $data);
			}
			else 
			{

				$data['messaggioerrore'] = "Errore nella creazione del nuovo utente.";
				$data['content'] = 'members_area/admin/signup_form';
				$this->load->view('includes/template', $data);	
			}
		}
	}

	function elenco_utenti() {

		// Deve mostrare l'elenco degli utenti presenti (tranne l'amministratore stesso)
		// e dare modo di selezionarne uno da cancellare (o magari anche da modificare)
		
		$data['users'] = $this->Utenti_model->elenco_utenti();
		$data['content'] = 'members_area/admin/update_form';

		$this->load->view('includes/template', $data);		
	}


	function mostra_profilo ()
	{
		
		// Carico una view dove vengano mostrati i dati del profilo dell'utente loggato, che può anche modificarli
		$data['dati_utente'] = $this->Utenti_model->dati_utente($this->session->userdata('id_utente'));
		$data['content'] = 'members_area/visualizza_profilo';

		// Aggiorno nella sessione l'informazione sulla app che sto usando 
		$app = array('app_attiva' => 'principale');
		$this->session->set_userdata($app); 

		$this->load->view('includes/template', $data);		
	}

	function modifica_profilo() 
	{

		// Carico una view dove sia modificabile solo la password dell'utente loggato
		$data['dati_utente'] = $this->Utenti_model->dati_utente($this->session->userdata('id_utente'));
		$data['content'] = 'members_area/modifica_profilo';

		// Aggiorno nella sessione l'informazione sulla app che sto usando 
		$app = array('app_attiva' => 'principale');
		$this->session->set_userdata($app); 

		$this->load->view('includes/template', $data);			
	}

	function salva_profilo() 
	{

		// Salvo i dati inseriti dall'utente nel form
		// Validazione password e conferma password
		// Ritorno alla pagina di visualizzazione profilo

		$data['dati_utente'] = $this->Utenti_model->dati_utente($this->session->userdata('id_utente'));

		// Regole di validazione:

		$this->form_validation->set_rules('oldPassword', 'Vecchia password', 'trim|required');
		$this->form_validation->set_rules('newPassword', 'Password', 'trim|required|min_length[6]|max_length[32]');
		$this->form_validation->set_rules('newPassword2', 'Conferma password', 'trim|required|matches[newPassword]');

		if ($this->form_validation->run() == false)
		{
			// Qualcosa è andato storto nella validazione dei nuovi dati inseriti
			// Ricarico la stessa pagina aggiungendo i messaggi d'errore 
			$data['messaggioerrore'] = 'Attenzione! ';
			$data['content'] = 'members_area/modifica_profilo';
			$this->load->view('includes/template', $data);	
		}

		else 
		{
			// Validazione OK, ma devo controllare se la vecchia password inserita è giusta
			if ($this->Utenti_model->validate($this->session->userdata('username'), md5($this->input->post('oldPassword'))) == false)
			{
				// Password sbagliata 
				$data['messaggioerrore'] = 'Attenzione! La vecchia password è sbagliata.';
				$data['content'] = 'members_area/modifica_profilo';
				$this->load->view('includes/template', $data);					
			}
			
			else 
			{
				// Validazione OK e vecchia password giusta - salvo i nuovi dati nel db
				
				$datiModificati = array(

					'password' => md5($this->input->post('newPassword'))

				);				

				// Scrittura su DB
				$result = $this->Utenti_model->aggiorna_utente_loggato($datiModificati); 

				if ($result = true)
				{
					// Aggiornamento dei dati andato a buon fine 
					$data['messaggio'] = 'Le modifiche al tuo profilo sono state salvate correttamente!';
					$data['content'] = 'members_area/visualizza_profilo';
					$data['dati_utente'] = $this->Utenti_model->dati_utente($this->session->userdata('id_utente'));

					$this->load->view('includes/template', $data);	
				}

				else 
				{
					// Aggiornamento del DB non riuscito
					$data['messaggioerrore'] = 'Errore nel salvataggio dei dati. Riprova.';
					$data['content'] = 'members_area/modifica_profilo';
					$this->load->view('includes/template', $data);	
				}
			}
		}
	}
}
