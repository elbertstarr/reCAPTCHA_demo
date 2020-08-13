<html>
<head>
    <title>reCAPTCHA demo: Explicit render for multiple widgets</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">

    <script type="text/javascript">
        var verifyCallback = function(response) {
            alert(response);
        };
        var widgetId1;
        var widgetId2;
        var onloadCallback = function() {
            // Renders the HTML element with id 'example1' as a reCAPTCHA widget.
            // The id of the reCAPTCHA widget is assigned to 'widgetId1'.
            widgetId1 = grecaptcha.render('example1', {
                // 'sitekey' : 'your_site_key',
                'sitekey' : '6LdDMr4ZAAAAAMmqrrqKoBlBENW0TWcnpacX8xfB',
                'theme' : 'light'
            });
            widgetId2 = grecaptcha.render(document.getElementById('example2'), {
                // 'sitekey' : 'your_site_key'
                'sitekey' : '6LdDMr4ZAAAAAMmqrrqKoBlBENW0TWcnpacX8xfB'
            });
            grecaptcha.render('example3', {
                // 'sitekey' : 'your_site_key',
                'sitekey' : '6LdDMr4ZAAAAAMmqrrqKoBlBENW0TWcnpacX8xfB',
                'callback' : verifyCallback,
                'theme' : 'dark'
            });
        };
    </script>
</head>
<body>
<!-- The g-recaptcha-response string displays in an alert message upon submit. -->
<form action="javascript:alert(grecaptcha.getResponse(widgetId1));">
    <div id="example1"></div>
    <br>
    <input type="submit" value="getResponse">
</form>
<br>
<!-- Resets reCAPTCHA widgetId2 upon submit. -->
<form action="javascript:grecaptcha.reset(widgetId2);">
    <div id="example2"></div>
    <br>
    <input type="submit" value="reset">
</form>
<br>
<!-- POSTs back to the page's URL upon submit with a g-recaptcha-response POST parameter. -->
<form action="?" method="POST">
    <div id="example3"></div>
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