<!-- SITE TITLE -->
<title>Klinik GG</title>

<link rel="shortcut icon" href="images/logonew.png">
<link rel="apple-touch-icon" href="images/logonew.png">
<link rel="apple-touch-icon" sizes="72x72" href="images/logonew.png">
<link rel="apple-touch-icon" sizes="114x114" href="images/logonew.png">

<!-- =========================
     STYLESHEETS   
============================== -->

<link rel="stylesheet" type="text/css" href="css/master.css" />
</head>

<body data-spy="scroll" data-target=".navbar">
<div class="preloader" id="preloader"> <img src="images/preloader.gif" alt="" /> </div>
<!-- =========================
     TOP BAR
============================== -->		
<!-- =========================
     HEADER
============================== -->
<div class="header" id="header">
	<div class="container">
		<div class="row"> 
			
			<!-- HEADER LOGO -->
			<div class="col-lg-5 col-md-5 col-sm-7 col-xs-12">
				<div class="header-logo"> <a href="#"><img src="images/GG.png" alt="" />
					<span class="bold600 color-child-6">FRESH</span>
					<span class="color-child-5">DENTAL CLINIC</span>

					</a> </div>
			</div>
			<?php
			$nama = get_session('username'); 
			if(isset($_SESSION['is_logged_in'])){
			echo'<div class="col-lg-6 col-md-6 col-sm-7 col-xs-12">
				<div class="header-phone"> <a href="logout.php"> Logout </a></div>
				<div class="header-phone"  class="user"> Hi, '.$nama;
			echo'</div></div>
		</div>
	</div>
</div>';}	
			else{
				echo('<div class="col-lg-6 col-md-6 col-sm-7 col-xs-12">
				<div class="header-phone"> <a href="login.php"> Login </a></div>
			</div>
		</div>
	</div>
</div>');
			}

			
			
			?>
			<!-- HEADER BUTTONS -->
			<!-- <div class="col-lg-6 col-md-6 col-sm-7 col-xs-12">
				<div class="header-phone"> <a href="login.php"> Login </a></div>
			</div>
		</div>
	</div>
</div> -->


<!-- =========================
     END HEADER
============================== --> 