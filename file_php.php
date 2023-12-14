<!-- Menampilkan daftar tulisan beserta komentar -->
<?php
    // Tampilkan daftar tulisan
    $queryTulisan = "SELECT * FROM posts";
    $resultTulisan = mysqli_query($conn, $queryTulisan);
    while ($rowTulisan = mysqli_fetch_assoc($resultTulisan)) {
        echo "<h2>" . $rowTulisan['title'] . "</h2>";
        echo "<p>" . $rowTulisan['content'] . "</p>";
        echo "<p>Tanggal Posting: " . $rowTulisan['date_posted'] . "</p>";

        // Tampilkan komentar untuk setiap tulisan
        $postId = $rowTulisan['id'];
        $queryKomentar = "SELECT * FROM comments WHERE post_id = $postId";
        $resultKomentar = mysqli_query($conn, $queryKomentar);
        echo "<h3>Komentar:</h3>";
        while ($rowKomentar = mysqli_fetch_assoc($resultKomentar)) {
            echo "<p>" . $rowKomentar['content'] . "</p>";
            echo "<p>Tanggal Komentar: " . $rowKomentar['date_commented'] . "</p>";
        }
    }
    ?>