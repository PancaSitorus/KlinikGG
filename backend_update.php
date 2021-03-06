<?php
require_once '_db.php';

$json = file_get_contents('php://input');
$params = json_decode($json);

$stmt = $db->prepare("UPDATE appointment SET appointment_patient_name = :name, appointment_patient_phone = :phone, appointment_patient_email = :email, appointment_patient_keluhan = :keluhan, appointment_status = :status WHERE appointment_id = :id");
$stmt->bindParam(':id', $params->id);
$stmt->bindParam(':name', $params->name);
$stmt->bindParam(':phone', $_POST["phone"]);
$stmt->bindParam(':email', $_POST["email"]);
$stmt->bindParam(':keluhan', $_POST["keluhan"]);
$stmt->bindParam(':status', $params->status);
$stmt->execute();

class Result {}
$response = new Result();
$response->result = 'OK';
$response->message = 'Update successful';

header('Content-Type: application/json');
echo json_encode($response);

?>
