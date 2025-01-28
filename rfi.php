<?php
// Tentukan nama file
$file = 'tes.txt';

// Tentukan isi file
$content = 'berhasil';

// Cek apakah file sudah ada, jika tidak, buat file baru dan tulis kontennya
if (file_put_contents($file, $content)) {
    echo "File berhasil dibuat dan isi berhasil ditulis.";
} else {
    echo "Gagal membuat atau menulis ke file.";
}
?>
