<?php
	session_start();
    include_once('functions.php'); 
    
     if(!isset($_SESSION['is_logged_in'])){ 
       redirect('index.php'); 
    } 
    $biaya = $_POST['biaya'];
	$idKupon = $_POST['kodeDiskon'];
	$database = new mysqli('localhost', 'root', '', 'klinik_gg'); 
	$query = 'SELECT * FROM kupon WHERE idKupon=? and status = 0'; 
	$statement = $database->prepare($query); 
	$statement->bind_param('s', $idKupon); 
	$statement->execute(); 
	$result_set = $statement->get_result(); 
	if($result_set->num_rows){
		$query = 'UPDATE kupon SET status = 1 WHERE idKupon=?'; 
		$statement = $database->prepare($query); 
		$statement->bind_param('s', $idKupon); 
		$statement->execute(); 
		$result_set = $statement->get_result(); 
		redirect('pembayaran_byperawat1.php?biaya='.$biaya);
			 }
	else{
		redirect('pembayaran_byperawat2.php?biaya='.$biaya);
	} 

?>