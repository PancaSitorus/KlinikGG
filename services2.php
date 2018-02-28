<?php 
   	session_start(); 
    include_once('functions.php'); 
    include('header.php');
    open_page('Teeth cleaning'); 

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
										<li class="dropdown" class="active"> <a data-toggle="dropdown" href="#">SERVICES</a>
											<ul class="dropdown-menu with-bg" role="menu">
												<li><a href="services.php">Oral exams</a></li>
												<li><a href="services1.php">Teeth whitening</a></li>
												<li class="active"><a href="services2.php">Teeth cleaning</a></li>
												<li><a href="services3.php">X-rays</a></li>
												<li><a href="services4.php">Crowns</a></li>
												<li><a href="services5.php">Fillings and bridges</a></li>
												<li><a href="services6.php">Implants</a></li>
												<li><a href="services7.php">Extractions</a></li>
												<li><a href="services8.php">Root canals</a></li>
												<li><a href="services9.php">Surgical implant placements</a></li>
											</ul>
										</li>
										<li class="dropdown"> <a href="doctors.php">OUR DOCTOR</a>
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
										<li class="dropdown" active> <a data-toggle="dropdown" href="#">SERVICES</a>
											<ul class="dropdown-menu with-bg" role="menu">
												<li><a href="services.php">Oral exams</a></li>
												<li><a href="services1.php">Teeth whitening</a></li>
												<li class="active"><a href="services2.php">Teeth cleaning</a></li>
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
										<li><a href="contacts.php">CONTACT US</a></li>
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
										<li><a href="about.php">ABOUT US</a></li>
										<li class="dropdown" active> <a data-toggle="dropdown" href="#">SERVICES</a>
											<ul class="dropdown-menu with-bg" role="menu">
												<li><a href="services.php">Oral exams</a></li>
												<li><a href="services1.php">Teeth whitening</a></li>
												<li class="active"><a href="services2.php">Teeth cleaning</a></li>
												<li><a href="services3.php">X-rays</a></li>
												<li><a href="services4.php">Crowns</a></li>
												<li><a href="services5.php">Fillings and bridges</a></li>
												<li><a href="services6.php">Implants</a></li>
												<li><a href="services7.php">Extractions</a></li>
												<li><a href="services8.php">Root canals</a></li>
												<li><a href="services9.php">Surgical implant placements</a></li>
											</ul>
										</li>
										<li class="dropdown"> <a href="doctors.php">OUR DOCTOR</a>
										</li>
										<li><a href="contacts.php">CONTACT US</a></li>
										
										
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
<div class="page-title page-title-services bg-pattern" data-bgcolor="2791AA">
	<div class="page-title-overlay">
		<div class="container">
			<h1>SERVICES</h1>
			<p>Our Clinic has grown to provide a world class facility for the treatment of tooth loss, dental cosmetics and advanced restorative dentistry.</p>
		</div>
	</div>
</div>
<div class="breadcrumbs">
	<div class="container">
		<div class="row">
			<ol class="breadcrumb">
				<li class="breadcrumb-home"><a href="#"><i class="fa fa-home"></i></a></li>					
				<li><a href="#">Services</a></li>
				<li class="active">Teeth Cleaning</li>
			</ol>
		</div>
	</div>
