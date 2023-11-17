<?php
$koneksi = mysqli_connect('localhost', 'root', '', 'lsp_akademik');
if ($koneksi->connect_errno) {
    echo mysqli_connect_error($koneksi);
}