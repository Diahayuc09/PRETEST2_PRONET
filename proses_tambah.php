<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $umur = $_POST["umur"];
    $kelas = $_POST["kelas"];

    $sql = "INSERT INTO siswa (nama, umur, kelas) VALUES ('$nama', $umur, '$kelas')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil disimpan! <a href='index.php'>Kembali</a>";
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>
