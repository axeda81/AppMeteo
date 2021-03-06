<?php

class Dettaglioprevisioni_model extends CI_Model {

	function inserisci_dati($id_preveff, $fuoriorario) {

		// Devo inserire nel DB tutte le previsioni, cioè numzone * numfasceorarie (6) = 30 righe 
		// oppure numzone * 4 se è passato mezzogiorno, e quindi 20 righe

		$result = true; // bool in cui salvo l'and dei risultati di tutti gli inserimenti, alla fine di 
		// tutto sarà false se anche un solo inserimento nel db è andato male 

		// Inizializzo $data che dovrà contenere di volta in volta la riga da inserire nel DB
		$data = array(
			'ID_previsione' => $id_preveff, /* Questo ID rimane sempre uguale per tutte le righe */
			'zona' => '',
			'ID_fasciaoraria' => 0,
			'ID_tipoprevisione' => -1
		);

		$nomevar = "";
		$numzone = 5;
		$numfasceorarie = 12;
		$numfasceorarieoggi = 4;

		$this->db->trans_start();

		for ($i = 1; $i <= $numzone; $i++) { // Scorro le zone

			for($j = 1; $j <= $numfasceorarie; $j++) {
				// Per ogni zona, scorro le fasce orarie prendendo in considerazione le prime quattro (quelle relative
				// alla giornata odierna) solo se non son passate le 12

				$nomevar = "fo${j}z${i}";
				$data['ID_tipoprevisione'] = $this->input->post($nomevar);
				$data['ID_fasciaoraria'] = $j;
				$codicezona = $i + 59;
				$data['zona'] = "${codicezona}";

				if (((($j <= $numfasceorarieoggi) and ($fuoriorario == false))) or ($j > $numfasceorarieoggi)) {
					
					$result = $result && $this->db->insert('dettaglioprevisioni', $data);
				}
			}
		}

		$this->db->trans_complete();
		
		return $result;
	}

	function inserisci_dati_storici($id_prev, $fuoriorario) {

		// Devo inserire nel DB tutte le previsioni, cioè numzone * numfasceorarie (6) = 30 righe 
		// oppure numzone * 4 se è passato mezzogiorno, e quindi 20 righe

		$result = true; // bool in cui salvo l'and dei risultati di tutti gli inserimenti, alla fine di 
		// tutto sarà false se anche un solo inserimento nel db è andato male 

		// Inizializzo $data che dovrà contenere di volta in volta la riga da inserire nel DB
		$data = array(
			'ID_previsione' => $id_prev, /* Questo ID rimane sempre uguale per tutte le righe */
			'zona' => '',
			'ID_fasciaoraria' => 0,
			'ID_tipoprevisione' => -1
		);

		$nomevar = "";
		$numzone = 5;
		$numfasceorarie = 6;
		$numfasceorarieoggi = 2;
		$cont_righe = 1;

		$this->db->trans_start();

		for ($i = 1; $i <= $numzone; $i++) { // Scorro le zone

			if ($fuoriorario == false) $cont_righe = 1; 
			else $cont_righe = 5;

			for($j = 1; $j <= $numfasceorarie; $j++) {
				// Per ogni zona, scorro le fasce orarie; per ognuna, devo inserire due righe in dettaglioprevisioni

				$nomevar = "fo${j}z${i}";
				$data['ID_tipoprevisione'] = $this->input->post($nomevar);
				$data['ID_fasciaoraria'] = $cont_righe;
				$codicezona = $i + 59;
				$data['zona'] = "${codicezona}";

				if (((($j <= $numfasceorarieoggi) and ($fuoriorario == false))) or ($j > $numfasceorarieoggi)) {
					
					$result = $result && $this->db->insert('dettaglioprevisioni', $data);
					$cont_righe = $cont_righe + 1;
					$data['ID_fasciaoraria'] = $cont_righe;
					$result = $result && $this->db->insert('dettaglioprevisioni', $data);
					$cont_righe = $cont_righe + 1;
				}
			}
		}

		$this->db->trans_complete();
		
		return $result;
	}


