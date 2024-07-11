# Lab7Web

| Nama   | Ahmad Hapizhudin |
| :----- | :--------------- |
| NIM    | 312210370        |
| Kelas  | TI.22.A4         |
| Matkul | Pemrograman Web  |

# PHP: Hypertext Preprocessor

PHP (Hypertext Preprocessor) adalah bahasa pemrograman sisi server yang digunakan untuk pengembangan web. PHP dirancang khusus untuk membuat halaman web dinamis dan interaktif.

## Fitur Utama

- **Server-Side Scripting:** PHP dieksekusi di sisi server, menghasilkan output yang dikirimkan ke browser pengguna.
- **Sintaksis Mirip C:** Memiliki sintaksis yang mirip dengan bahasa pemrograman C, memudahkan bagi pengembang yang familiar dengan C, C++, atau Java.
- **Integrasi Mudah:** Dapat diintegrasikan dengan HTML dan berbagai jenis database, seperti MySQL.
- **Open Source:** PHP adalah perangkat lunak sumber terbuka, dapat diunduh, dan digunakan secara gratis.

## Contoh Kode

```php
<?php
  $nama = "Pengguna";
  echo "Halo, $nama! Selamat datang di PHP.";
?>
```

## Instalasi

Untuk menginstal PHP, kunjungi situs resmi PHP dan ikuti petunjuk instalasi sesuai dengan sistem operasi yang digunakan.

## Sumber Daya

