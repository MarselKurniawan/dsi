<?php 
$server = "103.179.57.93";
$user = "bisangaji";
$pass = "DsiSmk9";
$database = "bisangajidb";
// $server = "localhost";
// $user = "id19137187_adminngaji";
// $pass = "KoboNgaji:(321";
// $database = "id19137187_bisangajidb";
$conn = mysqli_connect($server, $user, $pass, $database);
if (!$conn) {
    die("<script>alert('Gagal tersambung dengan database.')</script>");
}

$nama = $_POST['nama'];
$password = $_POST['password'];
$query = mysqli_query($conn, "SELECT * FROM ruser WHERE passwd = '$password' AND nama = '$nama' AND kdkatuser = gu");
if ($query->num_rows > 0) {
     	$query = mysqli_query($conn, "SELECT * FROM ruser WHERE nama = '$nama'");
		$row = mysqli_fetch_assoc($query);
		$total = mysqli_num_rows($query);
}
 ?>