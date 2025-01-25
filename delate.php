<?php
include 'config.php';

$id = $_GET["id"];
$sql = "DELETE FROM siswa WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Data berhasil dihapus! <a href='index.php'>Kembali</a>";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
