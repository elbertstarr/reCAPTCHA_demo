<?php
$id         = $_POST['id'];
$password   = $_POST['password'];

if($id == 'id' && $password == 'password'){
    var_export('succes login');
} else{
    var_export('id or password is error!');
}
?>

<html>
<head>
    <title>submit page</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
</head>
<body>
    <p><button onclick="document.location.href='index.php';">link login</button></p>
</body>
</html>

