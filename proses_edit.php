<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $nama = $_POST["nama"];
    $umur = $_POST["umur"];
    $kelas = $_POST["kelas"];

    $sql = "UPDATE siswa SET nama='$nama', umur=$umur, kelas='$kelas' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil diperbarui! <a href='index.php'>Kembali</a>";
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>
