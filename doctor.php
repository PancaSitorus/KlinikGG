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
                                        <li class="dropdown"> <a href="doctors.php">OUR DOCTOR</a>
                                        </li>
                                        <li><a href="contacts.php">CONTACT US</a></li>
                                        <li class="active"><a href="doctor.php">SCHEDULE</a></li>
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
                                        <li><a href="contacts.php">GENERAL</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>');
            }            
    ?>


<?php 
    //session_start(); 
    include_once('functions.php'); 
    require_once '_db.php';
     //include('header.php');
    open_page('Doctors Schedule'); 
?> 


    <head>
       
    <meta charset="UTF-8" />
        <!-- DayPilot library -->
        <script src="js/daypilot/daypilot-all.min.js"></script>
    </head>
    

        <div class="page-title page-title-about bg-pattern" data-bgcolor="5295BD">
            <div class="page-title-overlay">
                <div class="container">
                    <h1>Jadwal Dokter di Klinik GG</h1>
                </div>
            </div>
        </div>
        <br>
       <body> 

        <div class="main">
           

            <div>

                <div style="float:left; width:160px">
                    <div id="nav"></div>
                </div>
                <div style="margin-left: 160px">
                    <div class="space">
                        <select id="doctor" name="doctor">
                        <?php
                        if (get_session('username')=='nurul'){
                            foreach($db->query('SELECT * FROM doctor WHERE doctor_name = "dr.Nurul" ORDER BY doctor_name') as $item) {
                                echo "<option value='".$item["doctor_id"]."'>".$item["doctor_name"]."</option>";
                            }
                        }
                        else {
                            foreach($db->query('SELECT * FROM doctor WHERE doctor_name = "dr.Arif" ORDER BY doctor_name') as $item) {
                                echo "<option value='".$item["doctor_id"]."'>".$item["doctor_name"]."</option>";
                                }
                         }   

                        ?>
                        </select>
                    </div>
                    <div id="calendar"></div>
                </div>

            </div>
        </div>

        <script src="js/jquery-1.9.1.min.js"></script>
        <script src="js/daypilot/daypilot-all.min.js"></script>

        <script>
            var nav = new DayPilot.Navigator("nav");
            nav.selectMode = "week";
            nav.showMonths = 3;
            nav.skipMonths = 3;
            nav.onTimeRangeSelected = function(args) {
                 loadEvents(args.start.firstDayOfWeek(), args.start.addDays(7));
            };
            nav.init();

            var calendar = new DayPilot.Calendar("calendar");
            calendar.viewType = "Week";
            calendar.timeRangeSelectedHandling = "Disabled";

            calendar.onEventMoved = function(args) {
                $.post("backend_move.php", JSON.stringify(args), function(data) {
                    calendar.message(data.message);
                });
            };
            calendar.onEventResized = function(args) {
                $.post("backend_move.php", JSON.stringify(args), function(data) {
                    calendar.message(data.message);
                });
            };
            calendar.onBeforeEventRender = function(args) {
                if (!args.data.tags) {
                    return;
                }
                switch (args.data.tags.status) {
                    case "free":
                        args.data.barColor = "green";
                        break;
                    case "waiting":
                        args.data.barColor = "orange";
                        break;
                    case "confirmed":
                        args.data.barColor = "#f41616";  // red
                        break;
                }
            };

            calendar.onEventClick = function(args) {
                var modal = new DayPilot.Modal({
                    onClosed: function(args) {
                        if (args.result) {  // args.result is empty when modal is closed without submitting
                            loadEvents();
                        }
                    }
                });

                modal.showUrl("appointment_edit.php?id=" + args.e.id());
            };
            calendar.init();

            loadEvents();

            function loadEvents(day) {
//                var start = nav.visibleStart() > new DayPilot.Date() ? nav.visibleStart() : new DayPilot.Date();
                var start = nav.visibleStart();

                var params = {
                    doctor: $("#doctor").val(),
                    start: start.toString(),
                    end: nav.visibleEnd().toString()
                };

                $.post("backend_events_doctor.php", JSON.stringify(params), function(data) {
                    if (day) {
                        calendar.startDate = day;
                    }
                    calendar.events.list = data;
                    calendar.update();

                    nav.events.list = data;
                    nav.update();
                });
            }

            $(document).ready(function() {
                $("#doctor").change(function() {
                    loadEvents();
                });
            });
        </script>
   
       <br>
        <a href="jadwal_dokter.php"><b>Cek Jadwal</b></a>

   
    <br>



<?php 
    
     
    include('footer.php');
     
    
?> 
</body>
</html>