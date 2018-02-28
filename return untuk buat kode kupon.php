<?php
	$amount;
	if($amount>=500000){
		$date=date('y-m-dh:i:s'); 
    	$idKupon=substr(md5($date),0,10);
		echo 'Selamat anda mendapatkan Kupon Potongan Harga 10% dengan nomor kupon ='.$idKupon;
		echo'<br> Ingat nomor kupon anda, agar bisa digunkan pada pembayaran berikutnya';
		$database = new mysqli('localhost', 'root', '', 'klinik_gg');
		$query = 'INSERT INTO kupon(`idKupon`, `status`) VALUES (?, 0)';

		$statement = $database->prepare($query);
		$statement->bind_param('s', $idKupon);
		
		$statement->execute();
	}
	else{
		echo("Silahkan melakukan transaksi hingga Rp.500.000,00 agar mendapat kupon diskon")
	}
?>