

<?php
	
	if($_SERVER["REQUEST_METHOD"] == "POST") {

	$id = $_POST['id'];
	$code = $_POST['code'];
	$sender_no = $_POST['sender_no'];
	$receiver_no = $_POST['receiver_no'];
	$amount = $_POST['amount'];
	$status_code = $_POST['status_code'];
	$time = $_POST['time'];

	
	$sql = "INSERT INTO pembayaran VALUES ('','$code','$sender_no','$receiver_no','$amount','$status_code','$time')";

	$result = mysqli_query($db,$sql);
	  }
	  ?>
	  