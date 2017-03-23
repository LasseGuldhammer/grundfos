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

        <h1 class="title">pump list</h1>

        <section id="pump-list">

            <h2>maintenance room 1</h2>

            <h3>group 1</h3>

            <section class="pump-group">
                <article class="pump-entry">
                    <img src="img/alpha3.jpg" alt="pump image"><h4>alpha3</h4><img src="img/statuswarning.png" alt="pump status">
                </article>
                <article class="pump-entry">
                    <img src="img/magna3.jpg" alt="pump image"><h4>magna3</h4><img src="img/statuscritical.png" alt="pump status">
                </article>
            </section>


            <h3>group 2</h3>

            <section class="pump-group">
                <article class="pump-entry">
                    <img src="img/alpha2.jpg" alt="pump image"><h4>alpha2</h4><img src="img/statusok.png" alt="pump status">
                </article>
            </section>


            <h2>kitchen</h2>

            <section class="pump-group">
                <article class="pump-entry">
                    <img src="img/ups2.jpg" alt="pump image"><h4>ups20</h4><img src="img/statusok.png" alt="pump status">
                </article>
            </section>


        </section>


        <script type="text/javascript" async>

            $("h2").click(function() {
                if ($(this).next().is(":visible")) {
                    $(this).nextUntil("h2").filter(":visible").slideToggle(300);
                } else {
                    $(this).nextUntil("h2").slideToggle(300);
                }
            });


            $("h3").click(function() {
                if ($(this).is(":last-of-type")) {
                    $(this).nextUntil("h2").slideToggle(300);
                } else {
                    $(this).nextUntil("h3").slideToggle(300);
                }
            });

            $(".pump-entry").click(function(){
                window.location.replace("pump_details.php");
            });

            $(".back-button").click(function() {
                window.location.replace("home.php");
            });




        </script>

    </body>
</html>
