<!doctype html>
<html lang="en-UK">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>

          <?php
              include "includes/header.php"
          ?>

        <h1 class="title">HOME</h1>

        <section id="refresh-logout-bar">
                <img id="refresh-button" src="img/refresh.png" />
                <img src="img/logout.png" onclick="location.href = 'index.php'" />
        </section>


        <a href="register.php"><img id="status-indicator" src="img/addpump.png" alt="status indicator"/></a>
        <h2 id="status-text">add pump</h2>

    </body>
</html>
