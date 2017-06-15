<?php

class Login extends CI_Controller {

	function index()
	{
		// L'applicazione inizia sempre presentando la pagina di login
		$this->load->view('login_form');
	}

	function validate(){

		// Chiedo al modello di verificare i dati inseriti dall'utente

		$result = $this->Utenti_model->validate($this->input->post('username'), md5($this->input->post('password')));

		if ($result == true) 
		{
			// Se entro qui vuol dire che l'utente esiste e ha inserito la password giusta:
			// salvo nella sessione alcune info come username e tipo di utente, in funzione 
			// del quale il controller site caricherà la view giusta
 
			$data = array(

				'username' => $this->input->post('username'),
				'nome' => $this->Utenti_model->nome_da_username($this->input->post('username')),
				'tipo_utente' => $this->Utenti_model->tipo_utente($this->input->post('username')),
				'id_utente' => $this->Utenti_model->id_da_username($this->input->post('username')),
				'is_logged_in' => true, 
				'app_attiva' => 'principale'
			);

			$this->session->set_userdata($data);
			redirect('site/members_area');
		}

		else 
		{
			// Se il login non è andato a buon fine, torno alla pagina iniziale con un messaggio di errore
			$data['messaggioerrore'] = 'Attenzione! Username o password errati. ';
			$this->load->view('login_form', $data);
		}
	}

	function logout()
	{
		if (($this->session->userdata('prev_confermate') == true) && ($this->session->userdata('prev_fatte') == true)) {

		    $this->session->sess_destroy();
		    $this->index();
		}

		else if (($this->session->userdata('prev_confermate') == false) && ($this->session->userdata('prev_fatte') == true)) {

			redirect('site/dati_non_confermati');
		}

		else {

		    $this->session->sess_destroy();
		    $this->index();
		}
	}
}
