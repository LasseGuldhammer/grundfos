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

		<h1 class="title">LOGIN</h1>


        <main>
        	<h2 class="input-heading">EMAIL ADDRESS</h2>
        	<input class="input" type="email" placeholder="Email address">
        	<h2 class="input-heading">PASSWORD</h2>
        	<input class="input" type="password" placeholder="Password">
        	<button onclick="location.href = 'empty_dash.php'" class="login">Login</button>
        </main>








    </body>
</html>
