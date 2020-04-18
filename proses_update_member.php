<?php

include 'db.php';

$db = new Database();

$update = $db->update('tb_member', [
    'Nama'           => '',
    'Alamat'         => '',
    'Jenis_kelamin'  => '',
    'telp'           => ''
],['id_member' => ]);

if ( $update > 0){
    echo "berhasil";
} else {
    echo "gagal...";
}