<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MEMBER</title>
</head>
<body>
<?php 
    include 'db.php';
    $db = new database();
    $data = $db -> getAll('tb_member')
?>


<table border ="2" cellpading ="10" cellspacing = "5" style = "border-collapse: collapse">
        <tr>
            <th>id member</th>
            <th>nama</th>
            <th>alamat</th>
            <th>jenis kelamin</th>
            <th>telp</th>
            <th>status</th>
        </tr>
        <?php foreach($data as $d): ?>
                <tr>
                <td><?php echo $d ['id_member'];?></td>                
                <td><?php echo $d ['Nama'];?></td>
                <td><?php echo $d ['Alamat'];?></td>
                <td><?php echo $d ['Jenis_kelamin'];?></td>
                <td><?php echo $d ['Telp'];?></td>
                <td>
        <a href="tb_member_update.php?id=<?php echo $d ['id_member'];?>"
        class = "btn btn-primary"> update </a>              

        <a href="tb_member_delete.php?id=<?php echo $d ['id_member'];?>"
        onclick="return confirm('apakah anda ingin menghapus data ini?')"
        class = "btn btn-danger"> delete </a>  
                </td>
                <?php endforeach?>
        
        </tr>
</table>
</body>
</html>
