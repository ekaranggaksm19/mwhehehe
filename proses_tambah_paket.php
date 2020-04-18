<?php

    require 'db.php';
    $db = new Database();

    $id =$_POST[''];
    $nama =$_POST['nama'];
    $alamat=$_POST['alamat'];
    $telp=$_POST['telp'];
   

   $update = $db -> update('tb_outlet' , [
       'nama'   => $nama,
       'alamat' =>$alamat,
       'telp' =>,
   ],['id_outlet'=>$id] );

   if ($insert > 0 ){
       header('location: ')
   }