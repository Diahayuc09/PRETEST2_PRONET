<?php
$nama = "Diah Ayu Choirunnisa";
$usia = 22;
$status = "Mahasiswa";

echo "Nama: $nama <br>";
echo "Usia: $usia tahun <br>";
echo "Status: $status <br>";
echo "<br>Masukkan usia Anda: ";
?>

<form method="post">
    <input type="number" name="usia_user" required>
    <input type="submit" value="Kirim">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usia_user = intval($_POST["usia_user"]);

    if ($usia_user < 18) {
        echo "Anda masih di bawah umur.";
    } elseif ($usia_user >= 18 && $usia_user <= 60) {
        echo "Anda adalah orang dewasa.";
    } else {
        echo "Anda adalah seorang lansia.";
    }
}
?>