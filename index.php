<?php include ("header.php");?>
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
			      <a class="navbar-brand" href="#">Wappen</a>
			    </div>
			    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			      <ul class="nav navbar-nav navbar-right padding-lr-30">
			        <li class="active padding-lr-15 "><a href="#">Fakten</a></li>
			        <li class="dropdown">
			          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Belegung <span class="caret"></span></a>
			          <ul class="dropdown-menu" role="menu">
			            <li><a href="#">Action</a></li>
			            <li><a href="#">Another action</a></li>
			            <li><a href="#">Something else here</a></li>
			            <li class="divider"></li>
			            <li><a href="#">Separated link</a></li>
			          </ul>
			        </li>
			        <li class="padding-lr-15"><a href="galerie.html">Galerie</a></li>
			        <li class="padding-lr-15"><a href="#">Kontakt</a></li>
			      </ul>
			    </div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>
		</div>
<!--
++++++++++++++++++++
HEADER
++++++++++++++++++++
-->
		<div class="row">
			<div class="col-xs-12 padding-0">
				<img src="img/SuB_01.jpg"  class="img-responsive  header-size" alt="Luftbildaufnahme Westenholz mit SuB"/>
			</div>
		</div>
<!--
++++++++++++++++++++
TAGLINE
++++++++++++++++++++
-->
		<div class="row">
			<div class="col-lg-12 color-pastel-dark-background z-50">
				<div class="container">
					<div class="row">
						>> Das im Jahre 2000 eröffnete Sport- und Begegnungszentrum Westenholz besteht aus
	einer Dreifachturnhalle und einer Begegnungsstätte.
					</div>
				</div>
			</div>
		</div>
<!--
++++++++++++++++++++
FAKTEN
++++++++++++++++++++
-->
		<div class="row">
			<div class="col-lg-12 z-50 color-base">
				<div class="container">
					<div class="row">
						<div class="pos-center w75">
							<div class="headline-dashed z-0"></div>
						</div>
						<div class="col-sm-4 col-sm-offset-4 col-xs-6 col-xs-offset-3 z-50 ">
							<div class="headline headline-h1 color-base">fakten</div>
						</div>
					</div>
				</div>
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-4">
							<div class="color-light-background-box h15">
								<div class="dashed-line-bottom-dark color-bright headline headline-h2 padding-lr-0">Chronik</div>
								<div class="padding-15 fs-115 text-center">Eine &uuml;bersicht von der Planung bis hin zur Eröffnung</div>
								<div class="text-center padding-30">
									<a class="readon">weiterlesen</a>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="color-light-background-box h15">
								<div class="dashed-line-bottom-dark color-bright headline headline-h2 padding-lr-0">Daten</div>
								<div class="padding-15 fs-115 text-center">Einige Daten rund um das Sport- und Begegnungszentrum</div>
								<div class="text-center padding-30">
									<a class="readon">weiterlesen</a>
								</div>
							</div>
						</div>
						<div class="col-lg-4 ">
							<div class="color-light-background-box h15">
								<div class="dashed-line-bottom-dark color-bright headline headline-h2 padding-lr-0">Pressearchiv</div>
								<div class="padding-15 fs-115 text-center">Eine Sammlung einiger Presseberichte rund um das SuB</div>
								<div class="text-center padding-30">
									<a class="readon">weiterlesen</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
<!--
++++++++++++++++++++
TERMINE
++++++++++++++++++++
-->
		<div class="row">
			<div class="col-lg-12 color-pastel-dark-background">
				<div class="container">
					<div class="row">
						<div class="pos-center w75">
							<div class="headline-dashed z-0"></div>
						</div>
						<div class="col-sm-4 col-sm-offset-4 col-xs-6 col-xs-offset-3 z-50">
							<div class="headline headline-h1 color-pastel-dark-background">termine</div>
						</div>
					</div>
				</div>
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-6">
							 <div class="headline headline-h2 text-center color-bright">Sporthalle</div>
							 <div class="padding-15  color-pastel-light-background h25 w-50">
								<div id='calendar_sporthalle'></div>
							 </div>
						</div>
						<div class="col-lg-6">
							<div class="headline headline-h2 text-center color-bright">Forum</div>
							<div class="padding-15  color-pastel-light-background h25">
								<div id='calendar_forum'></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
