<?php 
    session_start(); 
    include_once('functions.php'); 
    
    // when no session named 'is_logged_in'? 
    if(!isset($_SESSION['is_logged_in'])){
    redirect('login.php'); 
    } 
    // check if login with true role 
    else if(get_session('is_logged_in')==TRUE and get_session('role')!='perawat' ){
        redirect('index.php');
    }
    $database = new mysqli('localhost', 'root', '', 'klinik_gg'); 
    // retrieve posted form data 
    $tanggal = $_POST['date']; 
    $total = $_POST['totalPembayaran']; 
    $idKupon= $_POST['idKupon'];


  
    $tanggalUbah = ubahTanggal($tanggal);   
    
    $query = 'INSERT INTO pembayaran(`tanggalPembayaran`, `totalPembayaran`, `idKupon`) VALUES(?, ?, ?)'; 
    $statement = $database->prepare($query); 
    $statement->bind_param('dss', $tanggal, $total, $idKupon); 
    $statement->execute(); 
    mysqli_close($database);
    redirect('view_pembayaran.php'); 
?> 