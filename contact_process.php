<?php
	$admin = 'marcellino2302@marcellino.xyz';  //email 
	
	$nama	 = htmlentities($_POST['name']);
	$email	 = htmlentities($_POST['email']);
	$wa	     = htmlentities($_POST['wa']);
	$subject = htmlentities($_POST['subject']);
	$pesan	 = htmlentities($_POST['message']);
	
	$logo    = 'img/logo.png';
	$link    = 'https://marcellino.xyz/';
	
	$body  = "Tanggal   : ".date("d/m/Y")." \n";
	$body .= "Jam       : ".date("h:i:s a")." \n\n";
	$body .= "Nama      : $nama \n";
	$body .= "Email     : $email \n";
	$body .= "WhatsApp  : $wa \n";
	$body .= "Pesan     : $pesan \n";
	
	$pengirim	= 'Dari: '.$nama.' <'.$email.'>';
	
	mail($admin, $subject, $body, $pengirim);
	header("location: https://marcellino.xyz/");
?>