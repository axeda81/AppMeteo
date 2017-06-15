<?php

class CreatePDF extends CI_Controller {

function crea_bollettino(){

	$html = '<h1>mPDF</h1><h2>Hello</h2>';
	$pdfpath = "provapdf.pdf";
	$this->load->library('m_pdf');

	$this->m_pdf->pdf->SetAuthor($this->session->userdata('username'));
	$this->m_pdf->pdf->SetHeader("Header di prova");
	$this->m_pdf->pdf->SetFooter("Footer di prova");
	

	$this->m_pdf->pdf->WriteHTML($html,2);

	$this->m_pdf->pdf->AddPage(); // Ripete header e footer!
	$this->m_pdf->pdf->WriteHTML('Pagina 2 ');

	$this->m_pdf->pdf->Output($pdfpath, 'D'); // D = Download diretto 
	
	}




}