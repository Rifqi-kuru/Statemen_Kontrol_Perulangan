<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penyelesaian x + y + z = 25</title>
</head>
<body>
    <h1>Semua Pasangan x, y, z yang Memenuhi x + y + z = 25 (Bilangan Asli)</h1>
    <pre>
<?php
$count = 0; // Inisialisasi counter untuk jumlah penyelesaian

// Nested FOR loops 3 tingkat
for ($x = 1; $x <= 23; $x++) { // x minimal 1, maksimal 23 (karena y dan z minimal 1)
    for ($y = 1; $y <= 23; $y++) { // y minimal 1, maksimal 23
        for ($z = 1; $z <= 23; $z++) { // z minimal 1, maksimal 23
            if ($x + $y + $z == 25) {
                echo "x = $x, y = $y, z = $z\n";
                $count++;
            }
        }
    }
}

// Tampilkan jumlah penyelesaian
echo "\nJumlah penyelesaian: $count";
?>
    </pre>
</body>
</html>