</div>
<div class="doctor">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">	
				<div class="doctor-text">
					<h3>Apa itu Teeth Cleaning?</h3>
					<p style="text-align: justify;">Teeth Cleaning adalah prosedur pembersihan yang dilakukan untuk membersihkan gigi secara menyeluruh. Teeth Cleaning adalah perawatan gigi penting untuk menghentikan perkembangan penyakit periodontal dan radang gusi.</p>
					
					
					<h3>Apa Pembersihan Gigi Reguler?</h3>
					<p style="text-align: justify;">Pembersihan gigi secara teratur biasanya berjalan seiring dengan Oral exams yang komprehensif atau evaluasi rutin (recall). Setelah ujian selesai, kecuali dokter gigi Anda telah mendiagnosis penyakit gusi, dokter gigi atau ahli kebersihan akan melakukan pembersihan rutin, atau profilaksis. Bagi individu dengan penyakit gusi, dokter gigi Anda akan merekomendasikan pembersihan mendalam untuk mengatasi masalah ini dan membiarkan mulut Anda sembuh.
					<br>
					Selama bagian pertama pembersihan rutin Anda, profesional gigi Anda akan menggunakan scaler ultrasonik untuk menghilangkan puing, kalkulus, dan plak dari antara gigi Anda dan di sekitar garis gusi Anda. Jika Anda butuh istirahat atau mengalami kepekaan apapun, tolong beritahu profesional gigi Anda, sehingga mereka bisa menyesuaikan setting agar Anda lebih nyaman. Jika diperlukan, mereka mungkin menggunakan scaler tangan juga.
					<br>
					Bila bagian pembersihan ini selesai, asisten kebersihan atau gigi akan menindaklanjuti dengan poles menggunakan pasta khusus, dan akan memoles setiap gigi satu per satu. Setelah itu, mereka akan membersihkan gigi dengan menggunakan benang gigi, dan mungkin membuat rekomendasi atau saran tentang teknik flossing yang tepat.
					<br>
					Itu saja yang ada untuk itu! Satu pembersihan Anda selesai, salah satu anggota staf kami dapat menindaklanjuti dengan Anda tentang perawatan apa pun yang direkomendasikan dokter, dan membuat janji tindak lanjut yang diperlukan.</p>
					<h3>Brushing, scrubbing and flossing</h3>
					<h4><b>Brushing</b></h4>
					<p style="text-align: justify;"> Hati-hati dan sering menyikat gigi dengan sikat gigi membantu mencegah penumpukan bakteri plak pada gigi. [1] Sikat gigi elektrik dikembangkan, dan awalnya direkomendasikan untuk orang-orang dengan masalah kekuatan atau ketangkasan di tangan mereka, namun penggunaannya mulai umum. Efektivitas sikat gigi elektrik dalam mengurangi pembentukan plak dan gingivitis lebih unggul untuk mengurangi plak dan gingivitis dengan sikat gigi manual konvensional. [2]</p>
					<h4><b>Flossing</b></h4>
					<p style="text-align: justify;">Selain menyikat gigi, membersihkan gigi bisa membantu mencegah penumpukan bakteri plak pada gigi. Hal ini bisa dilakukan dengan benang gigi atau sikat interdental.
					80% rongga terjadi pada alur, atau lubang dan celah, pada permukaan kuku yang mengunyah, [3] namun, tidak ada bukti yang menunjukkan bahwa flossing di rumah normal mengurangi risiko rongga di daerah-daerah ini. [4]

					Peranti atau peralatan khusus dapat digunakan untuk melengkapi pembersihan sikat gigi dan pembersihan interdental. Ini termasuk tusuk gigi khusus, irrigator oral, dan perangkat lainnya.</p>
					<h4><b>Scrubbing</b></h4>
					<p style="text-align: justify;">Gigi bisa dibersihkan dengan menggosok dengan ranting bukan sikat gigi. Getah tanaman di ranting mengambil tempat pasta gigi. [Rujukan?] Di banyak bagian ranting pembersih gigi dunia digunakan. Di dunia Muslim miswak atau siwak terbuat dari ranting atau akar yang konon memiliki efek antiseptik saat digunakan untuk membersihkan gigi. [5]</p>
			</div>
		</div>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
				<div class="doctor-info">
					<div class="cleaning-info-image"> <img src="images/cleaning.jpg" alt="" /> </div>
				</div>
			</div>
		</div>
	</div>
</div>


	



