<?php
// Lakukan koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$database = "diskusi";

$conn = new mysqli($servername, $username, $password, $database);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil nilai dari formulir
    $judul = $_POST['judul'];
    $konten = $_POST['konten'];

    // Simpan tulisan ke dalam tabel di database
    $sql = "INSERT INTO posts (title, content) VALUES ('$judul', '$konten')";
    $result = $conn->query($sql);
}
// Tutup koneksi database
$conn->close();
?>
