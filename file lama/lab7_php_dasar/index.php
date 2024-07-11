<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = isset($_POST["nama"]) ? $_POST["nama"] : "";
    $tanggal_lahir = isset($_POST["tanggal_lahir"]) ? $_POST["tanggal_lahir"] : "";
    $pekerjaan = isset($_POST["pekerjaan"]) ? $_POST["pekerjaan"] : "";


    $umur = calculateAge($tanggal_lahir);

    $pekerjaan_gaji = array(
        'Programmer' => 5000000,
        'Desainer' => 4500000,
        'Marketing' => 4000000
    );
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container-content {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        .form p {
            margin: 0 0 10px;
            font-size: 16px;
            color: #333;
        }

        .form p strong {
            color: #4caf50;
        }

        .form p:last-child {
            margin-bottom: 0;
        }
    </style>
    <title>Hasil Formulir POST</title>
</head>
<body>

<div class="container-content">
    <div class="form">
        <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
            <p><strong>Nama:</strong> <?php echo $nama; ?></p>
            <p><strong>Tanggal Lahir:</strong> <?php echo $tanggal_lahir; ?></p>
            <p><strong>Umur:</strong> <?php echo $umur; ?> tahun</p>
            <p><strong>Pekerjaan:</strong> <?php echo $pekerjaan; ?></p>
            <p><strong>Gaji:</strong> Rp <?php echo number_format($pekerjaan_gaji[$pekerjaan]); ?></p>
        <?php else: ?>
            <p>Formulir belum di-submit.</p>
        <?php endif; ?>
    </div>
</div>

</body>
</html>

<?php
function calculateAge($birthdate) {
    $tgl_lahir = new DateTime($birthdate);
    $sekarang = new DateTime('today');
    $umur = $sekarang->diff($tgl_lahir);
    return $umur->y;
}
?>
