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


//$data = $db->getAll('tb_outlet');
//
//foreach($data as $d):
//    echo $d['id_outlet'];
//    echo "<br>";
//    echo $d['nama'];
//    echo "<br>";
//    echo $d['alamat'];
//    echo "<br>";
//    echo $d['telp'];
//    echo "<br>";
//    echo "<hr>";
//endforeach;


//$data = $db->getById('tb_outlet');
//
//foreach($data as $d):
//    echo $d['id_outlet'];
//    echo "<br>";
//    echo $d['nama'];
//    echo "<br>";
//    echo $d['alamat'];
//    echo "<br>";
//    echo $d['telp'];
//    echo "<br>";
//    echo "<hr>";
//endforeach;