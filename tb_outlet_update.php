<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
include "db.php";
$db=new Database();
$id=$_GET['id'];
$update=$db -> getById('tb_outlet',['id_outlet'=>$id]);
?>
<?php foreach($update as $u): ?>

    <form action="proses_update_outlet.php" method="POST">
    <fieldset>
    <legend>update</legend>
    <br>
    <label>id outlet</label>
    <br>
    <input value="<?php echo $u['id_outlet']; ?>" type="int" name="id outlet" placeholder = "id outlet" readonly>
    <br>
    <label>nama</label>
    <br>
    <input value="<?php echo $u['nama']; ?>" type="text" name="nama" placeholder = "nama" required>
    <br>
    <label>alamat</label>
    <br>
    <input value="<?php echo $u['alamat']; ?>" type="text" name="alamat" placeholder = "alamat" required>
    <br>
    <label>telp</label>
    <br>
    <input value="<?php echo $u['telp']; ?>" type="varchar" name="telp" placeholder = "telp" required>
    <br>
    <button type="submit"> update</button>
    </fieldset>
    </form>
    <?php endforeach; ?>
</body>
</html>





