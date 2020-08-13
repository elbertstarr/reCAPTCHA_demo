<html>
    <head>
        <title>login page</title>
        <!-- CSS only -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    </head>
    <body>
        <form method="post" action="submit.php">
            <table>
                <tr><td><input type="text" name="id" id="id" placeholder="id"></td></tr>
                <tr><td><input type="text" name="password" id="password" placeholder="password"></td></tr>
                <tr><td><input type="submit" value="submit"></td></tr>
            </table>
        </form>

        ---
        <p><button onclick="document.location.href='index_reCAPTCHA.php';">link recaptcha</button></p>
        ---
        <p><button onclick="document.location.href='sample.php';">link sample</button></p>
        ---
        <p><button onclick="document.location.href='sample1.php';">link sample1</button></p>
    </body>
</html>

