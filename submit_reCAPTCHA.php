<?php
session_start();

if(isset($_SESSION['id']) && isset($_SESSION['password']) && isset($_SESSION['captcha_res'])){
    $id             = $_SESSION['id'];
    $password       = $_SESSION['password'];
    $captcha_res    = $_SESSION['captcha_res'];

    if($id == 'id' && $password == 'password' && $captcha_res == true){
        var_export('succes login');
    } else{
        switch ($captcha_res){
            case true:
                var_export('id or password is error!');
                break;
            default:
                var_export('recaptcha error!');
        }
    }
}
else{
    var_export('please back login page');
}
?>

<html>
<head>
    <title>reCAPTCHA demo: submit page</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
</head>
<body>
    <p><button onclick="document.location.href='index_reCAPTCHA.php';">link login</button></p>
</body>
</html>


