<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>sub-westenholz // Redesign</title>
    <!-- CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/grid.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/fullcalendar.css" rel="stylesheet" />
    <link href="css/bootstrap-fullcalendar.css" rel="stylesheet" />
     <link href="css/lightbox.css" rel="stylesheet" />
    <!-- Font -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<?php
    	if ($thisPage=="fakten") {$current = 'fakten';}
    	elseif ($thisPage=="belegung") {$current = 'belegung';}
    	elseif ($thisPage=="sporthalle") {$current = 'belegung';}
    	elseif ($thisPage=="musikraum") {$current = 'belegung';}
    	elseif ($thisPage=="gymnastikraum") {$current = 'belegung';}
    	elseif ($thisPage=="galerie") {$current = 'galerie';}
    	elseif ($thisPage=="kontakt") {$current = 'kontakt';}
    	/* ...sonst... */
	    else {$current = 'none';}
	?>
	<style type="text/css">.<?php echo $current; ?>
		{background-color:#7194B3;color:#fff; display: block;}
	</style>
  </head>

    <body>
	 <a id="top-link"></a>
	 <a href="#top-link" class="top_btn"></a>
<!--
++++++++++++++++++++
BEGIN PAGE
++++++++++++++++++++
-->
  	<div class="container-fluid">
<!--
++++++++++++++++++++
NAVIGATION
++++++++++++++++++++
-->
		<div class="row">
			<nav class="navbar navbar-default border-flat margin-0 text-uppercase ls-1 fs-115" role="navigation">
			  <div class="container-fluid">
			    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			      <a class="navbar-brand padding-0" href="index.php" >
				      <img src="img/logo_sub.png" class="hpx50" />
			      </a>
			    </div>
			    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			      <ul class="nav navbar-nav navbar-right padding-lr-30">
			        <li class="fakten"><a href="fakten.php">Fakten</a></li>
			        <li class="belegung"><a href="index.php#belegung">Belegung</a></li>
			       	<li class="galerie"><a href="galerie.php">Galerie</a></li>
			        <li class="kontakt"><a href="kontakt.php">Kontakt</a></li>
			      </ul>
			    </div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>
		</div>