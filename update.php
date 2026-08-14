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


$sql = "UPDATE data SET nama='Sutrisna', umur=41, alamat='Bandung' Where no_telp='083829385792'";

if (mysqli_query($conn, $sql)) {
    echo "Data berhasil diperbarui<br>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>