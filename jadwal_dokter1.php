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
		border-bottom: 3px solid #000000;
		
		width:1300px;
		padding: 0px 20px 0px 80px;
		height:62px;
		margin-top: 0px;
	}
	.nav_bar ul{
		padding:0;
		list-style: none;
	}
	.nav_bar ul li{
		float:left;
		font-size: 13px;
		font-weight: bold;
		margin-right: 30px;
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
		-moz-border-radius-topleft:30px;
		-moz-border-radius-topright:30px;
		width:280px;
		display: block;
		text-align: center;
	}	
	.nav_bar ul li a:hover{
		text-decoration: none;
		color: #000000;
		background: #96e0e9;
		-moz-transition: background-color 100ms ease-in;
		-webkit-transition:background-color 200ms ease-in;
		-ms-transition: background-color 200ms ease-in;
		-o-transition: background-color 200ms ease-in;
	}
	.nav_bar ul li a#onlink{
		background:#ffffff;
		color:#000000;
		border-bottom: 9px solid #ffffff;
	}
	.nav_bar ul li a#onlink:hover{
		background:#ffffff;
		color:#000000;
	}

		.main_container{
		margin:auto;
		width: 1300px;
		padding: 80px;
		border:3px solid #000000;
		min-height: 900px;
		border-top: 10px;
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

	<div class="nav_bar">
		<ul>
			<li><a href="profil_dokter1.php">Profil Dokter</a></li>
			<li><a href="jadwal_dokter1.php"id="onlink">Jadwal Dokter</a></li>
			
		</ul>
	</div>
	<div class="main_container" style="text-align: justify;">
			<u>
			<div class="bold600 color-child-6">
                <div class="container">
                    <h1>Berikut ini adalah Jadwal Dokter Klinik GG</h1>
                </div>
            </div>
        	</u><br>
		<!-- isi jadwalnya-->
		<?php 
			include('jadwal.php');
		?>
		<!-- /isi jadwalnya-->

</div>
<br>






<?php 
    
     
    include('footer.php');
     
    
?> 

</body>
</html>