<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OUTLET</title>
</head>
<body>
<?php 
    include 'db.php';
    $db = new database();
    $data = $db -> getAll('tb_outlet')
?>


<table border ="2" cellpading ="10" cellspacing = "5" style = "border-collapse: collapse">
        <tr>
            <th>id member</th>
            <th>nama</th>
            <th>alamat</th>
            <th>telp</th>
            <th>status</th>
        </tr>
        <?php foreach($data as $d): ?>
                <tr>
                <td><?php echo $d ['id_outlet'];?></td>                
                <td><?php echo $d ['nama'];?></td>
                <td><?php echo $d ['alamat'];?></td>
                <td><?php echo $d ['telp'];?></td>
                <td>
        <a href="tb_outlet_update.php?id=<?php echo $d ['id_outlet'];?>"
        class = "btn btn-primary"> update </a>              

        <a href="tb_outlet_delete.php?id=<?php echo $d ['id_outlet'];?>"
        onclick="return confirm('apakah anda ingin menghapus data ini?')"
        class = "btn btn-danger"> delete </a>  
                </td>
                <?php endforeach?>
        
        </tr>
</table>
</body>
</html>