	function aggiorna_dati($id_preveff, $fuoriorario) {

		// Devo aggiornare nel DB tutte le previsioni, cioè numzone * numfasceorarie (12) = 60 righe 
		// oppure numzone * 8 se è passato mezzogiorno, e quindi 40 righe

		$result = true; // bool in cui salvo l'and dei risultati di tutti gli update, alla fine di 
		// tutto sarà false se anche un solo inserimento nel db è andato male 

		// Inizializzo $data che dovrà contenere di volta in volta la riga da inserire nel DB
		$data = array(
			'ID_previsione' => $id_preveff, /* Questo ID rimane sempre uguale per tutte le righe */
			'zona' => '',
			'ID_fasciaoraria' => 0,
			'ID_tipoprevisione' => -1
		);

		$nomevar = "";
		$numzone = 5;
		$numfasceorarie = 12;
		$numfasceorarieoggi = 4;

		$this->db->trans_start();

		for ($i = 1; $i <= $numzone; $i++) { // Scorro le zone

			for($j = 1; $j <= $numfasceorarie; $j++) {
				// Per ogni zona, scorro le fasce orarie prendendo in considerazione le prime due solo se non son passate le 12

				$nomevar = "fo${j}z${i}";
				$data['ID_tipoprevisione'] = $this->input->post($nomevar);
				$data['ID_fasciaoraria'] = $j;
				$codicezona = $i + 59;
				$data['zona'] = "${codicezona}";

				if ((($j <= $numfasceorarieoggi) and ($fuoriorario == false)) or ($j > $numfasceorarieoggi)) {
					
					// Non so l'ID della riga che devo aggiornare, ma dovrebbe essere identificata anche da ID_previsione + zona + fascia oraria
					$this->db->where('ID_previsione', $id_preveff);
					$this->db->where('zona', "${codicezona}");
					$this->db->where('ID_fasciaoraria', $j);

					$result = $result && $this->db->update('dettaglioprevisioni', $data);
				}
			}
		}

		$this->db->trans_complete();
		
		return $result;
	}

	function aggiorna_dati_storici($id_prev, $fuoriorario) { // TODO verificare funzionamento

		// Devo aggiornare nel DB tutte le previsioni, cioè numzone * numfasceorarie (12) = 60 righe 
		// oppure numzone * 8 se è passato mezzogiorno, e quindi 40 righe

		$result = true; // bool in cui salvo l'and dei risultati di tutti gli update, alla fine di 
		// tutto sarà false se anche un solo inserimento nel db è andato male 

		// Inizializzo $data che dovrà contenere di volta in volta la riga da inserire nel DB
		$data = array(
			'ID_previsione' => $id_prev, /* Questo ID rimane sempre uguale per tutte le righe */
			'zona' => '',
			'ID_fasciaoraria' => 0,
			'ID_tipoprevisione' => -1
		);

		$nomevar = "";
		$numzone = 5;
		$numfasceorarie = 6;
		$numfasceorarieoggi = 2;
		$cont_righe = 1;

		$this->db->trans_start();

		for ($i = 1; $i <= $numzone; $i++) { // Scorro le zone
			
			if ($fuoriorario == false) $cont_righe = 1; 
			else $cont_righe = 5;

			for($j = 1; $j <= $numfasceorarie; $j++) {
				// Per ogni zona, scorro le fasce orarie prendendo in considerazione le prime due solo se non son passate le 12

				$nomevar = "fo${j}z${i}";
				$data['ID_tipoprevisione'] = $this->input->post($nomevar);
				$data['ID_fasciaoraria'] = $cont_righe;
				$codicezona = $i + 59;
				$data['zona'] = "${codicezona}";

				if ((($j <= $numfasceorarieoggi) and ($fuoriorario == false)) or ($j > $numfasceorarieoggi)) {
					
					// Non so l'ID della riga che devo aggiornare, ma dovrebbe essere identificata anche da ID_previsione + zona + fascia oraria
					$this->db->where('ID_previsione', $id_preveff);
					$this->db->where('zona', "${codicezona}");
					$this->db->where('ID_fasciaoraria', $cont_righe);

					$result = $result && $this->db->update('dettaglioprevisioni', $data);

					$cont_righe = $cont_righe + 1;
					$this->db->where('ID_previsione', $id_preveff);
					$this->db->where('zona', "${codicezona}");
					$this->db->where('ID_fasciaoraria', $cont_righe);

					$data['ID_fasciaoraria'] = $cont_righe;
					$result = $result && $this->db->update('dettaglioprevisioni', $data);
					$cont_righe = $cont_righe + 1;
				}
			}
		}

		$this->db->trans_complete();
		
		return $result;

	}

	function elenco_previsioni($id_preveff) {

		// Deve tornare l'elenco delle righe inserite dall'utente loggato al momento nella data di oggi 
		// L'informazione su quali righe vadano prese dal DB me la da il campo ID_previsione che associa le righe
		// della tabella dettaglioprevisioni ad un certo utente e ad una certa data 
		
		$this->db->select('*');
		$this->db->from('dettaglioprevisioni');
		$this->db->where('ID_previsione', $id_preveff);
		
		$q = $this->db->get();

		if($q->num_rows() > 0){

			return $q->result();
		}
	}

