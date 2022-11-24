<?php 
$koneksi = mysqli_connect("localhost", "root", "", "registrasi");

$nama = $_POST['nama'];
$umur = $_POST['umur'];
$email = $_POST['email'];
$komentar = $_POST['komentar'];
$submit = $_POST['submit'];

$query = "INSERT INTO registrasi VALUES('$nama','$umur','$email','$komentar','$submit')";

mysqli_query($koneksi, $query);

?>
Selamat datang <?php echo $_POST["nama"]; ?><br>
Email yang anda gunakan adalah: <?php echo $_POST["email"]; 