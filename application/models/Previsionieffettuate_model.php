<?php

class Previsionieffettuate_model extends CI_Model {

	function prevgiaeffettuate ($id) {

		// Vado a controllare se è presente una riga per quell'utente nella data di oggi		
		$this->db->select('*');
		$this->db->from('previsionieffettuate');
		$this->db->where('ID_utente', $id);
		$this->db->where('Data', date("Y-m-d"));

		$q = $this->db->get();

		if($q->num_rows() == 0) return -1; // Se non c'è nessuna riga, ok, previsioni da fare
		// Se c'è una riga per quel giorno, bisogna vedere se il campo Confermata contiene "SI": in tal caso vuol dire che 
		// le previsioni sono state salvate correttamente. Altrimenti ("NO") significa che, per qualche motivo, il salvataggio
		// delle previsioni non si era concluso in modo corretto. 
		else if($q->num_rows() == 1) {
			
			$row = $q->row(0);
			return $row->Confermata;
		}

	}

	function inserisci_riga () {

		$riga = array(

			'ID_utente' => $this->session->userdata('id_utente'),
			'Data' => date("Y-m-d"),
			'Ora' => date("H:i"),
			'inTurno' => $this->input->post('inTurno'), 
			'Confermata' => 0
		);

		$this->db->insert('previsionieffettuate', $riga);

		return $this->db->insert_id();
	}

	function conferma_previsione ($id) {

		$riga = array(

			'Confermata' => 1
		);

		$this->db->where('ID', $id);
		$this->db->update('previsionieffettuate', $riga);
	}

	function indietro_previsione ($id) {

		$riga = array(

			'Confermata' => 0
		);

		$this->db->where('ID', $id);
		$this->db->update('previsionieffettuate', $riga);
	}

	function inserisci_riga_storico ($data, $ora) {

		// Data e ora della riga da inserire vengono passati come parametro, già nel formato che va bene per il DB

		$riga = array(

			'ID_utente' => $this->session->userdata('id_utente'),
			'Data' => $data,
			'Ora' => $ora,
			'inTurno' => $this->input->post('inTurno')
		);

		$this->db->insert('previsionieffettuate', $riga);

		return $this->db->insert_id();
	}	

	function aggiorna_dati($id) {

		$riga = array(

			'Ora' => date("H:i"),
			'inTurno' => $this->input->post('inTurno')
		);

		$this->db->where('ID', $id);
		$this->db->update('previsionieffettuate', $riga);
	}

	function aggiorna_dati_storico($id, $data, $ora, $turno) {

		$riga = array(

			'Data' => $data,
			'Ora' => $ora,
			'inTurno' => $turno
		);

		$this->db->where('ID', $id);
		$this->db->update('previsionieffettuate', $riga);
	}

	function elimina_riga ($id) {

		$this->db->where('ID', $id);
		$this->db->delete('previsionieffettuate');
	}

	function dati_previsione($id){

		// Ritorna data, ora e id utente che ha fatto la previsione con ID = al parametro passato

		$this->db->select('*');
		$this->db->from('previsionieffettuate');
		$this->db->where('ID', $id);
		
		$q = $this->db->get();

		if($q->num_rows() == 1){

			return $q->result();
		}

	}

	function previsioni_utente() {

		// Restituisce tutte le previsioni fatte dall'utente loggato in questo momento
		$id_utente = $this->session->userdata('id_utente');
		$this->db->select('*');
		$this->db->from('previsionieffettuate');
		$this->db->where('ID_utente', $id_utente);

		
		$q = $this->db->get();

		if($q->num_rows() > 0){

			return $q->result();
		}
	}

	function prev_in_turno($id){

		// Ritorna 1 o 0 a seconda che la previsione con l'id passato sia 
		// stata fatta da un meteorologo in turno o meno

		$this->db->select('inTurno');
		$this->db->from('previsionieffettuate');
		$this->db->where('ID', $id);
		
		$q = $this->db->get();

		if($q->num_rows() == 1){

			return $q->result();
		}
	}

}
