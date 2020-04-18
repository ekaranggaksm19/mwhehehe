<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form tambah paket</title>
</head>
<body>
    <form action="proses_tambah_paket.php" method="POST">
    <fieldset>
    <legend>Form tambah paket</legend>
    <br>
    <br>
    <label>Id Paket</label>
    <input class="form-control" type="text"placeholder="nama paket" name="id_paket">
    <br>
    <br>
    <label>Id outlet</label>
    <select name="id_outlet" class="form-control">
    <?php
        include 'db.php';
        $db = new Database();
        $outlet = $db->getAll('tb_outlet');
        foreach($outlet as $o):
    ?>
        <option value="<?php echo $o['id_outlet'];?>" class="form-control"><?php echo $o['nama']; ?></option>
    <?php endforeach; ?>

    </select>
    <br>
    <br>
    <div class ="form-group">
    <label for= "name"> Nama Paket </label>
    <input class="form-control" type="text"placeholder="nama paket" name="nama paket">
    </div>
    <br>
    <div class ="form-group">
    <label>Jenis </label>
    <select name="Jenis" required>
    <option value="kiloan">kiloan</option>
    <option value="selimut">selimut</option>
    <option value="badcover">badcover</option>
    <option value="kaos">kaos</option>
    </select>
    <br>
    <br>
    <div class ="form-group">
    <label for= "name"> Harga </label>
    <input class="form-control" type="bigint"placeholder="harga" name="harga">
    </div>
    <br>
    <br>
    <button>Tambah paket!</button>
</body>
</html>
