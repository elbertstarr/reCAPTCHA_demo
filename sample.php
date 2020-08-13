<html>
<head>
    <title>reCAPTCHA demo: Explicit render after an onload callback</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">

    <script type="text/javascript">
        var onloadCallback = function() {
            grecaptcha.render('html_element', {
                // 'sitekey' : 'your_site_key'
                'sitekey' : '6LdDMr4ZAAAAAMmqrrqKoBlBENW0TWcnpacX8xfB'
            });
        };
    </script>
</head>
<body>
<form action="?" method="POST">
    <div id="html_element"></div>
    <br>
    <input type="submit" value="Submit">
</form>

---
<p><button onclick="document.location.href='index.php';">link index</button></p>
<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
        async defer>
</script>
</body>
</html>