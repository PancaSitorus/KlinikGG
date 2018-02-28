<?php
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

?>
