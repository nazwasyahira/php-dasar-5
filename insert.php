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


$sql = "INSERT INTO data (no_telp, nama, umur, alamat) VALUES 
('083829385792', 'Sutrisna', 40, 'Depok'),
('085183209451', 'Sintia', 18, 'Bandung')";

if (mysqli_query($conn, $sql)) {
    echo "Data berhasil ditambahkan<br>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>