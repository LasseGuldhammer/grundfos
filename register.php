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

		<h1 class="title">REGISTER PUMP</h1>
        <main>
        	<h2 class="input-heading">PUMP TYPE</h2>
        	<input class="input" type="text" placeholder="Alpha3">
        	<h2 class="input-heading">LOCATION</h2>
        	<input class="input" type="text" placeholder="Floor 1, room 4">
        	<div class="wrapper">
				<button class="connect-pump">Connect Pump</button>
				<img class="wifi-status" src="img/orangewifi.png" alt="connection status">
        	</div>
        	<button onclick="location.href = 'home.php'" class="login">REGISTER</button>
        </main>
	</body>

    <script type="text/javascript" async>

        var connected = false;


        $(".back-button").click(function() {
            window.location.replace("home.php");
        });


        $("button.connect-pump").click(function(){
            var connection = Math.random();
            var image = $(this).next();
            function changePic (color) {
                image.fadeOut();
                setTimeout(function(){image.attr("src","img/"+color+"wifi.png")},300);
                image.fadeIn();
            };
            if (connection < 0.7 && !connected) {
                changePic("red");
                $(".connect-pump").css("background-color","#dd1f2b");
                $(".connect-pump").html("try again");


            }
            else if (!connected) {
                changePic("green");
                connected = true;
                $(".connect-pump").css("background-color","#8FCE35");
                $(".connect-pump").html("pump connected");
            };
        });

    </script>

</html>
