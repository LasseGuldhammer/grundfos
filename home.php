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

        <img id="status-indicator" onclick="location.href = 'pump_details.php'" src="img/statuscritical.png" alt="status indicator"/></a>
        <h2 id="status-text">2 critical issues</h2>

        <aside id="dashboard-buttons">
            <a href="register.php"></a>
            <a href="list.php"></a>
        </aside>

        <article id="button-descriptions">
            <h3>add pump</h3>
            <h3>view list</h3>
        </article>

        <script>

            function changeStatus (status) {
                var indicator = $("#status-indicator");
                var text = $("#status-text");
                indicator.fadeOut(200);
                text.fadeOut(200);
                setTimeout(function(){indicator.attr("src","img/status"+status+".png")},200);
                setTimeout(function(){
                    if (status === "ok") {
                        $("#status-text").html("status ok");
                    } else if (status === "warning") {
                        $("#status-text").html("3 system issues");
                    } else {
                        $("#status-text").html("2 critical issues");
                    };
                },300);
                indicator.fadeIn();
                text.fadeIn();
            };

            var clicks = 0;

            $("#refresh-button").click(function(){
                clicks++;
                clicks > 3 ? clicks=1 : null;
                var random = Math.random();
                if (clicks === 1) {
                    changeStatus("ok");
                } else if (clicks === 2) {
                    changeStatus("warning");
                } else {
                    changeStatus("critical");
                };
            });

        </script>


    </body>
</html>
