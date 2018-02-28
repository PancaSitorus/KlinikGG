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
										<li class="active"><a href="contacts.php">CONTACT US</a></li>
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
										<li> <a href="doctors.php">OUR DOCTOR</a>
										</li>
										<li class="active"><a href="contacts.php">CONTACT US</a></li>
										<li><a href="pembayaran_byperawat.php">PAYMENT</a></li>
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
										<li > <a href="doctors.php">OUR DOCTOR</a>
										</li>
										<li class="active"><a href="contacts.php">CONTACT US</a></li>
										
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
<div class="page-title page-title-contacts bg-pattern" data-bgcolor="3B4B89">
	<div class="page-title-overlay">
		<div class="container">
			<h1>HUBUNGI KAMI</h1>
			<p>Klinik kami dapat anda hubungi 24 jam dengan mengisi form ataupun melalui kontak yang sudah kami sediakan :)</p>
		</div>
	</div>
</div>
<div class="breadcrumbs">
	<div class="container">
		<div class="row">
			<ol class="breadcrumb">
				<li class="breadcrumb-home"><a href="#"><i class="fa fa-home"></i></a></li>
				<li class="active">Hubungi Kami</li>
			</ol>
		</div>
	</div>
</div>


<!--Buat Baru-->
<div class="blog blog-2">
    <div class="container">
        <div class="row">
            
            <div class="blog-container col-lg-9 col-md-9 col-sm-9 col-xs-12">
                
                <div class="row">
                    
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-24">

                        <h2 class="section-title">
							<span class="bold700">HUBUNGI KAMI</span>
						</h2>
						<p class="section-subtitle">Silahkan anda isi form berikut ini untuk menghubungi kami.</p>
						<form action="js/sendmail.php" role="form" method="post" autocomplete="off" id="contactForm">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="row">
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item name">
										<input type="text" name="name" id="name" data-validation="required" placeholder="Your name" />
										<div class="help help-sm help-red">!</div>
									</div>
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item phone">
										<input type="text" name="phone" id="phone" data-validation="required" placeholder="Phone" />
										<div class="help help-sm help-red">!</div>
									</div>
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item email">
										<input type="text" name="email" id="email" placeholder="E-mail" />
									</div>
								</div>
							</div>
							<div class="col-lg-6 col col-md-6 col-sm-6 col-xs-12">
								<div class="row">
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item">
										<textarea name="message" id="message" data-validation="required" placeholder="Your message.."></textarea>
										<div class="help help-sm help-red">!</div>
									</div>
								</div>
							</div>
							<div class="row" style="display:none;">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item honeypot">
							<label class="fl_label" for="last">Honeypot:</label>
								<input type="text" name="last" value="" id="last" class="form-control fl_input">
						</div>
							</div>
							<div class="row latest-row">
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item">
									<button class="btn btn-primary">SEND</button>
								</div>
							</div>
							<div class="message">
								<div class="divide-xs"></div>
								<div class="alert"></div>
							</div>
						</form> 
                    </div> 
                </div>       
            </div>
            
            <div class="right-bar col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="right-bar-categories">
                    <h3 class="right-bar-title">KONTAK KAMI</h3>

                   
							<div class="map-info-contacts">
								<div class="map-info-phone"> <i class="fa fa-phone"></i>
									<span>082364639116</span>
								</div>
								<div class="map-info-mail"> <i class="fa fa-envelope"></i>
									<span><a href="">office@dental.com</a></span>
								</div>
								<div class="map-info-location"> <i class="flaticon-navigation-arrow"></i>
									<span>Jln Sisingamangaraja  <br>Sitoluama Laguboti</span>
								</div>
							</div>
							<div class="map-info-socials"> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-google-plus"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-skype"></i></a> </div>
						

                </div> 
            </div>
            
        </div>
    </div>
</div>

<?php 
    
     
    include('footer.php');
     
    
?> 
</body>
</html>