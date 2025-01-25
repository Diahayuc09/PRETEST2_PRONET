<?php
include 'config.php';

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM siswa WHERE id=$id");
$data = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Siswa</title>
</head>
<body>
    <h2>Edit Data Siswa</h2>
    <form action="proses_edit.php" method="POST">
        <input type="hidden" name="id" value="<?= $data['id'] ?>">
        Nama: <input type="text" name="nama" value="<?= $data['nama'] ?>" required><br>
        Umur: <input type="number" name="umur" value="<?= $data['umur'] ?>" required><br>
        Kelas: <input type="text" name="kelas" value="<?= $data['kelas'] ?>" required><br>
        <input type="submit" value="Update">
    </form>
</body>
</html>
