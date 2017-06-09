<?php

class Fasciaorariaprevisione_model extends CI_Model {

	function elencofasceorarie ()
	{

		// Restituisce tutte le fasce orarie (12 fasce di 3 ore l'una)
		$this->db->select('*');
		$this->db->from('fasciaorariaprevisione');
		
		$q = $this->db->get();

		if($q->num_rows() > 0){

			return $q->result();
		}
	}
}