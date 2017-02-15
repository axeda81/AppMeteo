<?php

class utenti_model extends CI_Model {

	function validate($username, $password){

		$this->db->where('username', $username);
		$this->db->where('password', $password);

		$query = $this->db->get('utenti');

		if($query->num_rows() == 1) {
			
			return true;
		}
		
		else return false;

	}

	function crea_nuovo_utente() {

		$new_user = array(

			'nome' => $this->input->post('nome'),
			'cognome' => $this->input->post('cognome'),
			'email' => $this->input->post('email'),
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password')),
			'tipo' => $this->input->post('tipoutente')

			);

		$result = $this->db->insert('utenti', $new_user);
		return $result;
	}	

	function dati_utente ($id_utente) {

		// Ritorna tutti i dati dell'utente con ID passato come parametro

		$this->db->select('*');
		$this->db->from('utenti');
		$this->db->where('ID', $id_utente);	
		$q = $this->db->get();
		if($q->num_rows() > 0){

			return $q->result();
		}
	}

	function elenco_utenti() {

		// Ritorna l'intero contenuto della tabella 'utenti'
		$q = $this->db->get('utenti');
		if($q->num_rows() > 0){

			return $q->result();
		}

	}

	function elenco_meteo() { 

		// Ritorna Nome Cognome e ID dei meteorologi
		$this->db->select('ID, Nome, Cognome');
		$this->db->from('utenti');
		$this->db->where('tipo', '0');

		$q = $this->db->get();
		if($q->num_rows() > 0){

			return $q->result();
		}
	}	

	function elimina_utente($id) {

		$this->db->where('id', $id);
		$this->db->delete('utenti');
	}

	function aggiorna_utente_loggato($data) {

		$this->db->where('ID', $this->session->userdata('id_utente'));
		$result = $this->db->update('utenti', $data);
		return $result;
	}

	function aggiorna_utente($data, $id) {

		$this->db->where('ID', $id);
		$result = $this->db->update('utenti', $data);
		return $result;
	}


	function id_da_username ($user) {

		// Dato uno username, mi restituisce l'ID dell'utente
		$this->db->select('ID');
		$this->db->from('utenti');
		$this->db->where('username', $user);

		$q = $this->db->get();
		if($q->num_rows() == 1){

			$row = $q->row(0);
			return $row->ID;

		}
	}

	function nome_da_username ($user) {

		// Dato uno username, mi restituisce il nome dell'utente 
		$this->db->select('nome');
		$this->db->from('utenti');
		$this->db->where('username', $user);

		$q = $this->db->get();
		if($q->num_rows() == 1){

			$row = $q->row(0);
			return $row->nome;

		}
	}	

	function nome_da_id ($id) {

		// Dato un ID di un utente, mi restituisce nome e cognome 
		$this->db->select('Nome, Cognome');
		$this->db->from('utenti');
		$this->db->where('ID', $id);

		$q = $this->db->get();
		if($q->num_rows() == 1){

			$row = $q->row(0);
			return $row;
		}
	}

	function tipo_utente ($user) {

		// Dato uno username, restituisce il tipo utente (0 = meteo, 1 = dirigente, 2 = admin)
		$this->db->select('tipo');
		$this->db->from('utenti');
		$this->db->where('username', $user);

		$q = $this->db->get();
		if($q->num_rows() == 1){

			$row = $q->row(0);
			return $row->tipo;

		}

	}

	function tipo_utente_da_id ($id) {

		// Dato uno username, restituisce il tipo utente (0 = meteo, 1 = dirigente, 2 = admin)
		$this->db->select('tipo');
		$this->db->from('utenti');
		$this->db->where('ID', $id);

		$q = $this->db->get();
		if($q->num_rows() == 1){

			$row = $q->row(0);
			return $row->tipo;

		}

	}

}