<?php include 'config.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Siswa</title>
</head>
<body>
    <h2>Form Tambah Data Siswa</h2>
    <form action="proses_tambah.php" method="POST">
        Nama: <input type="text" name="nama" required><br>
        Umur: <input type="number" name="umur" required><br>
        Kelas: <input type="text" name="kelas" required><br>
        <input type="submit" value="Simpan">
    </form>

    <h2>Data Siswa</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Umur</th>
            <th>Kelas</th>
            <th>Aksi</th>
        </tr>

        <?php
        $result = $conn->query("SELECT * FROM siswa");
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['nama']}</td>
                <td>{$row['umur']}</td>
                <td>{$row['kelas']}</td>
                <td>
                    <a href='edit.php?id={$row['id']}'>Edit</a> |
                    <a href='hapus.php?id={$row['id']}' onclick='return confirm(\"Hapus data?\")'>Hapus</a>
                </td>
            </tr>";
        }
        ?>
    </table>
</body>
</html>
