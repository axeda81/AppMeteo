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
		$id_preveff = $this->session->userdata('$id_preveff');
		$previsioni = $this->Dettaglioprevisioni_model->elenco_previsioni($id_preveff);
		$dati_previsione = $this->Previsionieffettuate_model->dati_previsione($id_preveff);
		$fasceorarie = $this->Fasciaorariaprevisione_model->elencofasceorarie_3ore();
		$inTurno = $this->input->post('inTurno');
	







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
            </thead>'; 

    $html .= ' <tbody>
    									<tr>
    										<td>1</td>
    										<td>2</td>
    										<td>3</td>
    										<td>4</td>
    										<td>5</td>
    										<td>6</td>
    									</tr>
    						</tbody></table>';






		// Footer che verrà ripetuto su ogni pagina

		$pdf->pagenumPrefix = 'Pag. ';
		$pdf->pagenumSuffix = ' / ';
		$pdf->SetFooter('{PAGENO}{nbpg}');

		// Scrivo tutta la stringa HTML nel file PDF che devo confezionare
		$pdf->WriteHTML($html,2);
		// Tutto ciò che ho scritto viene poi mandato sul file $pdfpath e scaricato senza chiedere conferma 
		$pdf->Output($pdfpath, 'D'); // D = Download diretto 
	}



}