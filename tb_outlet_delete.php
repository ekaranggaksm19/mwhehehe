<?php

include 'db.php';

$db = new Database();

$id=$_GET['id'];

$delete = $db->delete('tb_outlet', ['id_outlet'=> $id]);

if ( $delete > 0) {
    header ('location: tb_outlet.php');
} else {
    echo "gagal..";
}
