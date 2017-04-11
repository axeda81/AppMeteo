<?php

class Fasciaorariaprevisione_model extends CI_Model {

	function elencofasceorarie (){

		// Restituisce tutte le fasce orarie (12 fasce di 3 ore l'una, 
		// o 6 fasce da 6 ore l'una per i dati storici)
		$this->db->select('*');
		$this->db->from('fasciaorariaprevisione');
		
		$q = $this->db->get();

		if($q->num_rows() > 0){

			return $q->result();
		}

	}


}