<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>register</title>
</head>
<body>
    <form action = "proses_register.php" method = "POST">
    <fieldset>
        <legend>TABEL FORMULIR</legend>
        <br>
        <label>Nama</label>
        <br>
        <input type="varchar" name="nama" placeholder = "nama" required>
        <br>
        <br>
        <label>Userrname</label>
        <br>
        <input type="varchar" name="username" placeholder = "username" required>
        <br>
        <br>
        <label>Email</label>
        <br>
        <input type="varchar" name="email" placeholder = "email" required>
        <br>
        <br>
        <label>Password</label>
        <br>
        <input type="text" name="password" placeholder = "email" required>
        <br>
        <hr>
        <button type = "submit">REGISTER!</button>
    </fieldset>
    </form>
    <br>
    <a href="login.php">LOGIN</a>
</body>
</html>