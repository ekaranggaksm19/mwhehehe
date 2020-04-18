<?php

include 'db.php';

$db = new Database();

$id=$_GET['id'];

$delete = $db->delete('tb_member', ['id_member'=> $id]);

if ( $delete > 0) {
    header ('location: tb_member.php');
} else {
    echo "gagal..";
}
