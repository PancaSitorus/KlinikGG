<link rel="stylesheet" type="text/css" href="css/master.css" /> 
<?php 
session_start();
    include_once('functions.php'); 
    
     if(!isset($_SESSION['is_logged_in'])){ 
       redirect('index.php'); 
    } 
            if(isset($_SESSION['is_logged_in'])){ 
                if($_SESSION['role']=='dokter'){
                    echo('<!-- =========================
               MAIN MENU
          ============================== -->
          <div id="smartposition"></div>
          <div class="top-menu" id="top-menu">
            <div class="container">
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="mobile-bar-cont">
                    <div class="top-menu-logo"> <a href="#"><img src="images/Logoku.png" alt="" />
                      <span class="bold600 color-child-6">FRESH</span>
                      <span class="color-child-5">DENTAL CLINIC</span>
                      </a> </div>
                    <div class="mobile-bar">
                      <div class="show-menu" id="show-menu"> <i class="fa fa-bars"></i> </div>
                    </div>
                  </div>
                  <ul class="nav navbar-nav">
                    <li ><a href="index.php">HOME</a></li>
                    <li ><a href="about.php">ABOUT US</a></li>
                    <li class="dropdown"> <a data-toggle="dropdown" href="#">SERVICES</a>
                      <ul class="dropdown-menu with-bg" role="menu">
                        <li><a href="services.php">Oral exams</a></li>
                        <li><a href="services1.php">Teeth whitening</a></li>
                        <li><a href="services2.php">Teeth cleaning</a></li>
                        <li><a href="services3.php">X-rays</a></li>
                        <li><a href="services4.php">Crowns</a></li>
                        <li><a href="services5.php">Fillings and bridges</a></li>
                        <li><a href="services6.php">Implants</a></li>
                        <li><a href="services7.php">Extractions</a></li>
                        <li><a href="services8.php">Root canals</a></li>
                        <li><a href="services9.php">Surgical implant placements</a></li>
                      </ul>
                    </li>
                    <li> <a href="doctors.php">OUR DOCTOR</a>
                    </li>
                    <li ><a href="contacts.php">CONTACT US</a></li>
                    <li class="active"><a href="pembayaran_byperawat.php">PAYMENT</a></li>
                    <li><a href="manager.php">CONTROL SCHEDULE</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>');
                }
                if($_SESSION['role']=='perawat'){
                    echo('<!-- =========================
               MAIN MENU
          ============================== -->
          <div id="smartposition"></div>
          <div class="top-menu" id="top-menu">
            <div class="container">
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="mobile-bar-cont">
                    <div class="top-menu-logo"> <a href="#"><img src="images/Logoku.png" alt="" />
                      <span class="bold600 color-child-6">FRESH</span>
                      <span class="color-child-5">DENTAL CLINIC</span>
                      </a> </div>
                    <div class="mobile-bar">
                      <div class="show-menu" id="show-menu"> <i class="fa fa-bars"></i> </div>
                    </div>
                  </div>
                  <ul class="nav navbar-nav">
                    <li ><a href="index.php">HOME</a></li>
                    <li><a href="about.php">ABOUT US</a></li>
                    <li class="dropdown"> <a data-toggle="dropdown" href="#">SERVICES</a>
                      <ul class="dropdown-menu with-bg" role="menu">
                        <li><a href="services.php">Oral exams</a></li>
                        <li><a href="services1.php">Teeth whitening</a></li>
                        <li><a href="services2.php">Teeth cleaning</a></li>
                        <li><a href="services3.php">X-rays</a></li>
                        <li><a href="services4.php">Crowns</a></li>
                        <li><a href="services5.php">Fillings and bridges</a></li>
                        <li><a href="services6.php">Implants</a></li>
                        <li><a href="services7.php">Extractions</a></li>
                        <li><a href="services8.php">Root canals</a></li>
                        <li><a href="services9.php">Surgical implant placements</a></li>
                      </ul>
                    </li>
                    <li> <a href="doctors.php">OUR DOCTOR</a>
                    </li>
                    <li ><a href="contacts.php">CONTACT US</a></li>
                    <li class="active"><a href="pembayaran_byperawat.php">PAYMENT</a></li>
                    <li><a href="manager.php">CONTROL SCHEDULE</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>');
                }
                
            }else{ 
                echo('<!-- =========================
               MAIN MENU
          ============================== -->
          <div id="smartposition"></div>
          <div class="top-menu" id="top-menu">
            <div class="container">
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="mobile-bar-cont">
                    <div class="top-menu-logo"> <a href="#"><img src="images/Logoku.png" alt="" />
                      <span class="bold600 color-child-6">FRESH</span>
                      <span class="color-child-5">DENTAL CLINIC</span>
                      </a> </div>
                    <div class="mobile-bar">
                      <div class="show-menu" id="show-menu"> <i class="fa fa-bars"></i> </div>
                    </div>
                  </div>
                  <ul class="nav navbar-nav">
                    <li ><a href="index.php">HOME</a></li>
                    <li ><a href="about.php">ABOUT US</a></li>
                    <li class="dropdown"> <a data-toggle="dropdown" href="#">SERVICES</a>
                      <ul class="dropdown-menu with-bg" role="menu">
                        <li><a href="services.php">Oral exams</a></li>
                        <li><a href="services1.php">Teeth whitening</a></li>
                        <li><a href="services2.php">Teeth cleaning</a></li>
                        <li><a href="services3.php">X-rays</a></li>
                        <li><a href="services4.php">Crowns</a></li>
                        <li><a href="services5.php">Fillings and bridges</a></li>
                        <li><a href="services6.php">Implants</a></li>
                        <li><a href="services7.php">Extractions</a></li>
                        <li><a href="services8.php">Root canals</a></li>
                        <li><a href="services9.php">Surgical implant placements</a></li>
                      </ul>
                    </li>
                    <li> <a href="doctors.php">OUR DOCTOR</a>
                    </li>
                    <li ><a href="contacts.php">CONTACT US</a></li>
                    <li><a href="contacts.php">GENERAL</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>');
            }            
    $totalPembayaran = $_POST['totalPembayaran'];
    ?> 






    <div class="page-title page-title-doctor bg-pattern" data-bgcolor="2BAAA1">
  <div class="page-title-overlay">
    <div class="container">
      <h1>Pembayaran Klinik GG</h1>
      <p>Berikut ini merupakan Transaksi Pembayaran pada klinik kami.</p>
    </div>
  </div>
</div>
<div class="breadcrumbs">
  <div class="container">
    <div class="row">
      <ol class="breadcrumb">
        <li class="breadcrumb-home"><a href="#"><i class="fa fa-home"></i></a></li>
        <li  class="active"><a href="#">Payment </a></li>
      </ol>
    </div>
  </div>
</div>

<body>
 <form action="process.php" method="post" class="center">
  <div class="container">
    <div class="doctor-text-booking">
      <h2 class="section-title">
        <span class="bold700">PEMBAYARAN</span>
      </h2>
          
              <div class="row">
                <div class="text-center">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <label>
                    <span class="bold700">Total Pembayaran : </span>
                      Rp<?php echo'<input type="text" value="'.$totalPembayaran.'" id="totalPembayaran" class="input-sm" name="totalPembayaran" >' ?><br>
                   <?php
	
    $biaya = $_POST['totalPembayaran'];
	if($biaya>=500000){
		$date=date('y-m-dh:i:s'); 
    	$idKupon=substr(md5($date),0,10);
		echo 'Selamat anda mendapatkan Kupon Potongan Harga 10% dengan nomor kupon ='.$idKupon;
		echo'<br> Ingat nomor kupon anda, agar bisa digunakan pada pembayaran berikutnya';
		$database = new mysqli('localhost', 'root', '', 'klinik_gg');
		$query = 'INSERT INTO kupon(`idKupon`, `status`) VALUES (?, 0)';

		$statement = $database->prepare($query);
		$statement->bind_param('s', $idKupon);
		
		$statement->execute();
	}else{
    echo'Maaf pembayaran anda belum mencapai Rp500.000,00.<br> Sehingga anda tidak mendapatkan kode voucher potongan harga sebesar 10%.';
  }
	

?>
                  </label>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    
                  </div>
                  <label>
                  <div class="text-center">
                    <div class="col-lg-12 col-md-12 col-12 col-xs-12 booking-form-item">
                  <button class="btn btn-primary" type="submit">Bayar</button>
                    </div>
                  </div>
                  </div>
                </div>
              </div>   
    </form>
  </div>
</div>
</form>
     <?php 
    
     
    include('footer.php');
     
    
?> 
</body>
