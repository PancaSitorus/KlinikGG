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
                                        <li><a href="pembayaran_byperawat.php">PAYMENT</a></li>
                                        <li class="active"><a href="manager.php">SCHEDULE</a></li>
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
                                        <li><a href="pembayaran_byperawat.php">PAYMENT</a></li>
                                        <li class="active"><a href="manager.php">CONTROL SHEDULE</a></li>
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
                                        <li><a href="pembayaran_byperawat.php">PAYMENT</a></li>
                                        <li class="active"><a href="manager.php">SCHEDULE</a></li>
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
        <script src="js/daypilot/daypilot-all.min.js"></script>
    </head>
    <body>

        <div class="page-title page-title-about bg-pattern" data-bgcolor="5295BD">
            <div class="page-title-overlay">
                <div class="container">
                    <h1>Jadwal Dokter di Klinik GG</h1>
                </div>
            </div>
        </div>
        <br><br><br>
        <div clas="main">
            <div>
                <div style="float:left; width:160px">
                    <div id="nav"></div>
                </div>
                <div style="margin-left: 160px">
                    <div class="space">
                    Slots: <button id="clear">Clear</button> Deletes all free slots this month
                    </div>
                    <div class="space options">
                        Scale:
                        <label for='scale-hours'><input type="radio" value="hours" name="scale" id='scale-hours' checked> Hours</label>
                        <label for='scale-shifts'><input type="radio" value="shifts" name="scale" id='scale-shifts'> Shifts</label>
                        <label for="business-only"><input type="checkbox" id="business-only"> Hide non-business hours</label>
                    </div>
                    <div id="scheduler"></div>
                </div>

            </div>
        </div>

        <script src="js/jquery-1.9.1.min.js"></script>
        <script src="js/daypilot/daypilot-all.min.js"></script>

        <script>
            var nav = new DayPilot.Navigator("nav");
            nav.selectMode = "month";
            nav.showMonths = 3;
            nav.skipMonths = 3;
            nav.onTimeRangeSelected = function(args) {
                 //loadEvents(args.start.firstDayOfWeek(), args.start.addDays(7));
                if (scheduler.visibleStart().getDatePart() <= args.day && args.day < scheduler.visibleEnd()) {
                    scheduler.scrollTo(args.day, "fast");  // just scroll
                }
                else {
                    loadEvents(args.day);  // reload and scroll
                }
            };
            nav.init();

            var scheduler = new DayPilot.Scheduler("scheduler");
            scheduler.visible = false; // will be displayed after loading the resources
            scheduler.scale = "Manual";
            scheduler.timeline = getTimeline();
            scheduler.timeHeaders = getTimeHeaders();
            scheduler.useEventBoxes = "Never";
            scheduler.eventDeleteHandling = "Update";
            scheduler.eventClickHandling = "Disabled";
            scheduler.eventMoveHandling = "Disabled";
            scheduler.eventResizeHandling = "Disabled";
            scheduler.allowEventOverlap = false,
            scheduler.onBeforeTimeHeaderRender = function(args) {
                args.header.html = args.header.html.replace(" AM", "a").replace(" PM", "p");  // shorten the hour header
            };
            scheduler.onBeforeEventRender = function(args) {
                switch (args.data.tags.status) {
                    case "free":
                        args.data.barColor = "green";
                        args.data.deleteDisabled = $('input[name=scale]:checked').val() === "shifts";  // only allow deleting in the more detailed hour scale mode
                        break;
                    case "waiting":
                        args.data.barColor = "orange";
                        args.data.deleteDisabled = true;
                        break;
                    case "confirmed":
                        args.data.barColor = "#f41616";  // red
                        args.data.deleteDisabled = true;
                        break;
                }
            };
            scheduler.onEventDeleted = function(args) {
                var params = {
                    id: args.e.id(),
                };
                $.post("backend_delete.php", JSON.stringify(params), function(data) {
                    scheduler.message("Deleted.");
                });
            };

            scheduler.onTimeRangeSelected = function(args) {
                var dp = scheduler;
                var scale = $("input[name=scale]:checked").val();

                var params = {
                    start: args.start.toString(),
                    end: args.end.toString(),
                    resource: args.resource,
                    scale: scale
                };

                $.post("backend_create.php", JSON.stringify(params), function(data) {
                    loadEvents();
                    dp.message(data.message);
                });

                dp.clearSelection();

            };
            scheduler.init();


            loadResources();
            loadEvents(DayPilot.Date.today());

            function loadEvents(day) {
                var from = scheduler.visibleStart();
                var to = scheduler.visibleEnd();
                if (day) {
                    from = new DayPilot.Date(day).firstDayOfMonth();
                    to = from.addMonths(1);
                }

                var params = {
                    start: from.toString(),
                    end: to.toString()
                };

                $.post("backend_events.php", JSON.stringify(params), function(data) {
                    scheduler.timeline = getTimeline(day);
                    scheduler.events.list = data;
                    scheduler.update();
                    scheduler.scrollTo(day, "fast", "left");

                    nav.events.list = data;
                    nav.update();
                });
            }

            function loadResources() {
                $.post("backend_resources.php", function(data) {
                    scheduler.resources = data;
                    scheduler.visible = true;
                    scheduler.update();
                });
            }

            function getTimeline(date) {
                var date = date || DayPilot.Date.today();
                var start = new DayPilot.Date(date).firstDayOfMonth();
                var days = start.daysInMonth();
                var scale = $("input[name=scale]:checked").val();
                var businessOnly = $("#business-only").prop("checked");

                var morningShiftStarts = 9;
                var morningShiftEnds = 13;
                var afternoonShiftStarts = 14;
                var afternoonShiftEnds = 18;

                if (!businessOnly) {
                    var morningShiftStarts = 0;
                    var morningShiftEnds = 12;
                    var afternoonShiftStarts = 12;
                    var afternoonShiftEnds = 24;
                }

                var timeline = [];

                var increaseMorning;  // in hours
                var increaseAfternoon;  // in hours
                switch (scale) {
                    case "hours":
                        increaseMorning = 1;
                        increaseAfternoon = 1;
                        break;
                    case "shifts":
                        increaseMorning = morningShiftEnds - morningShiftStarts;
                        increaseAfternoon = afternoonShiftEnds - afternoonShiftStarts;
                        break;
                    default:
                        throw "Invalid scale value";
                }

                for (var i = 0; i < days; i++) {
                    var day = start.addDays(i);

                    for (var x = morningShiftStarts; x < morningShiftEnds; x += increaseMorning)
                    {
                        timeline.push({start: day.addHours(x), end: day.addHours(x + increaseMorning) });
                    }
                    for (var x = afternoonShiftStarts; x < afternoonShiftEnds; x += increaseAfternoon)
                    {
                        timeline.push({start: day.addHours(x), end: day.addHours(x + increaseAfternoon) });
                    }
                }

                return timeline;
            }

            function getTimeHeaders() {
                var scale = $('input[name=scale]:checked').val();
                switch (scale) {
                    case "hours":
                        return [ { groupBy: "Month" }, { groupBy: "Day", format: "dddd d" }, { groupBy: "Hour", format: "h tt"}];
                        break;
                    case "shifts":
                        return [ { groupBy: "Month" }, { groupBy: "Day", format: "dddd d" }, { groupBy: "Cell", format: "tt"}];
                        break;
                }
            }

            $(document).ready(function() {
                $("#business-only").click(function() {
                    scheduler.timeline = getTimeline();
                    scheduler.update();
                });
                $("input[name=scale]").click(function() {
                    scheduler.timeline = getTimeline();
                    scheduler.timeHeaders = getTimeHeaders();
                    scheduler.update();
                });
                $("#clear").click(function() {
                    var dp = scheduler;
                    var params = {
                        start: dp.visibleStart(),
                        end: dp.visibleEnd()
                    };
                    $.post("backend_clear.php", JSON.stringify(params), function(data) {
                        dp.message(data.message);
                        loadEvents();
                    });
                });
            });

        </script>
      <br>
    <a href="jadwal_dokter.php"><b>Cek Jadwal</b></a>
        </body>
    <br><br><br><br><br>
</head>
</html>
<?php 
    
     
    include('footer.php');
     
    
?> 
</body>
</html>