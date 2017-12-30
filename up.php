<!DOCTYPE html>
<html lang="pl-PL">
	<head>
		<title><?php echo $title; ?></title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Ubuntu+Condensed" rel="stylesheet">
		<link rel="stylesheet" href="style.css"/>
		<link rel="icon" type="image/png" href="favicon.ico">
	</head>
	<body>
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#showNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>                        
				  </button>
				  <a class="navbar-brand" href="index.php">X KKK</a>
				</div>
				<div class="collapse navbar-collapse navbar-right" id="showNavbar">
				  <ul class="nav navbar-nav">
					<li class="dropdown">
					  <a class="dropdown-toggle" data-toggle="dropdown">KONFERENCJA<span class="caret"></span></a>
					  <ul class="dropdown-menu">
						<li><a href="program.php#program">PROGRAM</a></li>
						<li><a href="organizatorzy.php#komitet-organizacyjny">KOMITET ORGANIZACYJNY</a></li>
						<li><a href="organizatorzy.php#komitet-naukowy">KOMITET NAUKOWY</a></li>
						<li><a href="index.php#panele">PANELE</a></li>
						<li><a href="index.php#goscie">GOŚCIE SPECJALNI</a></li>
						<li><a href="index.php#warsztaty">WARSZTATY</a></li>
					  </ul>
					</li>
					<li><a href="aktualnosci.php#aktualnosci">AKTUALNOŚCI</a></li>
					<li><a href="rejestracja.php#rejestracja">REJESTRACJA</a></li>
					<li><a href="faq.php#faq">FAQ</a></li>
					<li><a href="galeria.php#galeria">GALERIA</a></li>	
				  </ul>
				</div>
			</div>
		</nav>
		
		
		<div class="jumbotron" id="top">
			<div class="row">
				<div class="col-xs-2 text-right">
					<span class="bigx">X</span>
				</div>
				<div class="col-xs-5">
					<a href="index.php"><h1>Krakowska<br>Konferencja<br>Kognitywistyczna</h1></a>
				</div>
			</div>
			<div class="row subtitle">
				<div class="col-xs-7">
					<h2>NOWE&nbsp;TECHNOLOGIE</h2>
					<p>DD.MM.2018</p>
				</div>
			</div>
		</div>