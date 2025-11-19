<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Saldo Bank</title>
</head>
<body>
    <h1>Kalkulator Saldo Akhir Tabungan</h1>
    <form method="post" action="">
        <label for="saldo_awal">Saldo Awal (Rp):</label>
        <input type="number" id="saldo_awal" name="saldo_awal" value="1000000" required><br><br>
        
        <label for="n_bulan">Jangka Waktu (N Bulan):</label>
        <input type="number" id="n_bulan" name="n_bulan" min="1" required><br><br>
        
        <input type="submit" name="hitung" value="Hitung Saldo Akhir">
    </form>

    <?php
    if (isset($_POST['hitung'])) {
        // Ambil input dari form
        $saldo = (float) $_POST['saldo_awal'];
        $n = (int) $_POST['n_bulan'];
        
        // Konstanta
        $biaya_admin = 9000; // Rp 9.000 per bulan
        $batas_saldo = 1100000; // Rp 1.100.000
        
        // Loop untuk setiap bulan
        for ($bulan = 1; $bulan <= $n; $bulan++) {
            // Tentukan bunga tahunan berdasarkan saldo saat ini
            if ($saldo < $batas_saldo) {
                $bunga_tahunan = 0.03; // 3%
            } else {
                $bunga_tahunan = 0.04; // 4%
            }
            
            // Hitung bunga bulanan
            $bunga_bulanan = ($bunga_tahunan / 12) * $saldo;
            
            // Tambahkan bunga ke saldo
            $saldo += $bunga_bulanan;
            
            // Kurangi biaya administrasi
            $saldo -= $biaya_admin;
            
            // Pastikan saldo tidak negatif (meskipun tidak mungkin dalam kasus ini)
            if ($saldo < 0) {
                $saldo = 0;
            }
        }
        
        // Tampilkan hasil
        echo "<h2>Saldo Akhir Setelah $n Bulan: Rp " . number_format($saldo, 0, ',', '.') . ",-</h2>";
    }
    ?>
</body>
</html>