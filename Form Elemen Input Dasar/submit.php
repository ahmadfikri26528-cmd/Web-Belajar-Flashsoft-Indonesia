<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pendaftaran</title>
</head>
<body>

    <h2>Data Pendaftaran Anda</h2>

    <?php
    // Mengecek apakah ada data yang dikirim melalui form POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        // 1. Menangkap data inputan teks biasa
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $password = $_POST['password']; 
        
        // 2. Menangkap data dari radio button (hanya ada 1 pilihan)
        $olahraga = $_POST['olahraga'];

        // 3. Menangkap data dari checkbox (bisa lebih dari 1 pilihan)
        // Kita gunakan 'isset' untuk mengecek apakah ada kotak hobi yang dicentang
        if (isset($_POST['hobi'])) {
            // implode() berfungsi untuk menggabungkan banyak pilihan menjadi satu kalimat yang dipisah koma
            $hobi_tambahan = implode(", ", $_POST['hobi']);
        } else {
            // Jika tidak ada yang dicentang sama sekali
            $hobi_tambahan = "Tidak ada hobi tambahan yang dipilih";
        }

        // 4. Menampilkan semua hasil tangkapan ke layar
        echo "<p><strong>Nama:</strong> " . $nama . "</p>";
        echo "<p><strong>Email:</strong> " . $email . "</p>";
        echo "<p><strong>Password:</strong> " . $password . " <em>(Catatan: Di dunia nyata, password akan disensor/diacak dan tidak boleh ditampilkan!)</em></p>";
        echo "<p><strong>Olahraga Favorit:</strong> " . $olahraga . "</p>";
        echo "<p><strong>Hobi Tambahan:</strong> " . $hobi_tambahan . "</p>";

    } else {
        // Pesan error jika halaman diakses langsung tanpa lewat form
        echo "<p>Silakan isi form pendaftaran terlebih dahulu.</p>";
    }
    ?>

</body>
</html>