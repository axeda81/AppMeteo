<?php

class Fasciaorariaprevisione_old_model extends CI_Model {

	function elencofasceorarie ()
	{

		// Restituisce tutte le fasce orarie (6 fasce da 6 ore l'una per i dati storici)
		$this->db->select('*');
		$this->db->from('fasciaorariaprevisione_old');
		
		$q = $this->db->get();

		if($q->num_rows() > 0){

			return $q->result();
		}
	}
}