<!--
++++++++++++++++++++
KONTAKT
++++++++++++++++++++
-->
		<div class="row">
			<div class="col-lg-12 ">
				<div class="container">
					<div class="row">
						<div class="pos-center w75">
							<div class="headline-dashed z-0"></div>
						</div>
						<div class="col-sm-4 col-sm-offset-4 col-xs-6 col-xs-offset-3 z-50">
							<div class="headline headline-h1 color-base">Kontakt</div>
						</div>
					</div>
				</div>
				<div class="container-fluid">
						<div class="row">
							<div class="col-lg-4">
								<div class="padding-lr-15  color-light-background-box h20">
									<div class="headline-kontakt fs-115 padding-tb-15">Ansprechpartner f&uuml;r die Terminplanung Sporthalle und Forum</div>
									<div class="lh-175">
										<div class="padding-tb-15">
											Stadt Delbrück<br/>
											Schul- und Kulturamt<br/>
											Markstr. 6<br/>
											33129 Delbrück<br/>
										</div>
										<div class="padding-tb-15">
											Tel.: 0 52 50 . 99 62 11<br/>
											Fax: 0 52 50 . 99 63 02
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4">
							<div class="padding-lr-15  color-light-background-box h20">
								<div class="headline-kontakt fs-115 padding-tb-15">Ansprechpartner f&uuml;r allgemeine Informationen rund ums SuB</div>
								<div class="lh-175">
									<div class="padding-tb-15">
										Heinz Engelmeier<br/>
										Anton-Pieper-Str. 14<br/>
										33129 Westenholz<br/>
									</div>
									<div class="padding-tb-15">
										Tel.: 0 29 44 . 97 35 30<br/>
										Fax: 0 29 44 . 97 35 38<br/>
										H.Engelmeier@SuB-Westenholz.de
									</div>
								</div>
							</div>
							</div>
							<div class="col-lg-4">
							<div class="padding-lr-15  color-light-background-box h20">
								<div class="headline-kontakt fs-115 padding-tb-15">Hausmeister f&uuml;r das Schulzentrum Westenholz und das SuB</div>
								<div class="lh-175">
									<div class="padding-tb-15">
										Detlef Kemper<br/>
										Anton-Pieper-Str. 14<br/>
										33129 Westenholz<br/>
									</div>
									<div class="padding-tb-15">
										Tel.: 0 29 44 . 97 35 23<br/>
										Fax: 0 29 44 . 97 35 38
									</div>
								</div>
							</div>
							</div>
						</div>
					</div>
			</div>
		</div>
<?php include ("footer.php");?>
<!--
++++++++++++++++++++
END PAGE
++++++++++++++++++++
-->
	</div> <!-- !end container_fluid -->
<?php include("scripts.php");?>


<script type='text/javascript'>
/*
*	++++++++++++++++++++
*	calender Sporthalle
*	++++++++++++++++++++
*/
$(document).ready(function() {

	$('.navbar-nav').on('click', 'li', function(){
    $('.nav li').removeClass('active');
    $(this).addClass('active');
});

    $('#calendar_sporthalle').fullCalendar({
        events: 'https://www.google.com/calendar/feeds/vp8tq6uv960suir03acdrq6vf8%40group.calendar.google.com/public/basic',
		aspectRatio:1.25
    });
});
/*
*	++++++++++++++++++++
*	calender Forum
*	++++++++++++++++++++
*/
$(document).ready(function() {
    $('#calendar_forum').fullCalendar({
        events: 'https://www.google.com/calendar/feeds/j6g3kemkccq9kh78icrcfrpf5k%40group.calendar.google.com/public/basic',
        aspectRatio:1.25
    });
});
</script>
  </body>
</html>