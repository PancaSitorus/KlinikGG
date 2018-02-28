<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Request an Appointment</title>
        <script src="js/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="js/daypilot/daypilot-all.min.js" type="text/javascript"></script>
 
        <link rel="stylesheet" type="text/css" href="css/master.css" /> 
        <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Creative Responsive Bootstrap Multi-Purpose HTML Template">
<meta name="keywords" content="H2O, Creative, Agency, Portfolio, Freelancer, Shop, Store,Bootstrap, HTML, Template, One page">
<meta name="author" content="Vadzim Liashkevich">
<style>
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

    </head>
    <body>
        <?php
            // check the input
            is_numeric($_GET['id']) or die("invalid URL");

            require_once '_db.php';

            $stmt = $db->prepare('SELECT * FROM appointment WHERE appointment_id = :id');
            $stmt->bindParam(':id', $_GET['id']);
            $stmt->execute();
            $event = $stmt->fetch();

        ?>
        <div class="main_container" style="text-align: justify;">
        <form id="f" style="padding:20px;">
            <input type="hidden" name="id" id="id" value="<?php print $_GET['id'] ?>" />
            <h1>Request an Appointment</h1>

            <div>Start:</div>
            <div><input type="text" id="start" name="start" value="<?php print (new DateTime($event['appointment_start']))->format('d/M/y g:i A') ?>" disabled /></div>

            <div>End:</div>
            <div><input type="text" id="end" name="end" value="<?php print (new DateTime($event['appointment_end']))->format('d/M/y g:i A') ?>" disabled /></div>

            <div>Nama: </div>
            <div><input type="text" id="name" name="name" value="" placeholder="Nama Lengkap" /></div>

            <div>Nomor Telepon: </div>
            <div><input type="text" id="name" name="phone" value="" /></div>

            <div>Email: </div>
            <div><input type="email" id="name" name="email" value="" /></div>

            <div>Keluhan: </div>
            <div><input type="text" id="name" name="keluhan" value="" /></div>

            <div class="space"><input type="submit"  id="s" value="Save" /> <a href="#" id="cancel">Cancel</a></div>
        </form>
        <?php 
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            require_once '_db.php';

            class Result {}

            $session = session_id();



            $stmt = $db->prepare("UPDATE appointment SET appointment_patient_name = :name, appointment_patient_phone = :phone, appointment_patient_email = :email, appointment_patient_keluhan = :keluhan, appointment_patient_session = :session, appointment_status = 'waiting' WHERE appointment_id = :id");
            $stmt->bindParam(':id', $_POST["id"]);
            $stmt->bindParam(':name', $_POST["name"]);
            $stmt->bindParam(':phone', $_POST["phone"]);
            $stmt->bindParam(':email', $_POST["email"]);
            $stmt->bindParam(':keluhan', $_POST["keluhan"]);
            $stmt->bindParam(':session', $session);
            $stmt->execute();
            $response = new Result();
            $response->result = 'OK';
            $response->message = 'Update successful';

            header('Content-Type: application/json');

            echo json_encode($response);
        }
        ?>


        </div>

        <script type="text/javascript">

        $("#f").submit(function () {
            var f = $("#f");
            $.post(f.attr("action"), f.serialize(), function (result) {
                DayPilot.Modal.close(result);
            });
            return false;
        });

        $("#cancel").click(function() {
            DayPilot.Modal.close();
            return false;
        });


        $("#s").click(function(){
             window.location.href='form_pembayaran.php';
        });
        $(document).ready(function () {
            $("#name").focus();
        });

        </script>
    </body>
</html>
