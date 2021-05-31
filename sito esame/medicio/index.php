<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>prenotazioni centro medico</title>

	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="plugins/cubeportfolio/css/cubeportfolio.min.css">
	<link href="css/nivo-lightbox.css" rel="stylesheet" />
	<link href="css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
	<link href="css/owl.carousel.css" rel="stylesheet" media="screen" />
	<link href="css/owl.theme.css" rel="stylesheet" media="screen" />
	<link href="css/animate.css" rel="stylesheet" />
	<link href="css/style.css" rel="stylesheet">

	<link id="bodybg" href="bodybg/bg1.css" rel="stylesheet" type="text/css" />

	<link id="t-colors" href="color/default.css" rel="stylesheet">

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
	<?php
	session_start();
	?>
	<div id="wrapper">
		<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
			<div class="top-area">
				<div class="container">
					<div class="row">
						<div class="col-sm-6 col-md-6">
							<p class="bold text-left">lunedi' - sabato, dalle 8 alle 22 </p>
						</div>
						<div class="col-sm-6 col-md-6">
							<p class="bold text-right">numero +039 008 465 001</p>
						</div>
					</div>
				</div>
			</div>
			<div class="container navigation">
				<div class="navbar-header page-scroll">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
						<i class="fa fa-bars"></i>
					</button>
					<a class="navbar-brand" href="index.html">
						<img src="img/team/logo.png" alt="" width="250" height="60" />
					</a>
				</div>
				<div class="collapse navbar-collapse navbar-right navbar-main-collapse">
					<ul class="nav navbar-nav">
						<li class="active"><a href="#intro">Home</a></li>
						<li><a href="#service">Servizi</a></li>
						<li><a href="#doctor">Dottori</a></li>
						<li><a href="#pricing">Prezzo</a></li>
						<?php
						if (isset($_SESSION["email"])) { ?>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_SESSION["email"] ?> <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="php/dropSession.php">loguot</a></li>
								</ul>
							</li>
						<?php } ?>
					</ul>
				</div>
			</div>

		</nav>

		<section id="intro" class="intro">
			<div class="intro-content">
				<?php if (!isset($_SESSION["email"])) { ?>
					<div class="container">
						<div class="row">
							<div class="col-lg-6">
								<div class="form-wrapper">
									<div class="panel panel-skin">
										<div class="panel-heading">
											<h3 class="panel-title"><span class="fa fa-pencil-square-o"></span> Registrati</h3>
										</div>
										<div class="panel-body">
											<form role="form" class="lead" action="registrazione.php" method="post">
												<div class="row">
													<div class="col-xs-6 col-sm-6 col-md-6">
														<div class="form-group">
															<label>Codice Fiscale</label>
															<input type="text" name="codFiscale" id="codFiscale" class="form-control input-md" required>
														</div>
													</div>
													<div class="col-xs-6 col-sm-6 col-md-6">
														<div class="form-group">
														</div>
													</div>
												</div>

												<div class="row">
													<div class="col-xs-6 col-sm-6 col-md-6">
														<div class="form-group">
															<label>Email</label>
															<input type="email" name="emailR" id="emailR" class="form-control input-md" required>
														</div>
													</div>
													<div class="col-xs-6 col-sm-6 col-md-6">
														<div class="form-group">
															<label>password</label>
															<input type="password" name="passwordR" id="passwordR" class="form-control input-md" required>
														</div>
													</div>
												</div>

												<input type="submit" value="Submit" class="btn btn-skin btn-block btn-lg">

											</form>
										</div>
									</div>
								</div>
							</div>

							<div class="col-lg-6">
								<div class="form-wrapper">
									<div class="panel panel-skin">
										<div class="panel-heading">
											<h3 class="panel-title"><span class="fa fa-pencil-square-o"></span> Login <small>(It's free!)</small></h3>
										</div>
										<div class="panel-body">
											<form role="form" class="lead" action="login.php" method="post">
												<div class="row">
													<div class="col-xs-6 col-sm-6 col-md-6">
														<div class="form-group">
															<label>Email</label>
															<input type="email" name="email" id="email" class="form-control input-md" required>
														</div>
													</div>
													<div class="col-xs-6 col-sm-6 col-md-6">
														<div class="form-group">
															<label>password</label>
															<input type="password" name="password" id="password" class="form-control input-md" required>
														</div>
													</div>
												</div>

												<input type="submit" value="Submit" class="btn btn-skin btn-block btn-lg">

											</form>
										</div>
									</div>

								</div>
							</div>
						</div>
					</div>
			</div>
	</div>
<?php } ?>
</div>

</section>

<section id="boxes" class="home-section paddingtop-80">

	<div class="container">
		<div class="row">
			<div class="col-sm-4 col-md-4">

				<div class="box text-center">

					<i class="fa fa-check fa-3x circled bg-skin"></i>
					<h4 class="h-bold">PRENOTAZIONE VISITA</h4>
					<p>
						prenota la tua visita presso il nostro stabilimento
					</p>
				</div>

			</div>
			<div class="col-sm-4 col-md-4">
				<div class="box text-center">

					<i class="fa fa-list-alt fa-3x circled bg-skin"></i>
					<h4 class="h-bold"> TIPO DI VISITA</h4>
					<p>
						seleziona il tipo di visita medica che vuoi prenotare
					</p>
				</div>
			</div>
			<div class="col-sm-4 col-md-4">
				<div class="box text-center">
					<i class="fa fa-user-md fa-3x circled bg-skin"></i>
					<h4 class="h-bold"> I NOSTRI MEDICI</h4>
					<p>
						seleziona il medico specializzato in base al tuo tipo di visita
					</p>
				</div>
			</div>
		</div>
	</div>
</section>
<br>
<section id="service" class="home-section nopadding paddingtop-60">

	<div class="container">

		<div class="row">
			<div class="col-sm-6 col-md-6">
				<img src="img/dummy/img-9.jpg" class="img-responsive" alt="" />
			</div>
			<div class="col-sm-3 col-md-3">

				<div class="service-box">
					<div class="service-desc">
						<h5 class="h-light">CHECKUP MEDICO </h5>
						<p> checkup medico per controlli basici.</p>
					</div>
				</div>

				<div class="service-box">
					<div class="service-desc">
						<h5 class="h-light">FISIOTERPIA</h5>
						<p> Visita fisioterapeutica con riabilitazione.</p>
					</div>
				</div>

				<div class="service-box">
					<div class="service-desc">
						<h5 class="h-light">CARDIOLOGIA</h5>
						<p> Visita radiologica di ottima qualità.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-3 col-md-3">

				<div class="service-box">
					<div class="service-desc">
						<h5 class="h-light">NEUROLOGIA</h5>
						<p> visita medica neurologica specializzata.</p>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>
<br>

<section id="doctor" class="home-section bg-gray paddingbot-60">
	<div class="container marginbot-50">
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2">
				<div class="section-heading text-center">
					<h2 class="h-bold">I NOSTRI DOTTORI</h2>
				</div>
				<div class="divider-short"></div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-lg-14">

				<div id="filters-container" class="cbp-l-filters-alignLeft">
					<div data-filter=".cardiologist" class="cbp-filter-item">CARDIOLOGI</div>
					<div data-filter=".psychiatrist" class="cbp-filter-item">FISIOTERAPISTA</div>
					<div data-filter=".neurologist" class="cbp-filter-item">NEUROLOGI</div>
				</div>

				<div id="grid-container" class="cbp-l-grid-team">
					<ul>
						<li class="cbp-item psychiatrist">
							<a class="cbp-caption cbp-singlePage">
								<div class="cbp-caption-defaultWrap">
									<img src="img/team/1.jpg" alt="" width="100%">
								</div>

								<div class="cbp-l-caption-alignCenter">
									<div class="cbp-l-caption-body">
										<div class="cbp-l-caption-text">VIEW PROFILE</div>
									</div>
								</div>

							</a>
							<a class="cbp-singlePage cbp-l-grid-team-name">Monica crippa</a>
							<div class="cbp-l-grid-team-position">fisioterapista</div>
						</li>
						<li class="cbp-item cardiologist">
							<a class="cbp-caption cbp-singlePage">

								<img src="img/team/5.jpg" alt="" width="100%">

								<div class="cbp-l-caption-alignCenter">
									<div class="cbp-l-caption-body">
										<div class="cbp-l-caption-text">VIEW PROFILE</div>
									</div>
								</div>
							</a>
							<a class="cbp-singlePage cbp-l-grid-team-name">Fabio Mercandalli</a>
							<div class="cbp-l-grid-team-position">cardiologo</div>
						</li>
						<li class="cbp-item cardiologist">
							<a class="cbp-caption cbp-singlePage">
								<div class="cbp-caption-defaultWrap">
									<img src="img/team/3.jpg" alt="" width="100%">
								</div>

								<div class="cbp-l-caption-alignCenter">
									<div class="cbp-l-caption-body">
										<div class="cbp-l-caption-text">VIEW PROFILE</div>
									</div>
								</div>

							</a>
							<a class="cbp-singlePage cbp-l-grid-team-name">Matteo Scotti</a>
							<div class="cbp-l-grid-team-position">cardiologo</div>
						</li>
						<li class="cbp-item neurologist">
							<a class="cbp-caption cbp-singlePage">
								<div class="cbp-caption-defaultWrap">
									<img src="img/team/4.jpg" alt="" width="100%">
								</div>
								<div class="cbp-l-caption-alignCenter">
									<div class="cbp-l-caption-body">
										<div class="cbp-l-caption-text">VIEW PROFILE</div>
									</div>
								</div>
							</a>
							<a class="cbp-singlePage cbp-l-grid-team-name">Giacomo Quadri</a>
							<div class="cbp-l-grid-team-position">neurologo</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>

<br>


<br>

<section id="pricing" class="home-section bg-gray paddingbot-60">
	<div class="container marginbot-50">
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2">
				<div class="section-heading text-center">
					<h2 class="h-bold">PACCHETTI VISITE</h2>
				</div>
				<div class="divider-short"></div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-sm-4 pricing-box">
				<div class="pricing-content general">
					<h2>FISIOTERAPIA</h2>
					<h3>45€</h3>
					<ul>
						<li>fisioterapia <i class="fa fa-check icon-success"></i></li>
						<li>referto medico<i class="fa fa-check icon-success"></i></li>
					</ul>

				</div>
			</div>

			<div class="col-sm-4 pricing-box featured-price">
				<div class="pricing-content featured">
					<h2>NEUROLOGIA</h2>
					<h3>90€</h3>
					<ul>
						<li>visita neurologica <i class="fa fa-check icon-success"></i></li>
						<li>referto medico<i class="fa fa-check icon-success"></i></li>
					</ul>

				</div>
			</div>

			<div class="col-sm-4 pricing-box">
				<div class="pricing-content general last">
					<h2>Cardiologia</h2>
					<h3>70€</h3>
					<ul>
						<li>visita cardiologica<i class="fa fa-check icon-success"></i></li>
						<li>referto medico <i class="fa fa-check icon-success"></i></li>
					</ul>

				</div>
			</div>

		</div>

	</div>
	<br>
	<br>
	<?php
	if (isset($_SESSION["email"])) { ?>
		<div class="row">
			<div class="col-lg-12">
				<div class="form-wrapper">
					<div class="panel panel-skin">
						<div class="panel-heading">
							<h3 class="panel-title"><span class="fa fa-pencil-square-o"></span> prenotazione</h3>
						</div>
						<div class="panel-body">
							<form role="form" class="lead" action="prenotazione.php" method="post">
								<div class="row">
									<div class="col-xs-6 col-sm-6 col-md-6">
										<div class="form-group">
											<label>Codice Fiscale</label>
											<input type="text" name="codFiscale" id="codFiscale" class="form-control input-md" required>
										</div>
									</div>
									<div class="col-xs-6 col-sm-6 col-md-6">
										<div class="form-group">
											<label>data</label>
											<input type="datetime-local" name="date" id="date" class="form-control input-md" required>
										</div>
									</div>

									<div class="row">
										<div class="col-xs-6 col-sm-6 col-md-6">
											<div class="form-group">
												<label>genere visita medica</label>
												<select class="form-select" aria-label="Default select example" name="genere" id="genere" onchange="price(event)" >
													<option value="neurologica">neurologica</option>
													<option value="cardiologica">cardiologica</option>
													<option value="fisioterapistica">fisioterapistica</option>
												</select><br>
											</div>
										</div>
										<div class="col-xs-6 col-sm-6 col-md-6">
											<div class="form-group">
												<label>prezzo</label>
												<input type="text" name="prezzo" id="prezzo" class="form-control input-md" readonly>
											</div>
										</div>
									</div>

									<input type="submit" value="Submit" class="btn btn-skin btn-block btn-lg">

							</form>
						</div>
					</div>
				</div>
			</div>

		</div>
	<?php } ?>

</section>


<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/jquery.scrollTo.js"></script>
<script src="js/jquery.appear.js"></script>
<script src="js/stellar.js"></script>
<script src="plugins/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/nivo-lightbox.min.js"></script>
<script src="js/custom.js"></script>
<script src="js/prenotazione.js"></script>

</body>

</html>