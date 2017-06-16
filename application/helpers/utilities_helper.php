<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// Torna true se l'orario attuale è oltre le 12:00
function fuoriorariomax()
{

	$max = 43200; // orario massimo espresso in secondi (12:00 = 43200)
	$ora_attuale = date('H.i', time()); // estraggo l'ora attuale
	$ora = explode(".", $ora_attuale); // ricavo ora e minuti separati
	$ore = $ora[0];
	$minuti = $ora[1];
	$tempo = ($ore*3600) + ($minuti*60); // trasformo ora e minuti attuali in secondi

	if ($tempo > $max) return true;
	else return false;
}

function is_logged_in($is_logged_in)
{
	// Verifico se c'è una sessione attiva, altrimenti torno al login

	if(!isset($is_logged_in) || $is_logged_in == false) {

		$paginaIniziale = base_url().'index.php/login';
		echo 'Sessione scaduta o login non effettuato - non hai il permesso di accedere a questa pagina. <a href='.$paginaIniziale.'>Login </a>';

		die();
	}
}