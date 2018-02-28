<?php 
    function get_title($_title){ 
        return('<title>' .$_title. '</title>'); 
    } 

    function ubahTanggal($tanggal){
        $pisah = explode('/',$tanggal);
        $larik = array($pisah[3], $pisah[1], $pisah[2]);
        $satukan = implode('-', $larik);
        return $satukan;
    }//digunakan untuk membalikkan format tanggal agar bisa disimpan di database

    function open_page($_title){ 
        echo('<html><head>' .get_title($_title). '<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="1.css"></head></head><body>'); 
    } 
    
    function close_page(){ 
        echo('</body></html>'); 
    } 
    
    function redirect($_location){ 
        header('Location: ' .$_location); 
    } 
    function get_session($_key){   
        $value = (isset($_SESSION[$_key]))? $_SESSION[$_key]: NULL;   
        return($value);  
    }    
    
    function set_session($_key, $_value){   
        $_SESSION[$_key] = $_value;  
    }    
    
    function destroy_session($_key){   
        unset($_SESSION[$_key]);  
    }    
?>