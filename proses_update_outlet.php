<?php

    require 'db.php';
    $db = new Database();

    $id_paket =$_POST['id_paket'];
    $id_outlet =$_POST['id_outlet'];
    $nama_paket=$_POST['nama_paket'];
    $jenis=$_POST['jenis'];
    $harga=$_POST['harga'];

   $insert = $db -> insert('tb_paket' , [
       'id_paket'  => '',
       'id_outlet' => $id_outlet,
       'jenis'  =>$jenis,
       'nama_paket' =>$nama_paket,
       'haraga'  =>$harga
   ]);

   if ($insert > 0 ){
       header('location: ')
   }