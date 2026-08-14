<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "php_dasaar";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
echo "Koneksi berhasil<br>";

$sql = "SELECT * FROM data";
$result = mysqli_query($conn, $sql);

$data = mysqli_fetch_all($result, MYSQLI_ASSOC);


foreach($data as $row){
    echo $row["no_telp"]." ";
    echo $row["nama"]." ";
    echo $row["umur"]." ";
    echo $row["alamat"]." ";
    echo "<br>";
}

?>