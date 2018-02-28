<link rel="stylesheet" type="text/css" href="css/master.css" /> 

<body>
 <form action="index.php" method="post" class="center">
  <div class="container">
    <div class="doctor-text-booking">
      <h2 class="section-title">
        <span class="bold700">STATUS PEMBAYARAN</span>
      </h2>
      <form class="bookform-form" action="js/sendmail-book.php" role="form" method="post">
      <div class="row">
      	<div class="text-center">

<?php
 	include_once('functions.php'); 
	$data = $_GET['data'];
	$json_decode = json_decode($data, true);
	$code = $json_decode['code'];
	$sender_no = $json_decode ['sender_no'];
	$receiver_no = $json_decode['receiver_no'];
	$amount = $json_decode ['amount'];
	$status_code = $json_decode['status_code'];
	$time = $json_decode['time'];

	
	echo 'Code  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp <input type="text" value="'.$json_decode['code'].' "name="code" placeholder="Code" required>'.'<br>';
	echo 'User Acc No <input type="text" value="'.$json_decode['sender_no'].'" name="user_acc_no" placeholder="User Acc No" required>'.'<br>'.'</td>';
	echo 'Merchant &nbsp&nbsp&nbsp  <input type="text" value="'.$json_decode['receiver_no'].'" name="merchant" placeholder="Merchant" required>'.'<br>';
	echo 'Amount &nbsp&nbsp&nbsp &nbsp &nbsp <input type="text" value="'.$json_decode['amount'].'" name="account" placeholder="Account" required>'.'<br>';
	echo 'Status code &nbsp <input type="text" value="'.$json_decode['status_code'].'" name="status_code" placeholder="Status Code" required>'.'<br>';
	echo 'Date & time &nbsp <input type="text" value="'.$json_decode['time'].'" name="time" placeholder="Date & Time" required>'.'<br>';
	echo '<br>';
	echo '<br>';
	echo '<br>';
	echo '<br>';

	if($json_decode['status_code']==000){
		echo  ('<span class="bold700">Transfer initialized</span>');
	}
	elseif ($json_decode['status_code']==001) {
		echo  ('<span class="bold700">Transfer is ready</span>');
	}
	elseif ($json_decode['status_code']==011) {
		echo  ('<span class="bold700">Transfer was failed. Sender not found.</span>');		
	}
	elseif ($json_decode['status_code']==012) {
		echo  ('<span class="bold700">Transfer was failed. Incompatible sender.</span>');
	}
	elseif ($json_decode['status_code']==013) {
		echo  ('<span class="bold700">Transfer was failed. Not enough balance</span>');
	}
	elseif ($json_decode['status_code']==012) {
		echo  ('<span class="bold700">Transfer was failed. Incompatible sender</span>');
	}elseif ($json_decode['status_code']==021) {
		echo  ('<span class="bold700">Transfer was failed. Receiver not found</span>');
	}elseif ($json_decode['status_code']==022) {
		echo  ('<span class="bold700">Transfer was failed. Incompatible receiver</span>');
	}elseif ($json_decode['status_code']==100) {
		echo  ('<span class="bold700">Transfer was executed successfully</span>');
		
	}

	
// $con = mysqli_connect("localhost","root","","klinik_gg");
//   	$sql = "INSERT INTO pembayaran VALUES ('',$code','$sender_no','$receiver_no','$amount','$status_code','$time')";
//   	$result = mysqli_query($con,$sql);
 
//     if ($result) {
//         echo "data berhasil disimpan";
//     } else {
//         echo "data gagal disimpan";
//     }
?>
<div class="text-center">
	<div class="col-lg-12 col-md-12 col-12 col-xs-12 booking-form-item">
                  <button class="btn btn-primary" type="submit">OK</button>
                    </div>
                  </div>
                  </div>
</div>
</div>
</form>
</div>
</div>
</form>
</body>