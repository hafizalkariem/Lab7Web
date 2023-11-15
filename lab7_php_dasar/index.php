<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input PHP</title>
</head>
<body>

<?php
// Fungsi untuk menghitung umur berdasarkan tanggal lahir
function hitungUmur($tanggal_lahir) {
    $tgl_lahir = new DateTime($tanggal_lahir);
    $sekarang = new DateTime('today');
    $umur = $sekarang->diff($tgl_lahir);
    return $umur->y;
}

// Daftar pekerjaan dan gaji
$pekerjaan_gaji = array(
    'Programmer' => 5000000,
    'Desainer' => 4500000,
    'Marketing' => 4000000
);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil nilai inputan dari form
    $nama = $_POST['nama'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $pekerjaan = $_POST['pekerjaan'];

    // Validasi inputan
    if (empty($nama) || empty($tanggal_lahir) || empty($pekerjaan)) {
        echo "Semua field harus diisi!";
    } else {
        // Hitung umur berdasarkan tanggal lahir
        $umur = hitungUmur($tanggal_lahir);

        // Tampilkan output
        echo "<h2>Output:</h2>";
        echo "<p>Nama: $nama</p>";
        echo "<p>Tanggal Lahir: $tanggal_lahir</p>";
        echo "<p>Umur: $umur tahun</p>";
        echo "<p>Pekerjaan: $pekerjaan</p>";
        echo "<p>Gaji: Rp " . number_format($pekerjaan_gaji[$pekerjaan]) . "</p>";
    }
}
?>

<!-- Form input -->
<h2>Form Input</h2>
<form method="post" action="">
    <label for="nama">Nama:</label>
    <input type="text" name="nama" required><br>

    <label for="tanggal_lahir">Tanggal Lahir:</label>
    <input type="date" name="tanggal_lahir" required><br>

    <label for="pekerjaan">Pekerjaan:</label>
    <select name="pekerjaan" required>
        <option value="">Pilih Pekerjaan</option>
        <option value="Programmer">Programmer</option>
        <option value="Desainer">Desainer</option>
        <option value="Marketing">Marketing</option>
    </select><br>

    <input type="submit" value="Submit">
</form>

</body>
</html>
