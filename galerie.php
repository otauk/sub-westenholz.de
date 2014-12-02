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
			<nav class="navbar navbar-default border-flat margin-0 text-uppercase ls-1 fs-125" role="navigation">
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
			        <li class=""><a href="#">Fakten</a></li>
			        <li class="dropdown">
			          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Belegung <span class="caret"></span></a>
			          <ul class="dropdown-menu" role="menu">
			            <li><a href="#">Sporthalle</a></li>
			            <li><a href="#">Forum</a></li>
			            <!--<li class="divider"></li>-->
			          </ul>
			        </li>
			        <li class="active"><a href="#">Galerie</a></li>
			        <li class=""><a href="#">Kontakt</a></li>
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
							<div class="headline headline-h1 color-base">galerie</div>
						</div>
					</div>
				</div>
				<div class="container">
					<div class="row">
							<a href="img/b1.jpg" data-lightbox="gallery" data-title="Image 1">
								<img src="img/b1.jpg" class="thumbnail img-responsive" />
							</a>

							<a href="img/b2.jpg" data-lightbox="gallery" data-title="Image 2">
								<img src="img/b2.jpg" class="thumbnail img-responsive" />
							</a>

							<a href="img/b3.jpg" data-lightbox="gallery" data-title="Image 3">
								<img src="img/b3.jpg" class="thumbnail img-responsive" />
							</a>

							<a href="img/b3.jpg" data-lightbox="gallery" data-title="Image 4">
								<img src="img/b4.jpg" class="thumbnail img-responsive" />
							</a>
							<a href="img/b1.jpg" data-lightbox="gallery" data-title="Image 1">
								<img src="img/b1.jpg" class="thumbnail img-responsive" />
							</a>

							<a href="img/b2.jpg" data-lightbox="gallery" data-title="Image 2">
								<img src="img/b2.jpg" class="thumbnail img-responsive" />
							</a>

							<a href="img/b3.jpg" data-lightbox="gallery" data-title="Image 3">
								<img src="img/b3.jpg" class="thumbnail img-responsive" />
							</a>

							<a href="img/b3.jpg" data-lightbox="gallery" data-title="Image 4">
								<img src="img/b4.jpg" class="thumbnail img-responsive" />
							</a>
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
  </body>
</html>