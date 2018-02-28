<?php 
    session_start(); 
    include_once('functions.php'); 
    include('header.php');
    open_page('Beranda'); 
    
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
										<li class="active"><a href="index.php">HOME</a></li>
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
										<li class="active"><a href="index.php">HOME</a></li>
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
										<li class="dropdown"> <a href="doctors.php">OUR DOCTOR</a>
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
										<li class="active"><a href="index.php">HOME</a></li>
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
     HEADER SLIDER
============================== -->
<div id="slider" class="slider">
	<div class="sp-slides"> 
		
		<!-- HEADER SLIDER ITEM -->
		<div class="sp-slide"> <img class="sp-image" src="css/images/blank.gif" alt=""
	        		data-src="images/Gambar1.jpg" />
			<div class="container">
				<h3 class="sp-layer slider-welcome" 
                        data-position="leftCenter" data-horizontal="15" data-vertical="-300" 
                        data-show-transition="left" data-hide-transition="left"
                        data-show-delay="300" data-hide-delay="0"> Welcome  </h3>
				<h1 class="sp-layer slider-title" 
                        data-position="leftCenter" data-horizontal="15" data-vertical="-230" 
                        data-show-transition="left" data-hide-transition="left"
                        data-show-delay="200" data-hide-delay="200"> FRESH Dental Clinic </h1>
				<h2 class="sp-layer slider-subtitle" 
                        data-position="leftCenter" data-horizontal="15" data-vertical="-120" 
                        data-show-transition="left" data-hide-transition="left"
                        data-show-delay="200" data-hide-delay="400"> For Your Better Smile </h2>
			</div>
		</div>
		
		<!-- HEADER SLIDER ITEM -->
		<div class="sp-slide"> <img class="sp-image" src="css/images/blank.gif" alt=""
	        		data-src="images/gambar2.jpg" />
	        		</div>
		
		<!-- HEADER SLIDER ITEM -->
		<div class="sp-slide"> <img class="sp-image" src="css/images/blank.gif" alt=""
	        		data-src="images/gambar3.jpg" />
			<div class="container">
				<h3 class="sp-layer slider-welcome" 
                        data-position="leftCenter" data-horizontal="20" data-vertical="-300" 
                        data-show-transition="left" data-hide-transition="left"
                        data-show-delay="200" data-hide-delay="0"> A beautiful smile is our task! </h3>
				<h1 class="sp-layer slider-title" 
                        data-position="leftCenter" data-horizontal="15" data-vertical="-230" 
                        data-show-transition="left" data-hide-transition="left"
                        data-show-delay="200" data-hide-delay="200"> Klinik GG </h1>
				<h2 class="sp-layer slider-subtitle" 
                        data-position="leftCenter" data-horizontal="15" data-vertical="-120" 
                        data-show-transition="left" data-hide-transition="left"
                        data-show-delay="200" data-hide-delay="200"> Healthy teeth and healthy body </h2>
				
			</div>
		</div>
	</div>
</div>
<!-- =========================
     END HEADER SLIDER
============================== --> 

<!-- =========================
     SERVICES
============================== -->
<div class="services" id="services">
		
			<!-- SERVICES ITEM -->
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 service bg-primary-2">
				<div class="service-icon"> <i class="flaticon-medical-1"></i> </div>
				<div class="service-title">
					<h3>Pemutih Gigi</h3>
				</div>
				<div class="service-text"> Pemutih gigi adalah tindakan umum dalam kedokteran gigi umum yang dilakukan oleh para dokter gigi yang bertujuan untuk mencerahkan warna gigi dan membuat gigi terlihat lebih putih. </div>
			</div>
			
			<!-- SERVICES ITEM -->
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 service bg-child-2">
				<div class="service-icon"> <i class="flaticon-medical-2"></i> </div>
				<div class="service-title">
					<h3>Implan Gigi</h3>
				</div>
				<div class="service-text"> Implan gigi (tanam gigi) adalah sekrup titanium yang ditanam pada rahang gigi yang berfungsi menggantikan bagian akar gigi. Penanaman dilakukan di tulang rahang atas atau bawah yang memungkinkan tersambungnya gigi pengganti dengan tulang. </div>
			</div>
			
			<!-- SERVICES ITEM -->
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 service bg-child-3">
				<div class="service-icon"> <i class="flaticon-tool"></i> </div>
				<div class="service-title">
					<h3>Ekstraksi Gigi</h3>
				</div>
				<div class="service-text"> Ekstraksi gigi merupakan proses pencabutan atau pengeluaran gigi dari tulang alveolus, dimana pada gigi tersebut sudah tidak dapat dilakukan perawatan lagi.  </div>
			</div>
			
			<!-- SERVICES ITEM -->
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 service bg-child-4">
				<div class="service-icon"> <i class="flaticon-medical"></i> </div>
				<div class="service-title">
					<h3>Penyakit Gusi</h3>
				</div>
				<div class="service-text"> Penyakit gusi, juga dikenal sebagai periodontitis, adalah satu  infeksi serius yang dapat mengakibatkan kehilangnya gigi. Penyakit periodontal dapat mempengaruhi satu gigi atau lebih. Penyebab utama penyakit periodontal adalah plak bakteri yang terus-menerus terbentuk pada gigi Anda.  </div>
			</div>
</div>
<!-- =========================
     END SERVICES
============================== -->
 
<!-- =========================
     ABOUT
============================== -->
<div class="about">
	<div class="container">
		<div class="row"> 
			
			<!-- ABOUT TEXT -->
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 about-text">
				<h2 class="section-title">
					<span class="bold700">ABOUT</span>
					FRESH DENTAL CLINIC</h2>
				<p>Fresh Dental Clinic merupakan sebuah klinik yang memberikan pelayanan gigi untuk masyarakat. Fresh Dental Clinic memiliki 3 dokter yang bertanggung jawab untuk menangani dan mengatasi keluhan yang dialami oleh pasien. </p>
				<ul class="text-list">
					<li>General Dentistry - preventative and restorative dental care.</li>
					<li>Specialized dental care to straighten crooked teeth in children and adults. </li>
					<li>Treat diseases of the gums and the placement of dental implants.</li>
				</ul>
				<p>We are committed to helping you maintain your oral health as an integral part of your overall health and wellness. <a href="#">Read more ></a></p>
			</div>
			
			<!-- ABOUT BACKGROUND -->
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 about-bg"> </div>
		</div>
	</div>
</div>
<!-- =========================
     END ABOUT
============================== --> 

<!-- BLOG BUTTONS -->
				<div class="carousel-btn carousel-next" id="next-blog"><i class="fa fa-angle-right"></i></div>
				<div class="carousel-btn carousel-prev" id="prev-blog"><i class="fa fa-angle-left"></i></div>
			</div>
		</div>
	</div>
</div>



<!-- =========================
    END BLOG
============================== --> 
<?php 
    
     
    include('footer.php');
     
    
?> 
</body>
</html>