<?php 
    session_start(); 
    include_once('functions.php'); 
    include('header.php');
    // when no session named 'is_logged_in'? 
    if(!isset($_SESSION['is_logged_in'])){
        redirect('login.php'); 
    } 
    // check if login with true role 
    else if(get_session('is_logged_in')==TRUE and get_session('role')!='perawat' ){
        redirect('index.php');
    }
    open_page('Payment'); 
?> 
<link rel="stylesheet" type="text/css" href="css/master.css" /> 

<?php 
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
  <div class="text-center">
  <span class="bold700">Apakah pembayaran menggunakan kupon kode?</span>
  <div class="container">
 <form action="pembayaran.php" method="post" class="center">
  
    
                    
                     <button class="btn" type="submit">Ya</button>
                  
        </form>       
    <form action="pembayaran_byperawat3.php" method="post" class="center">
    
    
                    
                     <button class="btn" type="submit">Tidak</button>
                  
    </form>
      </div>
    
  
     <?php 
    
     
    include('footer.php');
     
    
?> 
</body>
