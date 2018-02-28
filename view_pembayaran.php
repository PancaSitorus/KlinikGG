<?php 
    include_once('functions.php');
    session_start();
    
    if(!isset($_SESSION['is_logged_in'])){
        redirect('login.php'); 
    } 
    // check if login with true role 
    else if(get_session('is_logged_in')==TRUE and get_session('role')!='perawat' ){
        redirect('index.php');
    }
    else{
    open_page('Jadwal Dokter'); 
    $database = new mysqli('localhost', 'root', '', 'klinik_gg'); 
    $query = "SELECT *  from pembayaran";
    $result_set = $database->query($query);


    
    
?> 

<?php
    echo'<center>';
    echo('<table style="border:2px;"> '); 
    echo('<thead>'); 
    echo('<tr>'); 
    echo('<td><centre><strong>Tanggal Pembayaran</strong></centre></td>');
    echo('<td><centre><strong>Total Pembayaran</strong></centre></td>');
    echo('<td><centre><strong>Nomor Kupon</strong></centre></td>');
    echo('</tr>'); 
    echo('</thead>'); 
    echo('<tbody>'); 
   
    while($row = $result_set->fetch_array()){ 
        echo('<tr>'); 
        
        echo('<td>' .$row['tanggalPembayaran']. '</td>'); 
        echo('<td>' ."Rp.".$row['totalPembayaran']. '</td>'); 
        echo('<td>' .$row['idKupon']. '</td>'); 
        echo('</tr>');

        
        
    } 
    echo('</tbody>');
    echo('<tfoot>');
      
    echo('<tfoot>');
    echo('</table>'); 
    echo'</center>';
    $database->close(); 
    close_page(); 
    }
?> 





