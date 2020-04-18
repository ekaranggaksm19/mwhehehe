<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="proses_update_member.php" method="POST">
    <fieldset>
    <legend>update</legend>
    <br>
    <label>id outlet</label>
    <br>
    <input type="int" name="id_member" placeholder = "id outlet" value="<?php echo $data['id_member']; ?>" readonly>
    <br>
    <label>nama</label>
    <br>
    <input type="text" name="Nama" placeholder = "nama" value="<?php echo $data['Nama']; ?>" required>
    <br>
    <label>alamat</label>
    <br>
    <textarea name="Alamat" cols="30" rows="10" placeholder = "alamat" value="<?php echo $data['Alamat']; ?>" required></textarea>
    <br>
    <label>jenis kelamin</label>
    <br>
    <select name="Jenis_kelamin" required>
    <option value="L">L</option>
    <option value="P">P</option>
    </select>
    <br>
    <label>telp</label>
    <br>
    <input type="varchar" name="Telp" placeholder = "telp" value="<?php echo $data['Telp']; ?>" required>
    <br>
    <button type="submit"> update</button>
    </fieldset>
    </form>

</body>
</html>




