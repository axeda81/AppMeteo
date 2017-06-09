<?php

class Fasciaorariaprevisione_model extends CI_Model {

	function elencofasceorarie_3ore ()
	{
		// // Restituisce tutte le fasce orarie di 3 ore (12 fasce)
		$this->db->select('*');
		$this->db->from('fasciaorariaprevisione');
		$this->db->where('id <', 13); 

		$q = $this->db->get();

		if($q->num_rows() > 0){

			return $q->result();
		}
	}

	function elencofasceorarie_6ore ()
	{

		// Restituisce tutte le fasce orarie (12 fasce di 3 ore l'una)
		$this->db->select('*');
		$this->db->from('fasciaorariaprevisione');
		$this->db->where('id >', 12); 

		$q = $this->db->get();

		if($q->num_rows() > 0){

			return $q->result();
		}
	}

}