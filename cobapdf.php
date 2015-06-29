<?php 
	$file = 'http://localhost/bimbingan/assets/komentar/Your_Electronic_Ticket_Receipt.pdf';
	$filename = 'coba.pdf';
	header('Content-type:application/pdf');
	header('Content-Disposition: inline; filename: "'.$filename.'" ');
	header('Content-Transfer-Encoding: binary');
	header('Accept-Ranges: bytes');
	@readfile($file);
 ?>