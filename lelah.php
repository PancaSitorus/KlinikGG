
<?php
 
//koneksi ke database
$connection = mysqli_connect("localhost", "root", "", "klinik_gg") or die("Error " . mysqli_error($connection));
 
//menampilkan data dari database, table tb_anggota
$sql = "select * from pembayaran";
$result = mysqli_query($connection, $sql) or die("Error " . mysqli_error($connection));
 
//membuat array
while ($row = mysqli_fetch_assoc($result)) {
    $ArrAnggota[] = $row;
}
 
echo json_encode($ArrAnggota, JSON_PRETTY_PRINT);
 
//tutup koneksi ke database
mysqli_close($connection);
?>