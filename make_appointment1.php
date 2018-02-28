<?php 
   	session_start(); 
    include_once('functions.php'); 
    include('header.php');
    open_page('Doctors'); 
?> 

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Creative Responsive Bootstrap Multi-Purpose HTML Template">
<meta name="keywords" content="H2O, Creative, Agency, Portfolio, Freelancer, Shop, Store,Bootstrap, HTML, Template, One page">
<meta name="author" content="Vadzim Liashkevich">
 
<style>


	.nav_bar{
		margin:auto;
		border-bottom: 1px solid #000000;
		width:1110px;
		padding: 0px 20px 0px 20px;
		height:64px;
		margin-top: 30px;
	}
	.nav_bar ul{
		padding:0;
		list-style: none;
	}
	.nav_bar ul li{
		float:left;
		font-size: 16px;
		font-weight: bold;
		margin-right: 10px;
	}
	.nav_bar ul li a{
		text-decoration: none;
		color: #000000;
		background: #00A4E4;
		border: 1px solid #000000;
		border-bottom: none;
		padding: 20px 20px 20px 20px;
		-webkit-border-top-right-radius:10px;
		-webkit-border-top-left-radius:10px;
		-moz-border-radius-topleft:10px;
		-moz-border-radius-topright:10px;
		width:230px;
		display: block;
		text-align: center;
	}	
	.nav_bar ul li a:hover{
		text-decoration: none;
		color: #000000;
		background: #96e0e9;
		-moz-transition: background-color 200ms ease-in;
		-webkit-transition:background-color 200ms ease-in;
		-ms-transition: background-color 200ms ease-in;
		-o-transition: background-color 200ms ease-in;
	}
	.nav_bar ul li a#onlink{
		background:#ffffff;
		color:#000000;
		border-bottom: 1px solid #ffffff;
	}
	.nav_bar ul li a#onlink:hover{
		background:#ffffff;
		color:#000000;
	}

		.main_container{
		margin:auto;
		width: 1110px;
		padding: 20px;
		border:1px solid #000000;
		min-height: 500px;
		border-top: none;
		background: #ffffff; 
	}
</style>
<!-- =========================
     MAIN MENU
============================== -->
<!--
<div id="smartposition"></div>
<div class="top-menu" id="top-menu">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="mobile-bar-cont">
					<div class="top-menu-logo"> <a href="#"><img src="images/logo.svg" alt="" />
						<span class="bold600 color-child-6">DENTAL</span>
						<span class="color-child-5">CLINIC</span>
						</a> </div>
					<div class="mobile-bar">
						<div class="show-menu" id="show-menu"> <i class="fa fa-bars"></i> </div>
					</div>
				</div>
				<ul class="nav navbar-nav">
					<li><a href="index.php">HOME</a></li>
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
					<li class="dropdown active"> <a href="#">Tim Dokter</a>
					</li>
					<li><a href="contacts.php">CONTACT US</a></li>
				</ul>
			</div>
		</div>
	</div>
</div> -->

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
										<li class="active"> <a href="doctors.php">OUR DOCTOR</a>
										</li>
										<li><a href="contacts.php">CONTACT US</a></li>
										<li><a href="doctor.php">SCHEDULE</a></li>
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
										<li class="active"> <a href="doctors.php">OUR DOCTOR</a>
										</li>
										<li><a href="contacts.php">CONTACT US</a></li>
										<li><a href="form_pembayaran.php">PAYMENT</a></li>
										<li><a href="manager.php">Control Schedule</a></li>
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
										<li class="active"> <a href="doctors.php">OUR DOCTOR</a>
										</li>
										<li><a href="contacts.php">CONTACT US</a></li>
										<li><a href="contacts.php">GENERAL</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>');
            }            
    ?> 
<!-- =========================
     END MAIN MENU
============================== --> 
<div class="page-title page-title-doctor bg-pattern" data-bgcolor="2BAAA1">
	<div class="page-title-overlay">
		<div class="container">
			<h1>Arif</h1>
			<p>General Dentist (Dokter Gigi Umum)</p>
		</div>
	</div>
</div>
<div class="breadcrumbs">
	<div class="container">
		<div class="row">
			<ol class="breadcrumb">
				<li class="breadcrumb-home"><a href="#"><i class="fa fa-home"></i></a></li>
				<li><a href="doctors.php">Our Doctor</a></li>
				<li class="active">Arif</li>
			</ol>
		</div>
	</div>
</div>




<br>
<h1 style="color: black" align="center">Ciri Ciri Balita Sehat</h1>
	<div class="nav_bar ">
		<ul>
			<li><a href="profil_dokter1.php">Profil Dokter</a></li>
			<li><a href="jadwal_dokter1.php">Jadwal Dokter</a></li>
			<li><a href="make_appointment1.php"id="onlink">Make an  Appointment</a></li>
			<!--<li><a href="ciriciriBalitaSehat3.html">Umur 3-5 Tahun</a></li>-->
		</ul>
	</div>
	<div class="main_container" style="text-align: justify;">
		<div class="doctor-text-booking">
						<h2 class="section-title">
							<span class="bold700">MAKE AN APPOINTMENT</span>
						</h2>
						<form class="bookform-form" action="js/sendmail-book.php" role="form" method="post">
							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item name">
									<input type="text" name="name" id="name" data-validation="required" placeholder="Nama" />
									<div class="help help-sm help-red">!</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 booking-form-item phone">
									<input type="text" name="phone" id="phone" data-validation="required" placeholder="Nomor Telepon" />
									<div class="help help-sm help-red">!</div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 booking-form-item email">
									<input type="text" name="email" id="email" placeholder="E-mail" />
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 booking-form-item date">
									<input type="text" class="datepicker-f" id="datepicker" name="date" data-validation="required" placeholder="Tanggal" />
									<div class="help help-sm help-red">!</div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 booking-form-item time-f">
									<input type="text" class="timepicker-f" id="timepicker" name="time" data-validation="required" placeholder="Pilih jam" />
									<div class="help help-sm help-red">!</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item">
									<textarea name="message" id="message" placeholder="Pesan.."></textarea>
								</div>
							</div>
							<div class="row" style="display:none;">
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item honeypot">
									<label class="fl_label" for="last">Honeypot:</label>
									<input type="text" name="last" value="" id="last" class="form-control fl_input">
								</div>
							</div>
							<div class="row latest-row">
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 booking-form-item">
									<button class="btn btn-primary">KIRIM</button>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 booking-form-item">
									<div class="help t-tooltip t-left"> ?
										<div class="tt-row-item-active-hover"></div>
										<div class="t-tooltip-text">
											<div class="t-tooltip-text-body">Silahkan anda baca panduan dibawah ini jika anda tidak bisa menghubungi kami.<br>
												<a href="#" class="btn btn-primary-1 btn-sm">Selengkapnya</a> </div>
											<div class="t-tooltip-text-hover"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="form-messages"></div>
						</form>
					</div>
		
	</div>
	
<br>






<?php 
    
     
    include('footer.php');
     
    
?> 

</body>
</html>