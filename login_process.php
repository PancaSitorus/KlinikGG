<?php 
    session_start();
    include_once('functions.php'); 
    
    if(isset($_SESSION['is_logged_in'])){ 
        redirect('index.php'); 
    } 
$username = $_POST['username']; 
$password = $_POST['password']; 

$database = new mysqli('localhost', 'root', '', 'klinik_gg'); 
$query = 'SELECT * FROM user WHERE username=? AND password=?'; 
$statement = $database->prepare($query); 
$statement->bind_param('ss', $username, $password); 
$statement->execute(); 
$result_set = $statement->get_result(); 

    if($result_set->num_rows){ 
        
        $_SESSION['is_logged_in'] = TRUE;
        $result_role = mysqli_query($database,"SELECT * FROM `user` WHERE username= '$username' AND password='$password' ");
        $role = mysqli_fetch_array($result_role);
        $user = $role['role'];
        $name = $role['username'];
        if($user == 'dokter'){
            $_SESSION['role'] = $user; 
            $_SESSION['username'] = $name;
            redirect('index.php');             
        }
        else if($user == 'perawat'){
            $_SESSION['role'] = $user;
            $_SESSION['username'] = $name;
            redirect('index.php');
           
        }   
    
       
           
    }else{ 
        redirect('login_false.php'); 
    } 
?> 