<!--
<div class="services-1" id="services">
	<div class="container">
		<div class="row">
			<p class="services-1-text">All our dental care services are provided at a clinic near you, with convenient hours, state-of-the-art facilities and highly trained and licensed Dentists and Dental Assistants to provide the care you and your family deserve.</p>
			<h3 class="services-1-title">We provide the full range of dental services</h3>
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 service">
				<div class="service-icon"> <i class="flaticon-people"></i> </div>
				<div class="service-title">
					<h3>qualified doctors</h3>
				</div>
				<div class="service-text"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 service">
				<div class="service-icon"> <i class="flaticon-medal"></i> </div>
				<div class="service-title">
					<h3>certificates</h3>
				</div>
				<div class="service-text"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore. </div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 service">
				<div class="service-icon"> <i class="flaticon-dental-drill"></i> </div>
				<div class="service-title">
					<h3>dental care</h3>
				</div>
				<div class="service-text"> Lorem ipsum dolor sit amet, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 service">
				<div class="service-icon"> <i class="flaticon-dental-chair-1"></i> </div>
				<div class="service-title">
					<h3>qualified doctors</h3>
				</div>
				<div class="service-text"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </div>
			</div>
		</div>
	</div>
</div>
<div class="serv">
	<ul id="isotope-filter">
		<li><a class="active" data-filter="*">All services</a></li>
		<li><a data-filter=".dental">Dental services</a></li>
		<li><a data-filter=".diagnostic">Diagnostic services</a></li>
		<li><a data-filter=".rehabillitation">Rehabillitation services</a></li>
	</ul>
	<div class="container">
		<div class="row">
			<div class="serv-items" id="isotope-items">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 serv-item isotope-item dental">
					<div class="serv-item-image"> <img src="images/serv1.jpg" alt="" /> </div>
					<div class="serv-item-text">
						<h3>Tooth whitening</h3>
						<p>Tooth whitening (termed tooth bleaching when utilizing bleach), is either restoration of natural tooth shade or whitening beyond natural tooth shade, depending on the definition used.</p>
						<p>Restoration of the underlying, natural tooth shade is possible by simply removing surface (extrinsic) stains (e.g. from tea, coffee, red wine and tobacco) and calculus (tartar). This is achieved by having the teeth cleaned by a dental professional (commonly termed "scale and polish".</p>
						<div class="serv-item-button"> <a href="#" class="btn btn-primary-1 btn-sm">READ MORE</a>
							<div class="serv-item-tag">Dental service</div>
						</div>
					</div>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 serv-item isotope-item diagnostic">
					<div class="serv-item-image"> <img src="images/serv2.jpg" alt="" /> </div>
					<div class="serv-item-text">
						<h3>Tooth cleaning</h3>
						<p>Tooth whitening (termed tooth bleaching when utilizing bleach), is either restoration of natural tooth shade or whitening beyond natural tooth shade, depending on the definition used.</p>
						<p>Restoration of the underlying, natural tooth shade is possible by simply removing surface (extrinsic) stains (e.g. from tea, coffee, red wine and tobacco) and calculus (tartar). This is achieved by having the teeth cleaned by a dental professional (commonly termed "scale and polish".</p>
						<div class="serv-item-button"> <a href="#" class="btn btn-primary-1 btn-sm">READ MORE</a>
							<div class="serv-item-tag">Dental service</div>
						</div>
					</div>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 serv-item isotope-item rehabillitation">
					<div class="serv-item-image"> <img src="images/serv3.jpg" alt="" /> </div>
					<div class="serv-item-text">
						<h3>Oral exams</h3>
						<p>Tooth whitening (termed tooth bleaching when utilizing bleach), is either restoration of natural tooth shade or whitening beyond natural tooth shade, depending on the definition used.</p>
						<p>Restoration of the underlying, natural tooth shade is possible by simply removing surface (extrinsic) stains (e.g. from tea, coffee, red wine and tobacco) and calculus (tartar). This is achieved by having the teeth cleaned by a dental professional (commonly termed "scale and polish".</p>
						<div class="serv-item-button"> <a href="#" class="btn btn-primary-1 btn-sm">READ MORE</a>
							<div class="serv-item-tag">Dental service</div>
						</div>
					</div>
				</div>
			</div>
			<ul class="pagination">
				<li><a class="first" href="#"><i class="fa fa-angle-left"></i></a></li>
				<li><a class="active">1</a></li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li><a class="last" href="#"><i class="fa fa-angle-right"></i></a></li>
			</ul>
		</div>
	</div>
</div>
-->
<!-- =========================
    FOOTER
============================== -->
<div class="footer">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 footer-matchheight">
				<div class="row"> 
					
					<!-- FOOTER ITEM 2 -->
					<div class="col-lg-8 col-md-3 col-sm-3 col-xs-12 footer-item footer-item-2">
						<h3 class="footer-title footer-title-line"><i class="fa fa-clock-o"></i> Jadwal Buka Klinik</h3>
						<div class="opening-left"> 
							Monday<br>
							Tuesday<br>
							Wednesday<br>
							Thursday<br>
							Friday<br>
							Saturday<br>
							Sunday </div>
						<div class="opening-right"> 
							9:00 am - 7:15 pm<br>
							9:00 am - 7:15 pm<br>
							9:00 am - 7:15 pm<br>
							9:00 am - 7:15 pm<br>
							9:00 am - 7:15 pm<br>
							9:00 am - 7:15 pm<br>
							Closed </div>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 footer-copyright">
						<div> Copyright &copy; 2017 <a>FreshDentalClinic</a> </div>
					</div>
				</div>
			</div>
			
			<!-- FOOTER ITEM 3 -->
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 footer-item footer-item-3 footer-matchheight" id="footer-item-3">
				<h3 class="footer-title"><i class="fa fa-map-marker"></i> CONTACTS</h3>
				<div class="footer-item-3-phone"> <i class="fa fa-phone"></i> 0823-6463-9116 </div>
				<div class="footer-item-3-location"> <i class="flaticon-navigation-arrow"></i> Jln Sisingamangaraja Sitoluama Laguboti </div>
				<div class="footer-item-3-mail"> <i class="fa fa-envelope"></i> <a href="#">office@dental.com</a> </div>
				<div class="footer-item-3-socials"> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-google-plus"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-skype"></i></a> </div>
			</div>	


<!-- =========================
    END FOOTER
============================== --> 

<!-- =========================
    POPUP FORMS
============================== -->
<div class="bookform bookform-1" id="bookform1">
	<div class="bookform-left">
		<h2 class="section-title">
			<span class="bold700">BOOK APPOINTMENT</span>
		</h2>
		<form class="bookform-form" action="js/sendmail-book.php" role="form" method="post">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item f-doctor">
					<select id="form-doctor" class="form-doctor" name="form-doctor">
						<option value="Not selected" selected="selected">Select doctor</option>
						<option value="Arnie Alban">Arnie Alban</option>
						<option value="Wyatt Esmond">Wyatt Esmond</option>
						<option value="Dustin Callahan">Dustin Callahan</option>
						<option value="Kristin Weaver">Kristin Weaver</option>
					</select>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item name">
					<input type="text" name="name" id="name1" data-validation="required" placeholder="Your name" />
					<div class="help help-sm help-red">!</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item phone">
					<input type="text" name="phone" id="phone1" data-validation="required" placeholder="Phone" />
					<div class="help help-sm help-red">!</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item email">
					<input type="text" name="email" id="email1" placeholder="E-mail" />
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 booking-form-item date">
					<input type="text" class="datepicker-f" id="datepicker1" name="date" data-validation="required" placeholder="Date" />
					<div class="help help-sm help-red">!</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 booking-form-item time-f">
					<input type="text" class="timepicker-f" id="timepicker1" name="time" data-validation="required" placeholder="Time" />
					<div class="help help-sm help-red">!</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item">
					<textarea name="message" id="message1" placeholder="Your message.."></textarea>
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
					<button class="btn btn-primary">SUBMIT</button>
					<a class="fb-close" id="fb-close1" href="javascript:jQuery.fancybox.close();">Cancel</a> </div>
			</div>
			<div class="form-messages form-messages-modal"></div>
		</form>
	</div>
	<div class="bookform-right">
		<div class="bookform-right-info-1">
			<h5>Please select a doctor</h5>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </div>
		<div class="bookform-right-info-2"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </div>
	</div>
</div>

<div class="bookform" id="bookform2">
	<div class="bookform-left">
		<h2 class="section-title">
			<span class="bold700">BOOK APPOINTMENT</span>
		</h2>
		<form class="bookform-form" action="js/sendmail-book.php" role="form" method="post">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item name">
					<input type="text" name="name" id="name2" data-validation="required" placeholder="Your name" />
					<div class="help help-sm help-red">!</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item phone">
					<input type="text" name="phone" id="phone2" data-validation="required" placeholder="Phone" />
					<div class="help help-sm help-red">!</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item email">
					<input type="text" name="email" id="email2" placeholder="E-mail" />
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 booking-form-item date">
					<input type="text" class="datepicker-f" id="datepicker2" name="date" data-validation="required" placeholder="Date" />
					<div class="help help-sm help-red">!</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 booking-form-item time-f">
					<input type="text" class="timepicker-f" id="timepicker2" name="time" data-validation="required" placeholder="Time" />
					<div class="help help-sm help-red">!</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item">
					<textarea name="message" id="message2" placeholder="Your message.."></textarea>
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
					<button class="btn btn-primary">SUBMIT</button>
					<a class="fb-close" id="fb-close2" href="javascript:jQuery.fancybox.close();">Cancel</a> </div>
			</div>
			<div class="form-messages form-messages-modal"></div>
		</form>
	</div>
	<div class="bookform-right">
		<div class="doctor-info">
			<div class="doctor-info-image"> <img src="images/doctor1.jpg" alt="" /> </div>
			<div class="doctor-info-name"> Wyatt Esmond </div>
			<div class="doctor-info-position"> General Dentist </div>
			<div class="doctor-info-hours-title"> OPENING HOURS </div>
			<div class="doctor-info-hours">
				<div class="doctor-info-hours-clock"> <img src="images/clock.png" alt="" /> </div>
				<div class="doctor-info-hours-left"> Monday<br>
					Tuesday<br>
					Wednesday<br>
					Thursday<br>
					Friday<br>
					Saturday<br>
					Sunday </div>
				<div class="doctor-info-hours-right"> Closed<br>
					9:00 am - 7:15 pm<br>
					9:00 am - 7:15 pm<br>
					9:00 am - 7:15 pm<br>
					9:00 am - 7:15 pm<br>
					9:00 am - 7:15 pm<br>
					Closed </div>
			</div>
			<div class="doctor-info-desc"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </div>
		</div>
	</div>
</div>

<div class="bookform" id="bookform3">
	<div class="bookform-left">
		<h2 class="section-title">
			<span class="bold700">BOOK APPOINTMENT</span>
		</h2>
		<form class="bookform-form" action="js/sendmail-book.php" role="form" method="post">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item name">
					<input type="text" name="name" id="name3" data-validation="required" placeholder="Your name" />
					<div class="help help-sm help-red">!</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item phone">
					<input type="text" name="phone" id="phone3" data-validation="required" placeholder="Phone" />
					<div class="help help-sm help-red">!</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item email">
					<input type="text" name="email" id="email3" placeholder="E-mail" />
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 booking-form-item date">
					<input type="text" class="datepicker-f" id="datepicker3" name="date" data-validation="required" placeholder="Date" />
					<div class="help help-sm help-red">!</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 booking-form-item time-f">
					<input type="text" class="timepicker-f" id="timepicker3" name="time" data-validation="required" placeholder="Time" />
					<div class="help help-sm help-red">!</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item">
					<textarea name="message" id="message3" placeholder="Your message.."></textarea>
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
					<button class="btn btn-primary">SUBMIT</button>
					<a class="fb-close" id="fb-close3" href="javascript:jQuery.fancybox.close();">Cancel</a> </div>
			</div>
			<div class="form-messages form-messages-modal"></div>
		</form>
	</div>
	<div class="bookform-right">
		<div class="doctor-info">
			<div class="doctor-info-image"> <img src="images/doctor2.jpg" alt="" /> </div>
			<div class="doctor-info-name"> Arnie Alban </div>
			<div class="doctor-info-position"> Pedodontics </div>
			<div class="doctor-info-hours-title"> OPENING HOURS </div>
			<div class="doctor-info-hours">
				<div class="doctor-info-hours-clock"> <img src="images/clock.png" alt="" /> </div>
				<div class="doctor-info-hours-left"> Monday<br>
					Tuesday<br>
					Wednesday<br>
					Thursday<br>
					Friday<br>
					Saturday<br>
					Sunday </div>
				<div class="doctor-info-hours-right"> Closed<br>
					9:00 am - 7:15 pm<br>
					9:00 am - 7:15 pm<br>
					9:00 am - 7:15 pm<br>
					9:00 am - 7:15 pm<br>
					9:00 am - 7:15 pm<br>
					Closed </div>
			</div>
			<div class="doctor-info-desc"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </div>
		</div>
	</div>
</div>

<div class="bookform" id="bookform4">
	<div class="bookform-left">
		<h2 class="section-title">
			<span class="bold700">BOOK APPOINTMENT</span>
		</h2>
		<form class="bookform-form" action="js/sendmail-book.php" role="form" method="post">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item name">
					<input type="text" name="name" id="name4" data-validation="required" placeholder="Your name" />
					<div class="help help-sm help-red">!</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item phone">
					<input type="text" name="phone" id="phone4" data-validation="required" placeholder="Phone" />
					<div class="help help-sm help-red">!</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item email">
					<input type="text" name="email" id="email4" placeholder="E-mail" />
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 booking-form-item date">
					<input type="text" class="datepicker-f" id="datepicker4" name="date" data-validation="required" placeholder="Date" />
					<div class="help help-sm help-red">!</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 booking-form-item time-f">
					<input type="text" class="timepicker-f" id="timepicker4" name="time" data-validation="required" placeholder="Time" />
					<div class="help help-sm help-red">!</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item">
					<textarea name="message" id="message4" placeholder="Your message.."></textarea>
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
					<button class="btn btn-primary">SUBMIT</button>
					<a class="fb-close" id="fb-close4" href="javascript:jQuery.fancybox.close();">Cancel</a> </div>
			</div>
			<div class="form-messages form-messages-modal"></div>
		</form>
	</div>
	<div class="bookform-right">
		<div class="doctor-info">
			<div class="doctor-info-image"> <img src="images/doctor3.jpg" alt="" /> </div>
			<div class="doctor-info-name"> Dustin Callahan </div>
			<div class="doctor-info-position"> Ortodontist </div>
			<div class="doctor-info-hours-title"> OPENING HOURS </div>
			<div class="doctor-info-hours">
				<div class="doctor-info-hours-clock"> <img src="images/clock.png" alt="" /> </div>
				<div class="doctor-info-hours-left"> Monday<br>
					Tuesday<br>
					Wednesday<br>
					Thursday<br>
					Friday<br>
					Saturday<br>
					Sunday </div>
				<div class="doctor-info-hours-right"> Closed<br>
					9:00 am - 7:15 pm<br>
					9:00 am - 7:15 pm<br>
					9:00 am - 7:15 pm<br>
					9:00 am - 7:15 pm<br>
					9:00 am - 7:15 pm<br>
					Closed </div>
			</div>
			<div class="doctor-info-desc"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </div>
		</div>
	</div>
</div>

<div class="bookform" id="bookform5">
	<div class="bookform-left">
		<h2 class="section-title">
			<span class="bold700">BOOK APPOINTMENT</span>
		</h2>
		<form class="bookform-form" action="js/sendmail-book.php" role="form" method="post">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item name">
					<input type="text" name="name" id="name5" data-validation="required" placeholder="Your name" />
					<div class="help help-sm help-red">!</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item phone">
					<input type="text" name="phone" id="phone5" data-validation="required" placeholder="Phone" />
					<div class="help help-sm help-red">!</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item email">
					<input type="text" name="email" id="email5" placeholder="E-mail" />
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 booking-form-item date">
					<input type="text" class="datepicker-f" id="datepicker5" name="date" data-validation="required" placeholder="Date" />
					<div class="help help-sm help-red">!</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 booking-form-item time-f">
					<input type="text" class="timepicker-f" id="timepicker5" name="time" data-validation="required" placeholder="Time" />
					<div class="help help-sm help-red">!</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item">
					<textarea name="message" id="message5" placeholder="Your message.."></textarea>
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
					<button class="btn btn-primary">SUBMIT</button>
					<a class="fb-close" id="fb-close5" href="javascript:jQuery.fancybox.close();">Cancel</a> </div>
			</div>
			<div class="form-messages form-messages-modal"></div>
		</form>
	</div>
	<div class="bookform-right">
		<div class="doctor-info">
			<div class="doctor-info-image"> <img src="images/doctor4.jpg" alt="" /> </div>
			<div class="doctor-info-name"> Kristin Weaver </div>
			<div class="doctor-info-position"> Hygienist </div>
			<div class="doctor-info-hours-title"> OPENING HOURS </div>
			<div class="doctor-info-hours">
				<div class="doctor-info-hours-clock"> <img src="images/clock.png" alt="" /> </div>
				<div class="doctor-info-hours-left"> Monday<br>
					Tuesday<br>
					Wednesday<br>
					Thursday<br>
					Friday<br>
					Saturday<br>
					Sunday </div>
				<div class="doctor-info-hours-right"> Closed<br>
					9:00 am - 7:15 pm<br>
					9:00 am - 7:15 pm<br>
					9:00 am - 7:15 pm<br>
					9:00 am - 7:15 pm<br>
					9:00 am - 7:15 pm<br>
					Closed </div>
			</div>
			<div class="doctor-info-desc"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </div>
		</div>
	</div>
</div>

<div class="bookform" id="bookform6">
	<div class="bookform-left">
		<h2 class="section-title">
			<span class="bold700">BOOK APPOINTMENT</span>
		</h2>
		<form class="bookform-form" action="js/sendmail-book.php" role="form" method="post">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item name">
					<input type="text" name="name" id="name6" data-validation="required" placeholder="Your name" />
					<div class="help help-sm help-red">!</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item phone">
					<input type="text" name="phone" id="phone6" data-validation="required" placeholder="Phone" />
					<div class="help help-sm help-red">!</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item email">
					<input type="text" name="email" id="email6" placeholder="E-mail" />
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 booking-form-item date">
					<input type="text" class="datepicker-f" id="datepicker6" name="date" data-validation="required" placeholder="Date" />
					<div class="help help-sm help-red">!</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 booking-form-item time-f">
					<input type="text" class="timepicker-f" id="timepicker6" name="time" data-validation="required" placeholder="Time" />
					<div class="help help-sm help-red">!</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item">
					<textarea name="message" id="message6" placeholder="Your message.."></textarea>
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
					<button class="btn btn-primary">SUBMIT</button>
					<a class="fb-close" id="fb-close6" href="javascript:jQuery.fancybox.close();">Cancel</a> </div>
			</div>
			<div class="form-messages form-messages-modal"></div>
		</form>
	</div>
	<div class="bookform-right">
		<div class="doctor-info">
			<div class="doctor-info-image"> <img src="images/doctor5.jpg" alt="" /> </div>
			<div class="doctor-info-name"> Leslie Adams </div>
			<div class="doctor-info-position"> Prosthodontics </div>
			<div class="doctor-info-hours-title"> OPENING HOURS </div>
			<div class="doctor-info-hours">
				<div class="doctor-info-hours-clock"> <img src="images/clock.png" alt="" /> </div>
				<div class="doctor-info-hours-left"> Monday<br>
					Tuesday<br>
					Wednesday<br>
					Thursday<br>
					Friday<br>
					Saturday<br>
					Sunday </div>
				<div class="doctor-info-hours-right"> Closed<br>
					9:00 am - 7:15 pm<br>
					9:00 am - 7:15 pm<br>
					9:00 am - 7:15 pm<br>
					9:00 am - 7:15 pm<br>
					9:00 am - 7:15 pm<br>
					Closed </div>
			</div>
			<div class="doctor-info-desc"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </div>
		</div>
	</div>
</div>

<!-- =========================
    END POPUP FORMS
============================== -->

<!-- =========================
    COLOR SWITHER
============================== -->

<div class="color-sw" id="color-sw">
	<div class="color-sw-header"> Style switcher
		<span class="color-sw-close" id="color-sw-close"><i class="fa fa-close"></i></span>
	</div>
	<div class="color-sw-body">
		<p>Choose color style</p>
		<div class="color-sw-item active" id="blue">
			<div></div>
		</div>
		<div class="color-sw-item" id="violet">
			<div></div>
		</div>
		<div class="color-sw-item" id="red">
			<div></div>
		</div>
		<div class="color-sw-item" id="green">
			<div></div>
		</div>
	</div>
</div>
<!-- =========================
    END COLOR SWITHER
============================== -->
<div class="totop" id="totop"> <i class="fa fa-angle-up"></i> </div>

<link rel="stylesheet" type="text/css" href="css/responsive.css" />

<!-- =========================
     SCRIPTS   
============================== --> 
<!-- JQUERY --> 
<script src="js/jquery-2.2.0.min.js"></script> 

<!-- BOOTSTRAP --> 
<script src="js/bootstrap.min.js"></script> 

<!-- SLIDER PRO --> 
<script src="js/jquery.sliderPro.min.js"></script> 

<!-- LIGHTBOX --> 
<script src="js/jquery.fancybox.pack.js"></script> 

<!-- CAROUSEL --> 
<script src="js/owl.carousel.js"></script> 

<!-- STAR RATING --> 
<script src="js/jquery.barrating.min.js"></script> 

<!-- ISOTOPE FILTER --> 
<script src="js/isotope.pkgd.min.js"></script> 

<!-- SCROLLSPY --> 
<script src="js/scrollspy.js"></script> 

<!-- DATEPICKER --> 
<script src="js/moment.js"></script> 
<script src="js/bootstrap-datetimepicker.min.js"></script> 

<!-- JQUERY FORM --> 
<script src='js/jquery.form.js'></script> 

<!-- FORM VALIDATOR --> 
<script src='js/jquery.form-validator.js'></script> 

<!-- SELECT STYLING --> 
<script src='js/jquery.selectBox.js'></script> 

<!-- MATCHHEIGHT --> 
<script src='js/jquery.matchHeight.js'></script> 

<!-- IMAGES LOADED -->
<script src='js/imagesloaded.pkgd.min.js'></script>

<!-- IMAGES LOADED -->
<script src='js/imagesloaded.pkgd.min.js'></script>

<!-- CUSTOM SCRIPT --> 
<script src="js/theme.js"></script> 

<!-- GOOGLE MAPS --> 
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyC1N87a_NHjocaepKKcovPAYTMUkJBr9pQ&amp;language=en&amp;sensor=true"></script> 

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries --> 
<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]--> 

</body>
</html>