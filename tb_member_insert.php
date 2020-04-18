<?php

include 'db.php';

$db = new Database();

$insert = $db->insert('tb_outlet', [
    'id_outlet' => '',
    'nama'      => 'desty',
    'alamat'    => 'nyomplong',
    'telp'      => '085xxxxxxxxx',
]);

if ( $insert > 0 ){
    echo "berhasil";
} else {
    echo "gagal...";
}