<?php 
   	session_start(); 
    include_once('functions.php'); 
    include('header.php');
    open_page('About'); 
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
					<li class="active"><a href="about.php">ABOUT US</a></li>
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
					<li class="dropdown"> <a data-toggle="dropdown" href="#">OUR DOCTORS</a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="doctors.php">Our doctors</a></li>
							<li><a href="doctors.php">Doctor</a></li>
						</ul>
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
										<li class="active"><a href="about.php">ABOUT US</a></li>
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
										<li ><a href="index.php">HOME</a></li>
										<li class="active"><a href="about.php">ABOUT US</a></li>
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
										<li ><a href="index.php">HOME</a></li>
										<li class="active"><a href="about.php">ABOUT US</a></li>
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
     END MAIN MENU
============================== --> 



<div class="page-title page-title-about bg-pattern" data-bgcolor="5295BD">
	<div class="page-title-overlay">
		<div class="container">
			<h1>Tentang Klinik Kami</h1>
			<p>Fresh Dental Clinic akan memberikan pelayanan terbaik tentang keluhan gigi yang anda alami. Anda bisa melakukan appoinment untuk membuat janji dengan dokter yang ada di klinik kami.</p>
		</div>
	</div>
</div>

<div class="breadcrumbs">
	<div class="container">
		<div class="row">
			<ol class="breadcrumb">
				<li class="breadcrumb-home"><a href="#"><i class="fa fa-home"></i></a></li>
				<li class="active">About Our Clinic</li>
			</ol>
		</div>
	</div>
</div>


<div class="history">
	<div class="container">
		<div class="row">
			<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 history-images">
				<div class="image-carousel">
					<div class="owl-image-carousel" id="owl-image-carousel">
						<div class="image-carousel-item"> <img src="images/klinik1.jpg" alt="" /> </div>
						<div class="image-carousel-item"> <img src="images/klinik2.jpg" alt="" /> </div>
						<div class="image-carousel-item"> <img src="images/klinik3.jpg" alt="" /> </div>
					</div>
					<div class="carousel-btn carousel-next" id="next-image-carousel"><i class="fa fa-angle-right"></i></div>
					<div class="carousel-btn carousel-prev" id="prev-image-carousel"><i class="fa fa-angle-left"></i></div>
				</div>
			</div>
			<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12 history-text">
				<h3>Tentang Klinik Kami</h3>
				<p style="text-align: justify;">Fresh Dental Clinic merupakan sebuah instansi kesehatan gigi dan mulut yang sedang berkembang dan mempunyai komitmen untuk senantiasa meningkatkan pelayanan yang akan kami berikan kepada pasien atau pelanggan kami.</p>
				<p style="text-align: justify;">Kami menyediakan pelayanan perawatan gigi berbasis tim yang komprehensif untuk anak-anak sampai lansia dan ditangani oleh dokter gigi spesialis dan dokter gigi umum yang berpengalaman. Klinik kami didukung dengan peralatan yang canggih serta fasilitas klinik yang nyaman. Kami berkomitmen untuk membantu Anda menjaga kesehatan mulut Anda sebagai bagian integral dari kesehatan Anda secara keseluruhan.</p>

				<p style="text-align: justify;">Komitmen klinik kami yaitu untuk menjaga kepercayaan pasien sebagai pelanggan kami dengan senantiasa meningkatkan pelayanan dan mulai melandasi seluruh aktivitas yang dilakukan. Dengan adanya kepercayaan pelanggan dan keinginan untuk memperluas pelayanan pada masyarakat secara berturut - turut. Selain untuk menjaga privasi pelanggan dengan menyediakan ruang - ruang perawatan yang terpisah dan nyaman, Fresh Dental Clinic juga memprioritaskan kesehatan, memberikan perlingungan, serta rasa nyaman dan aman bagi seluruh pasien yang datang berkunjung. <br> 
				Dengan semua kualitas pelayanan dan kepercayaan yang diberikan kepada pasien diharapkan pasien dapat merasa puas terhadap setiap pelayanan yang dokter berikan. </p>
			</div>
		</div>
	</div>
</div>

<div class="mission">
	<div class="container">
		<div class="row">
			<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12 mission-text">
				<h3>Visi dan Misi Fresh Dental Clinic</h3>
				<p>Fresh Dental Clinic merupakan klinik yang memberikan pelayanan terbaiknya untuk pasien yang berkonsultasi. Klinik ini didirikan mempunyai visi dan misi sendiri yaitu :</p>
				<ul class="text-list">
					<li>Memberikan pelayanan kesehatan terpasu berorientasi pada kebutuhan pasien dan keluarga.</li>
					<li>Mengedepankan kerjasama tim dengan berorientasi pada standard mutu pelayanan.</li>
					<li>Memberikan lingkungan kerja yang bersih dan higienis</li>
					<li>Membuka diri dan memberi kesempatan terhadap institusi lain utnuk memajukan pelayanan kesehatan gigi dan mulut Indonesia.</li>
				</ul>
			</div>
			</div>
	</div>
</div>
<?php 
    
     
    include('footer.php');
     
    
?> 

</body>
</html>