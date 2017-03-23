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

		<h1 class="title">PUMP DETAILS</h1>
        <main id="pump-details">
			<section class="wrapper">
				<img class="pump-image" src="img/magna3.jpg" alt="magna pump">
				<h3 class="pump-name">Magna3</h3>
				<img class="status-image" src="img/statuscritical.png" alt="critical error">
			</section>
       		<h2 class="critical-error">Error Report<span>3</span></h2>
       		<h2>Troubleshooting</h2>
       		<ul>
       			<li>Check the water intake regulator</li>
       			<li>Reset the RCU unit using reset button</li>
       			<li>Turn off the pump's power supply</li>
       		</ul>
       		<h2>Manual & Documentation</h2>
       		<h2>Instruction Videos</h2>
            <h2 id="service">request service</h2>
       		<h2 class="delete">Delete Pump</h2>
        </main>
	</body>

    <script type="text/javascript">

    $(".back-button").click(function() {
        window.location.replace("list.php");
    });

    </script>
</html>