	function ricerca($id_utente, $zona, $allerta, $datainizio, $datafine, $utenti) {

		$this->db->select('*');
		$this->db->from('dettaglioprevisioni');
		$this->db->join('previsionieffettuate', 'previsionieffettuate.ID = dettaglioprevisioni.ID_previsione');

		$condizione = "(previsionieffettuate.Data between '$datainizio' and '$datafine')";
		$cond_z = '';
		$cond_a = '';
		$cond_u = '';

		if (isset($utenti)) {
			if ($utenti[0] !== 'all') {

				for($i = 0; $i < count ($utenti); $i++) {

					if ($i == 0) $cond_u = "$cond_u previsionieffettuate.ID_utente = ";
					else $cond_u = "$cond_u OR previsionieffettuate.ID_utente = ";
					$cond_u = "$cond_u '$utenti[$i]'";
				}
				$cond_u = "($cond_u)";
			}
		}
		else // L'utente è un meteorologo quindi devo selezionare solo le previsioni fatte da lui
			$condizione = "$condizione AND previsionieffettuate.ID_utente = '$id_utente'"; 

		if ($cond_u !== '') $condizione = "$condizione AND $cond_u";

		if ($zona[0] !== 'all') {

			for($i = 0; $i < count ($zona); $i++) {

				if ($i == 0) $cond_z = "$cond_z dettaglioprevisioni.zona = ";
				else $cond_z = "$cond_z OR dettaglioprevisioni.zona = ";
				$cond_z = "$cond_z '$zona[$i]'";
			}
			$cond_z = "($cond_z)";
		}

		if ($cond_z !== '') $condizione = "$condizione AND $cond_z";

		if ($allerta[0] !== 'all') {

			for($i = 0; $i < count ($allerta); $i++) {

				if ($i == 0) $cond_a = "$cond_a dettaglioprevisioni.ID_tipoprevisione = ";
				else $cond_a = "$cond_a OR dettaglioprevisioni.ID_tipoprevisione = ";
				$cond_a = "$cond_a '$allerta[$i]'";
			}
			$cond_a = "($cond_a)";
		}

		if ($cond_a !== '') $condizione = "$condizione AND $cond_a";

		// echo $condizione;

		$this->db->where($condizione);	

		$q = $this->db->get();

		if($q->num_rows() > 0){

			return $q->result();
		}

	}

	function ricerca_tutto($id_utente, $zona, $allerta, $datainizio, $datafine, $prev_utente_loggato) {

		$this->db->select('*');
		$this->db->from('dettaglioprevisioni');
		$this->db->join('previsionieffettuate', 'previsionieffettuate.ID = dettaglioprevisioni.ID_previsione');

		$condizione = "(previsionieffettuate.Data between '$datainizio' and '$datafine')";
		$cond_z = '';
		$cond_a = '';

		if ($prev_utente_loggato == false) {
			// Il meteorologo loggato NON vuole vedere anche le sue previsioni, quindi le escludo.
			// Altrimenti non metto nessuna condizione su ID_utente e li prelevo tutti
			$condizione = "$condizione AND previsionieffettuate.ID_utente != '$id_utente'"; 
		}

		if ($zona[0] !== 'all') {

			for($i = 0; $i < count ($zona); $i++) {

				if ($i == 0) $cond_z = "$cond_z dettaglioprevisioni.zona = ";
				else $cond_z = "$cond_z OR dettaglioprevisioni.zona = ";
				$cond_z = "$cond_z '$zona[$i]'";
			}
			$cond_z = "($cond_z)";
		}

		if ($cond_z !== '') $condizione = "$condizione AND $cond_z";

		if ($allerta[0] !== 'all') {

			for($i = 0; $i < count ($allerta); $i++) {

				if ($i == 0) $cond_a = "$cond_a dettaglioprevisioni.ID_tipoprevisione = ";
				else $cond_a = "$cond_a OR dettaglioprevisioni.ID_tipoprevisione = ";
				$cond_a = "$cond_a '$allerta[$i]'";
			}
			$cond_a = "($cond_a)";
		}

		if ($cond_a !== '') $condizione = "$condizione AND $cond_a";

		 //echo $condizione;

		$this->db->where($condizione);	

		$q = $this->db->get();

		if($q->num_rows() > 0){

			return $q->result();
		}

	}

	function elimina_dati ($id_preveff) {

		// Elimina tutte le righe con id_previsione uguale al parametro passato
		$this->db->where('ID_previsione', $id_preveff);
		$this->db->delete('dettaglioprevisioni');
	}

}