[Dokumentasi PHP](https://www.php.net/docs.php): Referensi lengkap untuk fungsi dan fitur PHP.  
[PHP: The Right Way](https://phptherightway.com/): Panduan praktis untuk pengembangan PHP yang baik dan benar.

## Kontribusi

Kontribusi dipersilakan! Silakan buka panduan kontribusi untuk informasi lebih lanjut.

# Praktikum 7: PHP Dasar

## Tujuan

1. Mahasiswa mampu memahami konsep dasar Server Side Scripting.
2. Mahasiswa mampu memahami dasar Pemrograman PHP.
3. Mahasiswa mampu memahami Variable dan Tipe Data pada PHP.
4. Mahasiswa mampu memahami konsep Struktur Kondisi dan Perulangan.
5. Mahasiswa mampu membuat program PHP sederhana.

## Pengantar PHP

PHP adalah singkatan dari PHP Hypertext Prepocessor dan merupakan bahasa pemrograman yang di desain khusus untuk web development atau pengembangan web. PHP memiliki sifat Server-Side karena PHP dijalankan atau di eksekusi dari sisi server. Maksud dijalankan dari sisi server adalah PHP dijalankan pada komputer server dan bukan pada komputer client. PHP dijalankan melalui aplikasi web browser sama halnya seperti HTML. Hampir semua situs-situs besar dan populer dikembangkan menggunakan PHP, seperti misalnya wordpress, joomla, facebook, twitter, wikipedia, dan situs besar lainnya.

## Instruksi Praktikum

1. Persiapkan text editor misalnya VSCode.
2. Buat folder baru dengan nama lab7_php_dasar pada docroot webserver (htdocs).
3. Ikuti langkah-langkah praktikum yang akan dijelaskan berikutnya.

## Langkah-langkah Praktikum

### Persiapan

Untuk memulai membuat kode php, perlu disiapkan web server dan interpreter PHP terlebih dahulu. Web server yang kita gunakan adalah Apache 2 dan interpreter PHP 7. Untuk memudahkan proses praktikum, kita gunakan aplikasi bundle web server yaitu XAMPP.

#### Install XAMPP

Unduh XAMPP dari [https://www.apachefriends.org/download.html](https://www.apachefriends.org/download.html) dan pilih versi portable untuk memudahkan proses instalasi. Kemudian extract file tersebut, sesuaikan direktorinya (misal: d:\xampp).

#### Konfigurasi Web Server

- Konfigurasi Apache
  Untuk konfigurasi HTTP server, seperti port yang digunakan akses HTTP, modul yang diaktifkan, lokasi document root, dll.
  Lokasi file: \xampp\apache\conf\httpd.conf
- Konfigurasi PHP
  Untuk konfigurasi perilaku engine PHP yang berpengaruh pada keamanan dan performa. Seperti batas maksimal waktu eksekusi script, batas file yang dapat diupload, error reporting, dll.
  Lokasi file: \xampp\php\php.ini
- Konfigurasi MySQL
  Konfigurasi server MySQL, seperti administrator user, port, timezone, dll.
  Lokasi file: \xampp\mysql\bin\my.ini

---

## Latihan

### Dasar

![Alt text](<code snap/code.png>)
![Alt text](<screenshoot/Screenshot 2023-11-14 045841.png>)

---

## Form Input

![Alt text](image.png)
![Alt text](<screenshoot/Screenshot 2023-11-15 082100.png>)

## Operator

![Alt text](<code snap/operator_php_img.png>)

## If-condition

![Alt text](<code snap/if_condition.png>)

## Switch

![Alt text](<code snap/switch.png>)

## Perulangan For

![Alt text](<code snap/for.png>)

## Perulangan While

![Alt text](<code snap/while.png>)

## Perulangan dowhile

## ![Alt text](<code snap/do-while.png>)

<h1 align="center">Tugas Praktikum</h1>

Buatlah program PHP sederhana dengan menggunakan form input yang menampilkan
nama, tanggal lahir dan pekerjaan. Kemudian tampilkan outputnya dengan menghitung
umur berdasarkan inputan tanggal lahir. Dan pilihan pekerjaan dengan gaji yang
berbeda-beda sesuai pilihan pekerjaan.

---

## Index.html

```html
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form Input PHP</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="container">
      <h2 class="header">Form Input</h2>
      <div class="container-form">
        <form method="post" action="index.php">
          <label for="nama">Nama:</label>
          <input type="text" name="nama" required /><br />

          <label for="tanggal_lahir">Tanggal Lahir:</label>
          <input type="date" name="tanggal_lahir" required /><br />

          <label for="pekerjaan">Pekerjaan:</label>
          <select name="pekerjaan" required>
            <option value="">Pilih Pekerjaan</option>
            <option value="Programmer">Programmer</option>
            <option value="Desainer">Desainer</option>
            <option value="Marketing">Marketing</option></select
          ><br />

          <input type="submit" value="Submit" />
        </form>
      </div>
    </div>
  </body>
</html>
```

## Index.php

```php
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


```

## style.css

```css
/* font-family: 'Courier Prime', monospace;
font-family: 'Noto Sans', sans-serif;
font-family: 'Poppins', sans-serif; */
* {
  margin: 0;
  padding: 0;
  text-decoration: none;
}
body {
  box-sizing: border-box;
  height: 100vh;
  background: rgb(86, 255, 0);
  background: radial-gradient(
    circle,
    rgba(86, 255, 0, 1) 0%,
    rgba(70, 252, 219, 1) 100%
  );
  display: flex;
  justify-content: center;
  align-items: center;
}
.container {
  box-sizing: border-box;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  align-items: center;
  max-width: 500px;
  margin: 0px auto;
  position: relative;
}
.header {
  font-family: "Courier Prime", monospace;
  font-size: 2em;
  padding: 20px;
}
.container-form {
  display: inline-block;
}
form {
  background-color: #fff;
  padding: 20px;
  border-radius: 8px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  width: 300px;
}

label {
  display: block;
  margin-bottom: 8px;
}

input,
select {
  width: 100%;
  padding: 8px;
  margin-bottom: 12px;
  box-sizing: border-box;
}

input[type="submit"] {
  background-color: #437dff;
  color: #fff;
  cursor: pointer;
  border-radius: 5px;
  border: none;
}

h2 {
  color: #333;
}

p {
  margin: 0 0 10px;
}

/* index.php */
.container-content {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 300px;
  margin: 0 auto;
  border: 1px solid #333;
  border-radius: 5px;
  box-sizing: border-box;
}
.form {
  box-sizing: border-box;
  padding: 20px;
  display: inline-block;
}
```

<h1 align="center">Result</h1>

![Alt text](<tugas 1.png>)
![Alt text](<tugas 2.png>)

---

<h1 align="center">Terimakasih
