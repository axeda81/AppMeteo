<?php

class CreaPDF extends CI_Controller {

	function crea_bollettino()
	{

		$this->load->library('m_pdf');

		$pdf = $this->m_pdf->pdf;
		$pdfpath = 'BollettinoTemporali_'.date('d-m-Y', time()).".pdf"; // Nome del file
		$pdf->SetAuthor($this->session->userdata('username')); // Autore 

		// Header che verrà ripetuto su ogni pagina 
		$header = "Bollettino temporali del ".date('d-m-Y', time())." alle ore ".date('H:i', time()).".";
		$pdf->SetHeader($header);	
		
		// Dati che vanno inseriti nel bollettino
		$id_preveff = $this->session->userdata('id_preveff');

		$previsioni = $this->Dettaglioprevisioni_model->elenco_previsioni($id_preveff);
		$dati_previsione = $this->Previsionieffettuate_model->dati_previsione($id_preveff);
		$fasceorarie = $this->Fasciaorariaprevisione_model->elencofasceorarie_3ore();
		$inTurno = $this->session->userdata('inTurno');

		// Formattazione delle date di oggi e domani
    $oggi = date('d-m-Y', strtotime($dati_previsione[0]->Data)); 
    $domani = date('d-m-Y',strtotime($oggi.' +'."1".' days'));          

    // Costruisco una stringa contenente il codice HTML che andrà poi a formare il file PDF
		$html='<table border="1" align="center">
            <thead>
              <tr>
                <th>Data previsione</th>
                <th>Ora previsione</th>
                <th>Zona</th>
                <th>Fascia Oraria</th>
                <th>Previsione</th>
                <th>Allerta</th>
              </tr>
            </thead>
            <tbody>'; 

		if(isset($previsioni)) : 
			foreach($previsioni as $row):

				$html .= '<tr>';

				$html .= '<td>'.$oggi.'</td>';
				$html .= '<td>'.$dati_previsione[0]->Ora.'</td>';
				$html .= '<td>'.$row->zona.'</td>';

				$tmp = '';

        switch ($row->ID_fasciaoraria) {
          case "1": $tmp = "Dalle 12:00 alle 15:00 del ".$oggi; break;
          case "2": $tmp = "Dalle 15:00 alle 18:00 del ".$oggi; break;
          case "3": $tmp = "Dalle 18:00 alle 21:00 del ".$oggi; break;
          case "4": $tmp = "Dalle 21:00 alle 24:00 del ".$oggi; break;
          case "5": $tmp = "Dalle 00:00 alle 03:00 del ".$domani; break;
          case "6": $tmp = "Dalle 03:00 alle 06:00 del ".$domani; break;
          case "7": $tmp = "Dalle 06:00 alle 09:00 del ".$domani; break;
          case "8": $tmp = "Dalle 09:00 alle 12:00 del ".$domani; break;
          case "9": $tmp = "Dalle 12:00 alle 15:00 del ".$domani; break;
          case "10": $tmp = "Dalle 15:00 alle 18:00 del ".$domani; break;
          case "11": $tmp = "Dalle 18:00 alle 21:00 del ".$domani; break;
          case "12": $tmp = "Dalle 21:00 alle 24:00 del ".$domani; break;
          default: break;
        }

				$html .= '<td class = "fasciaoraria">'.$tmp.'</td>';

				$tmp = '';

        switch ($row->ID_tipoprevisione) {
          case "0": $tmp = "No temporali"; break;
          case "1": $tmp = "Temporali sparsi"; break;
          case "2": $tmp = "Temporali diffusi"; break;
          default: break;
        }

        $html .= '<td>'.$tmp.'</td>';

				$tmp = '';

        switch ($row->ID_tipoprevisione) {
          case "0": $tmp = "Verde"; break;
          case "1": $tmp = "Gialla"; break;
          case "2": $tmp = "Arancione"; break;
          default: break;
        }

        $html .= '<td>'.$tmp.'</td>';

				$html .= '</tr>';

      endforeach;
  	endif;

	  $html .= '</tbody></table>';

		$pdf->WriteHTML($html,2);	// Scrivo sul pdf il codice html appena confezionato

		// Footer che verrà ripetuto su ogni pagina

		$pdf->pagenumPrefix = 'Pag. ';
		$pdf->pagenumSuffix = ' / ';
		$pdf->SetFooter('{PAGENO}{nbpg}');

		// Tutto ciò che ho scritto viene poi mandato sul file $pdfpath e scaricato senza chiedere conferma 
		$pdf->Output($pdfpath, 'D'); // D = Download diretto 
	}
}