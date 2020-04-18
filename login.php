<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title> Login | OceanClean </title>
</head>
<body>
    <div class="limiter">
    <div class="container-login100">
    <div class="wrap-login100">
        <form class="login100-form validate-form" action="proses_login.php" method="POST">
        <center><img src="images.png" width="300px"></center>
        <center><span class="login100-form-title p-b-26">
            Welcome To OceanClean
            </span>
            <br>
            <br>
            <span class="login100-form-title p-b-48">
            <label>username</label>
            </span>
    <div class="wrap-input100 validate-input" data-validate="Valid email is: a@b.c">
            <input class="input100" type="text" name="email">
            <span class="focus-input100" data-placeholder="Email">
            </span>
    </div>
    <div class="wrap-input100 validate-input" data-validate="Enter password">
            <span class="btn-show-pass">
            <label>password</label>
            <br>
            </span>
            <input class="input100" type="password" name="password">
            <span class="focus-input100" data-placeholder="Password">
            </span>
            <br>
    </div>
    <div class="container-login100-form-btn">
    <div class="wrap-login100-form-btn">
    <div class="login100-form-bgbtn"></div>
            <button class="login100-form-btn" href="proses_login.php">
            Login
            </button>
            </center>
    </div>
    </div>
    <div class="text-center p-t-115">
        <span class="txt1">
        <center>
        Tidak mempunyai akun?
        </center>
        </span>
        <center>
        <a class="txt2" href="register.php">
        Buat akun
        </a>
        </center>
    </div>
    </form>
    </div>
    </div>
    </div>
    <div id="dropDownSelect1"></div>
    
    <style>
    body{
        background-color: white;
        
    }
    
    </style>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>