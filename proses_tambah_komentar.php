<?php
// Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "diskusi");

// Fungsi untuk menambahkan komentar pada tulisan tertentu
function tambahKomentar($idTulisan, $komentar) {
    global $conn;
    $query = "INSERT INTO comments (post_id, content) VALUES ('$idTulisan', '$komentar')";
    mysqli_query($conn, $query);
}
?>