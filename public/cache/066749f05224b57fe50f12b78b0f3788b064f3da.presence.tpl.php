<?php /*%%SmartyHeaderCode:1042555c0ae69adcc98-32301419%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '066749f05224b57fe50f12b78b0f3788b064f3da' => 
    array (
      0 => 'F:\\WF3\\htdocs\\ENV\\app\\views\\presence.tpl',
      1 => 1438359997,
      2 => 'file',
    ),
    '7032430ed128960d84314edb07f19762978a5aa0' => 
    array (
      0 => 'F:\\WF3\\htdocs\\ENV\\app\\views\\partials\\header.tpl',
      1 => 1438537218,
      2 => 'file',
    ),
    '2efbcdeba499ad1a4bffab7336346ed9ff7c36d6' => 
    array (
      0 => 'F:\\WF3\\htdocs\\ENV\\app\\views\\partials\\navbar.tpl',
      1 => 1438691010,
      2 => 'file',
    ),
    '09bfaf4fa1ca5eacd82536b8cad3331186eb760d' => 
    array (
      0 => 'F:\\WF3\\htdocs\\ENV\\app\\views\\partials\\footer.tpl',
      1 => 1438516165,
      2 => 'file',
    ),
    '1327e99fc92222e1b89ab90dfb127e895abbf0c9' => 
    array (
      0 => 'F:\\WF3\\htdocs\\ENV\\app\\views\\partials\\debug.tpl',
      1 => 1438690101,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1042555c0ae69adcc98-32301419',
  'cache_lifetime' => 3600,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55c0aec3d7a1e5_79117068',
  'variables' => 
  array (
    'title' => 0,
    'description' => 0,
    'students' => 0,
    'student' => 0,
    'url_trombino' => 0,
  ),
  'has_nocache_code' => false,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c0aec3d7a1e5_79117068')) {function content_55c0aec3d7a1e5_79117068($_smarty_tpl) {?><!DOCTYPE html>
<html lang="fr">
<head>
	<title>Webforce 3 - Feuille de présence WebForce 3</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Feuille de présence pour Webforce3">
	<meta name="author" content="Eric Madjarian, Fred Legembre, Denis Nerborac">

	<link rel="stylesheet" href="http://localhost/public/statics/css/main.css"> 
	<link rel="stylesheet" href="http://localhost/public/statics/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="http://localhost/public/statics/css/bootstrap-checkbox.css">
	<link rel="stylesheet" href="http://localhost/public/statics/css/styles.css">
	<link rel="stylesheet" href="http://localhost/public/statics/css/pwf3.css">
	<link rel="stylesheet" href="http://localhost/public/statics/css/font-awesome.3.0.2.css">
	<link rel="stylesheet" href="http://localhost/public/statics/css/font-awesome-ie7.3.0.2.css">
	<link rel="icon" type="image/png" href="http://localhost/public/statics/img/favicon.png" />
</head>

<body>

		<div class="blog-masthead">
		<div class="container" id="logo">

			<nav class="nav navbar-nav blog-nav">

				<a href="http://localhost/fr/">
				<h1 class="logowf3"><img src="http://localhost/public/statics/img/template_WB3_header.png" alt="WEBFORCE 3" width="70%"></h1>
				</a>

			</nav>
			<nav class="nav navbar-nav navbar-right blog-nav">

				
					<a href="http://localhost/fr/admin">
						<span class="se-logger" id="se-delogger">Admin</span>
					</a>

																											<a href="http://localhost/fr/trombino">
							<span class="se-logger" id="se-delogger">Trombino</span>
						</a>
					
					Bonjour fred
					<div id="date">Le 04/08/2015
						<i class="glyphicon glyphicon-time"="true"></i>
					</div>
					<a href="http://localhost/fr/logout">
						<span class="se-logger" id="se-delogger"> Se déconnecter</span>
						<i class="glyphicon glyphicon-log-out aria-hidden"="true"></i>
					</a>
				
			</nav>
		</div>
	</div>


	<div class="container blog-content">


	<div class="blog-header">
	  <!--<h1 class="blog-title">Feuille de présence WebForce 3</h1>-->
	  <p class="lead blog-description" id="description"></p>
	</div>

	<div class="row">
		<section class="article-content clearfix">

			<div id="nteam">
				<div id="presence-container" class="container">

										
					<div class="presence-student">
						<div id="presence-1" data-id="1" class="presence">
							<div class="details">
								<img class="img-thumbnail" alt="avatar" src="http://localhost/public/statics/img/trombino/10/fred.jpg" height="170px">
								<a href="#"><h2 class="title">Frédéric</h2><h2 class="title">Legembre</h2></a>
							</div>
							<div class="controls">

								<div class="row" id="checkbox-align">

									<div class="checkbox-container" data-toggle="tooltip" data-placement="bottom" title="Petit Retard">
										<input type="checkbox" name="r1" class="r1 checkbox-control"  data-checked="warning"/>
										<span class="control">R1</span>
									</div>

									<div class="checkbox-container" data-toggle="tooltip" data-placement="bottom" title="Grand Retard">
										<input type="checkbox" name="r2" class="r2 checkbox-control"  data-checked="danger"/>
										<span class="control">R2</span>
									</div>

									<div class="checkbox-container" data-toggle="tooltip" data-placement="bottom" title="Petit Départ">
										<input type="checkbox" name="d1" class="d1 checkbox-control"  data-checked="warning"/>
										<span class="control">D1</span>
									</div>

									<div class="checkbox-container" data-toggle="tooltip" data-placement="bottom" title="Grand Départ">
										<input type="checkbox" name="d2" class="d2 checkbox-control"  data-checked="danger"/>
										<span class="control">D2</span>
									</div>

									<div class="checkbox-container" data-toggle="tooltip" data-placement="bottom" title="Absence">
										<input type="checkbox" name="absent" class="absent checkbox-control"  data-checked="danger"/>
										<span class="control">Ab</span>
									</div>

								</div>
							</div>
						</div>
					</div>
					
					<div class="presence-student">
						<div id="presence-2" data-id="2" class="presence">
							<div class="details">
								<img class="img-thumbnail" alt="avatar" src="http://localhost/public/statics/img/trombino/avatar-1.png" height="170px">
								<a href="#"><h2 class="title">Cyril</h2><h2 class="title">Salson</h2></a>
							</div>
							<div class="controls">

								<div class="row" id="checkbox-align">

									<div class="checkbox-container" data-toggle="tooltip" data-placement="bottom" title="Petit Retard">
										<input type="checkbox" name="r1" class="r1 checkbox-control"  data-checked="warning"/>
										<span class="control">R1</span>
									</div>

									<div class="checkbox-container" data-toggle="tooltip" data-placement="bottom" title="Grand Retard">
										<input type="checkbox" name="r2" class="r2 checkbox-control"  data-checked="danger"/>
										<span class="control">R2</span>
									</div>

									<div class="checkbox-container" data-toggle="tooltip" data-placement="bottom" title="Petit Départ">
										<input type="checkbox" name="d1" class="d1 checkbox-control"  data-checked="warning"/>
										<span class="control">D1</span>
									</div>

									<div class="checkbox-container" data-toggle="tooltip" data-placement="bottom" title="Grand Départ">
										<input type="checkbox" name="d2" class="d2 checkbox-control"  data-checked="danger"/>
										<span class="control">D2</span>
									</div>

									<div class="checkbox-container" data-toggle="tooltip" data-placement="bottom" title="Absence">
										<input type="checkbox" name="absent" class="absent checkbox-control"  data-checked="danger"/>
										<span class="control">Ab</span>
									</div>

								</div>
							</div>
						</div>
					</div>
					
					<div class="presence-student">
						<div id="presence-3" data-id="3" class="presence">
							<div class="details">
								<img class="img-thumbnail" alt="avatar" src="http://localhost/public/statics/img/trombino/avatar-1.png" height="170px">
								<a href="#"><h2 class="title">Ludovic</h2><h2 class="title">Chounavelle</h2></a>
							</div>
							<div class="controls">

								<div class="row" id="checkbox-align">

									<div class="checkbox-container" data-toggle="tooltip" data-placement="bottom" title="Petit Retard">
										<input type="checkbox" name="r1" class="r1 checkbox-control"  data-checked="warning"/>
										<span class="control">R1</span>
									</div>

									<div class="checkbox-container" data-toggle="tooltip" data-placement="bottom" title="Grand Retard">
										<input type="checkbox" name="r2" class="r2 checkbox-control"  data-checked="danger"/>
										<span class="control">R2</span>
									</div>

									<div class="checkbox-container" data-toggle="tooltip" data-placement="bottom" title="Petit Départ">
										<input type="checkbox" name="d1" class="d1 checkbox-control"  data-checked="warning"/>
										<span class="control">D1</span>
									</div>

									<div class="checkbox-container" data-toggle="tooltip" data-placement="bottom" title="Grand Départ">
										<input type="checkbox" name="d2" class="d2 checkbox-control"  data-checked="danger"/>
										<span class="control">D2</span>
									</div>

									<div class="checkbox-container" data-toggle="tooltip" data-placement="bottom" title="Absence">
										<input type="checkbox" name="absent" class="absent checkbox-control"  data-checked="danger"/>
										<span class="control">Ab</span>
									</div>

								</div>
							</div>
						</div>
					</div>
					
					<div class="presence-student">
						<div id="presence-4" data-id="4" class="presence">
							<div class="details">
								<img class="img-thumbnail" alt="avatar" src="http://localhost/public/statics/img/trombino/10/eric.jpg" height="170px">
								<a href="#"><h2 class="title">Eric</h2><h2 class="title">Madjarian</h2></a>
							</div>
							<div class="controls">

								<div class="row" id="checkbox-align">

									<div class="checkbox-container" data-toggle="tooltip" data-placement="bottom" title="Petit Retard">
										<input type="checkbox" name="r1" class="r1 checkbox-control"  data-checked="warning"/>
										<span class="control">R1</span>
									</div>

									<div class="checkbox-container" data-toggle="tooltip" data-placement="bottom" title="Grand Retard">
										<input type="checkbox" name="r2" class="r2 checkbox-control"  data-checked="danger"/>
										<span class="control">R2</span>
									</div>

									<div class="checkbox-container" data-toggle="tooltip" data-placement="bottom" title="Petit Départ">
										<input type="checkbox" name="d1" class="d1 checkbox-control"  data-checked="warning"/>
										<span class="control">D1</span>
									</div>

									<div class="checkbox-container" data-toggle="tooltip" data-placement="bottom" title="Grand Départ">
										<input type="checkbox" name="d2" class="d2 checkbox-control"  data-checked="danger"/>
										<span class="control">D2</span>
									</div>

									<div class="checkbox-container" data-toggle="tooltip" data-placement="bottom" title="Absence">
										<input type="checkbox" name="absent" class="absent checkbox-control"  data-checked="danger"/>
										<span class="control">Ab</span>
									</div>

								</div>
							</div>
						</div>
					</div>
					
					<div class="presence-student">
						<div id="presence-5" data-id="5" class="presence">
							<div class="details">
								<img class="img-thumbnail" alt="avatar" src="http://localhost/public/statics/img/trombino/10/man.jpg" height="170px">
								<a href="#"><h2 class="title">Man</h2><h2 class="title">Bahn Duc</h2></a>
							</div>
							<div class="controls">

								<div class="row" id="checkbox-align">

									<div class="checkbox-container" data-toggle="tooltip" data-placement="bottom" title="Petit Retard">
										<input type="checkbox" name="r1" class="r1 checkbox-control"  data-checked="warning"/>
										<span class="control">R1</span>
									</div>

									<div class="checkbox-container" data-toggle="tooltip" data-placement="bottom" title="Grand Retard">
										<input type="checkbox" name="r2" class="r2 checkbox-control"  data-checked="danger"/>
										<span class="control">R2</span>
									</div>

									<div class="checkbox-container" data-toggle="tooltip" data-placement="bottom" title="Petit Départ">
										<input type="checkbox" name="d1" class="d1 checkbox-control"  data-checked="warning"/>
										<span class="control">D1</span>
									</div>

									<div class="checkbox-container" data-toggle="tooltip" data-placement="bottom" title="Grand Départ">
										<input type="checkbox" name="d2" class="d2 checkbox-control"  data-checked="danger"/>
										<span class="control">D2</span>
									</div>

									<div class="checkbox-container" data-toggle="tooltip" data-placement="bottom" title="Absence">
										<input type="checkbox" name="absent" class="absent checkbox-control"  data-checked="danger"/>
										<span class="control">Ab</span>
									</div>

								</div>
							</div>
						</div>
					</div>
					
					<div class="presence-student">
						<div id="presence-6" data-id="6" class="presence">
							<div class="details">
								<img class="img-thumbnail" alt="avatar" src="http://localhost/public/statics/img/trombino/avatar-1.png" height="170px">
								<a href="#"><h2 class="title">Franjo</h2><h2 class="title">Mihaljcuk</h2></a>
							</div>
							<div class="controls">

								<div class="row" id="checkbox-align">

									<div class="checkbox-container" data-toggle="tooltip" data-placement="bottom" title="Petit Retard">
										<input type="checkbox" name="r1" class="r1 checkbox-control"  data-checked="warning"/>
										<span class="control">R1</span>
									</div>

									<div class="checkbox-container" data-toggle="tooltip" data-placement="bottom" title="Grand Retard">
										<input type="checkbox" name="r2" class="r2 checkbox-control"  data-checked="danger"/>
										<span class="control">R2</span>
									</div>

									<div class="checkbox-container" data-toggle="tooltip" data-placement="bottom" title="Petit Départ">
										<input type="checkbox" name="d1" class="d1 checkbox-control"  data-checked="warning"/>
										<span class="control">D1</span>
									</div>

									<div class="checkbox-container" data-toggle="tooltip" data-placement="bottom" title="Grand Départ">
										<input type="checkbox" name="d2" class="d2 checkbox-control"  data-checked="danger"/>
										<span class="control">D2</span>
									</div>

									<div class="checkbox-container" data-toggle="tooltip" data-placement="bottom" title="Absence">
										<input type="checkbox" name="absent" class="absent checkbox-control"  data-checked="danger"/>
										<span class="control">Ab</span>
									</div>

								</div>
							</div>
						</div>
					</div>
					
					<div class="presence-student">
						<div id="presence-7" data-id="7" class="presence">
							<div class="details">
								<img class="img-thumbnail" alt="avatar" src="http://localhost/public/statics/img/trombino/avatar-0.png" height="170px">
								<a href="#"><h2 class="title">Clarisse</h2><h2 class="title">Carzon</h2></a>
							</div>
							<div class="controls">

								<div class="row" id="checkbox-align">

									<div class="checkbox-container" data-toggle="tooltip" data-placement="bottom" title="Petit Retard">
										<input type="checkbox" name="r1" class="r1 checkbox-control"  data-checked="warning"/>
										<span class="control">R1</span>
									</div>

									<div class="checkbox-container" data-toggle="tooltip" data-placement="bottom" title="Grand Retard">
										<input type="checkbox" name="r2" class="r2 checkbox-control"  data-checked="danger"/>
										<span class="control">R2</span>
									</div>

									<div class="checkbox-container" data-toggle="tooltip" data-placement="bottom" title="Petit Départ">
										<input type="checkbox" name="d1" class="d1 checkbox-control"  data-checked="warning"/>
										<span class="control">D1</span>
									</div>

									<div class="checkbox-container" data-toggle="tooltip" data-placement="bottom" title="Grand Départ">
										<input type="checkbox" name="d2" class="d2 checkbox-control"  data-checked="danger"/>
										<span class="control">D2</span>
									</div>

									<div class="checkbox-container" data-toggle="tooltip" data-placement="bottom" title="Absence">
										<input type="checkbox" name="absent" class="absent checkbox-control"  data-checked="danger"/>
										<span class="control">Ab</span>
									</div>

								</div>
							</div>
						</div>
					</div>
					
					<div class="presence-student">
						<div id="presence-8" data-id="8" class="presence">
							<div class="details">
								<img class="img-thumbnail" alt="avatar" src="http://localhost/public/statics/img/trombino/avatar-0.png" height="170px">
								<a href="#"><h2 class="title">Alicia</h2><h2 class="title">Rodriguez</h2></a>
							</div>
							<div class="controls">

								<div class="row" id="checkbox-align">

									<div class="checkbox-container" data-toggle="tooltip" data-placement="bottom" title="Petit Retard">
										<input type="checkbox" name="r1" class="r1 checkbox-control"  data-checked="warning"/>
										<span class="control">R1</span>
									</div>

									<div class="checkbox-container" data-toggle="tooltip" data-placement="bottom" title="Grand Retard">
										<input type="checkbox" name="r2" class="r2 checkbox-control"  data-checked="danger"/>
										<span class="control">R2</span>
									</div>

									<div class="checkbox-container" data-toggle="tooltip" data-placement="bottom" title="Petit Départ">
										<input type="checkbox" name="d1" class="d1 checkbox-control"  data-checked="warning"/>
										<span class="control">D1</span>
									</div>

									<div class="checkbox-container" data-toggle="tooltip" data-placement="bottom" title="Grand Départ">
										<input type="checkbox" name="d2" class="d2 checkbox-control"  data-checked="danger"/>
										<span class="control">D2</span>
									</div>

									<div class="checkbox-container" data-toggle="tooltip" data-placement="bottom" title="Absence">
										<input type="checkbox" name="absent" class="absent checkbox-control"  data-checked="danger"/>
										<span class="control">Ab</span>
									</div>

								</div>
							</div>
						</div>
					</div>
					
					<div class="presence-student">
						<div id="presence-9" data-id="9" class="presence">
							<div class="details">
								<img class="img-thumbnail" alt="avatar" src="http://localhost/public/statics/img/trombino/avatar-1.png" height="170px">
								<a href="#"><h2 class="title">Antoine</h2><h2 class="title">Dupuy</h2></a>
							</div>
							<div class="controls">

								<div class="row" id="checkbox-align">

									<div class="checkbox-container" data-toggle="tooltip" data-placement="bottom" title="Petit Retard">
										<input type="checkbox" name="r1" class="r1 checkbox-control"  data-checked="warning"/>
										<span class="control">R1</span>
									</div>

									<div class="checkbox-container" data-toggle="tooltip" data-placement="bottom" title="Grand Retard">
										<input type="checkbox" name="r2" class="r2 checkbox-control"  data-checked="danger"/>
										<span class="control">R2</span>
									</div>

									<div class="checkbox-container" data-toggle="tooltip" data-placement="bottom" title="Petit Départ">
										<input type="checkbox" name="d1" class="d1 checkbox-control"  data-checked="warning"/>
										<span class="control">D1</span>
									</div>

									<div class="checkbox-container" data-toggle="tooltip" data-placement="bottom" title="Grand Départ">
										<input type="checkbox" name="d2" class="d2 checkbox-control"  data-checked="danger"/>
										<span class="control">D2</span>
									</div>

									<div class="checkbox-container" data-toggle="tooltip" data-placement="bottom" title="Absence">
										<input type="checkbox" name="absent" class="absent checkbox-control"  data-checked="danger"/>
										<span class="control">Ab</span>
									</div>

								</div>
							</div>
						</div>
					</div>
					
					<div class="presence-student">
						<div id="presence-10" data-id="10" class="presence">
							<div class="details">
								<img class="img-thumbnail" alt="avatar" src="http://localhost/public/statics/img/trombino/avatar-1.png" height="170px">
								<a href="#"><h2 class="title">Birny</h2><h2 class="title">Joao</h2></a>
							</div>
							<div class="controls">

								<div class="row" id="checkbox-align">

									<div class="checkbox-container" data-toggle="tooltip" data-placement="bottom" title="Petit Retard">
										<input type="checkbox" name="r1" class="r1 checkbox-control"  data-checked="warning"/>
										<span class="control">R1</span>
									</div>

									<div class="checkbox-container" data-toggle="tooltip" data-placement="bottom" title="Grand Retard">
										<input type="checkbox" name="r2" class="r2 checkbox-control"  data-checked="danger"/>
										<span class="control">R2</span>
									</div>

									<div class="checkbox-container" data-toggle="tooltip" data-placement="bottom" title="Petit Départ">
										<input type="checkbox" name="d1" class="d1 checkbox-control"  data-checked="warning"/>
										<span class="control">D1</span>
									</div>

									<div class="checkbox-container" data-toggle="tooltip" data-placement="bottom" title="Grand Départ">
										<input type="checkbox" name="d2" class="d2 checkbox-control"  data-checked="danger"/>
										<span class="control">D2</span>
									</div>

									<div class="checkbox-container" data-toggle="tooltip" data-placement="bottom" title="Absence">
										<input type="checkbox" name="absent" class="absent checkbox-control"  data-checked="danger"/>
										<span class="control">Ab</span>
									</div>

								</div>
							</div>
						</div>
					</div>
					
					<div class="presence-student">
						<div id="presence-11" data-id="11" class="presence">
							<div class="details">
								<img class="img-thumbnail" alt="avatar" src="http://localhost/public/statics/img/trombino/avatar-1.png" height="170px">
								<a href="#"><h2 class="title">Thibault</h2><h2 class="title">Fruchard</h2></a>
							</div>
							<div class="controls">

								<div class="row" id="checkbox-align">

									<div class="checkbox-container" data-toggle="tooltip" data-placement="bottom" title="Petit Retard">
										<input type="checkbox" name="r1" class="r1 checkbox-control"  data-checked="warning"/>
										<span class="control">R1</span>
									</div>

									<div class="checkbox-container" data-toggle="tooltip" data-placement="bottom" title="Grand Retard">
										<input type="checkbox" name="r2" class="r2 checkbox-control"  data-checked="danger"/>
										<span class="control">R2</span>
									</div>

									<div class="checkbox-container" data-toggle="tooltip" data-placement="bottom" title="Petit Départ">
										<input type="checkbox" name="d1" class="d1 checkbox-control"  data-checked="warning"/>
										<span class="control">D1</span>
									</div>

									<div class="checkbox-container" data-toggle="tooltip" data-placement="bottom" title="Grand Départ">
										<input type="checkbox" name="d2" class="d2 checkbox-control"  data-checked="danger"/>
										<span class="control">D2</span>
									</div>

									<div class="checkbox-container" data-toggle="tooltip" data-placement="bottom" title="Absence">
										<input type="checkbox" name="absent" class="absent checkbox-control"  data-checked="danger"/>
										<span class="control">Ab</span>
									</div>

								</div>
							</div>
						</div>
					</div>
					
					<div class="presence-student">
						<div id="presence-12" data-id="12" class="presence">
							<div class="details">
								<img class="img-thumbnail" alt="avatar" src="http://localhost/public/statics/img/trombino/avatar-1.png" height="170px">
								<a href="#"><h2 class="title">Nicolas</h2><h2 class="title">Brohette</h2></a>
							</div>
							<div class="controls">

								<div class="row" id="checkbox-align">

									<div class="checkbox-container" data-toggle="tooltip" data-placement="bottom" title="Petit Retard">
										<input type="checkbox" name="r1" class="r1 checkbox-control"  data-checked="warning"/>
										<span class="control">R1</span>
									</div>

									<div class="checkbox-container" data-toggle="tooltip" data-placement="bottom" title="Grand Retard">
										<input type="checkbox" name="r2" class="r2 checkbox-control"  data-checked="danger"/>
										<span class="control">R2</span>
									</div>

									<div class="checkbox-container" data-toggle="tooltip" data-placement="bottom" title="Petit Départ">
										<input type="checkbox" name="d1" class="d1 checkbox-control"  data-checked="warning"/>
										<span class="control">D1</span>
									</div>

									<div class="checkbox-container" data-toggle="tooltip" data-placement="bottom" title="Grand Départ">
										<input type="checkbox" name="d2" class="d2 checkbox-control"  data-checked="danger"/>
										<span class="control">D2</span>
									</div>

									<div class="checkbox-container" data-toggle="tooltip" data-placement="bottom" title="Absence">
										<input type="checkbox" name="absent" class="absent checkbox-control"  data-checked="danger"/>
										<span class="control">Ab</span>
									</div>

								</div>
							</div>
						</div>
					</div>
					
					<div class="presence-student">
						<div id="presence-13" data-id="13" class="presence">
							<div class="details">
								<img class="img-thumbnail" alt="avatar" src="http://localhost/public/statics/img/trombino/avatar-1.png" height="170px">
								<a href="#"><h2 class="title">Morgan</h2><h2 class="title">De la Guesdonniere</h2></a>
							</div>
							<div class="controls">

								<div class="row" id="checkbox-align">

									<div class="checkbox-container" data-toggle="tooltip" data-placement="bottom" title="Petit Retard">
										<input type="checkbox" name="r1" class="r1 checkbox-control"  data-checked="warning"/>
										<span class="control">R1</span>
									</div>

									<div class="checkbox-container" data-toggle="tooltip" data-placement="bottom" title="Grand Retard">
										<input type="checkbox" name="r2" class="r2 checkbox-control"  data-checked="danger"/>
										<span class="control">R2</span>
									</div>

									<div class="checkbox-container" data-toggle="tooltip" data-placement="bottom" title="Petit Départ">
										<input type="checkbox" name="d1" class="d1 checkbox-control"  data-checked="warning"/>
										<span class="control">D1</span>
									</div>

									<div class="checkbox-container" data-toggle="tooltip" data-placement="bottom" title="Grand Départ">
										<input type="checkbox" name="d2" class="d2 checkbox-control"  data-checked="danger"/>
										<span class="control">D2</span>
									</div>

									<div class="checkbox-container" data-toggle="tooltip" data-placement="bottom" title="Absence">
										<input type="checkbox" name="absent" class="absent checkbox-control"  data-checked="danger"/>
										<span class="control">Ab</span>
									</div>

								</div>
							</div>
						</div>
					</div>
					
					<div class="presence-student">
						<div id="presence-14" data-id="14" class="presence">
							<div class="details">
								<img class="img-thumbnail" alt="avatar" src="http://localhost/public/statics/img/trombino/avatar-1.png" height="170px">
								<a href="#"><h2 class="title">Alexandre</h2><h2 class="title">Le Roux</h2></a>
							</div>
							<div class="controls">

								<div class="row" id="checkbox-align">

									<div class="checkbox-container" data-toggle="tooltip" data-placement="bottom" title="Petit Retard">
										<input type="checkbox" name="r1" class="r1 checkbox-control"  data-checked="warning"/>
										<span class="control">R1</span>
									</div>

									<div class="checkbox-container" data-toggle="tooltip" data-placement="bottom" title="Grand Retard">
										<input type="checkbox" name="r2" class="r2 checkbox-control"  data-checked="danger"/>
										<span class="control">R2</span>
									</div>

									<div class="checkbox-container" data-toggle="tooltip" data-placement="bottom" title="Petit Départ">
										<input type="checkbox" name="d1" class="d1 checkbox-control"  data-checked="warning"/>
										<span class="control">D1</span>
									</div>

									<div class="checkbox-container" data-toggle="tooltip" data-placement="bottom" title="Grand Départ">
										<input type="checkbox" name="d2" class="d2 checkbox-control"  data-checked="danger"/>
										<span class="control">D2</span>
									</div>

									<div class="checkbox-container" data-toggle="tooltip" data-placement="bottom" title="Absence">
										<input type="checkbox" name="absent" class="absent checkbox-control"  data-checked="danger"/>
										<span class="control">Ab</span>
									</div>

								</div>
							</div>
						</div>
					</div>
					
					<div class="presence-student">
						<div id="presence-15" data-id="15" class="presence">
							<div class="details">
								<img class="img-thumbnail" alt="avatar" src="http://localhost/public/statics/img/trombino/avatar-1.png" height="170px">
								<a href="#"><h2 class="title">Sylvain</h2><h2 class="title">Lebourgeois</h2></a>
							</div>
							<div class="controls">

								<div class="row" id="checkbox-align">

									<div class="checkbox-container" data-toggle="tooltip" data-placement="bottom" title="Petit Retard">
										<input type="checkbox" name="r1" class="r1 checkbox-control"  data-checked="warning"/>
										<span class="control">R1</span>
									</div>

									<div class="checkbox-container" data-toggle="tooltip" data-placement="bottom" title="Grand Retard">
										<input type="checkbox" name="r2" class="r2 checkbox-control"  data-checked="danger"/>
										<span class="control">R2</span>
									</div>

									<div class="checkbox-container" data-toggle="tooltip" data-placement="bottom" title="Petit Départ">
										<input type="checkbox" name="d1" class="d1 checkbox-control"  data-checked="warning"/>
										<span class="control">D1</span>
									</div>

									<div class="checkbox-container" data-toggle="tooltip" data-placement="bottom" title="Grand Départ">
										<input type="checkbox" name="d2" class="d2 checkbox-control"  data-checked="danger"/>
										<span class="control">D2</span>
									</div>

									<div class="checkbox-container" data-toggle="tooltip" data-placement="bottom" title="Absence">
										<input type="checkbox" name="absent" class="absent checkbox-control"  data-checked="danger"/>
										<span class="control">Ab</span>
									</div>

								</div>
							</div>
						</div>
					</div>
					
					<div class="presence-student">
						<div id="presence-16" data-id="16" class="presence">
							<div class="details">
								<img class="img-thumbnail" alt="avatar" src="http://localhost/public/statics/img/trombino/avatar-1.png" height="170px">
								<a href="#"><h2 class="title">Régis</h2><h2 class="title">Micaa</h2></a>
							</div>
							<div class="controls">

								<div class="row" id="checkbox-align">

									<div class="checkbox-container" data-toggle="tooltip" data-placement="bottom" title="Petit Retard">
										<input type="checkbox" name="r1" class="r1 checkbox-control"  data-checked="warning"/>
										<span class="control">R1</span>
									</div>

									<div class="checkbox-container" data-toggle="tooltip" data-placement="bottom" title="Grand Retard">
										<input type="checkbox" name="r2" class="r2 checkbox-control"  data-checked="danger"/>
										<span class="control">R2</span>
									</div>

									<div class="checkbox-container" data-toggle="tooltip" data-placement="bottom" title="Petit Départ">
										<input type="checkbox" name="d1" class="d1 checkbox-control"  data-checked="warning"/>
										<span class="control">D1</span>
									</div>

									<div class="checkbox-container" data-toggle="tooltip" data-placement="bottom" title="Grand Départ">
										<input type="checkbox" name="d2" class="d2 checkbox-control"  data-checked="danger"/>
										<span class="control">D2</span>
									</div>

									<div class="checkbox-container" data-toggle="tooltip" data-placement="bottom" title="Absence">
										<input type="checkbox" name="absent" class="absent checkbox-control"  data-checked="danger"/>
										<span class="control">Ab</span>
									</div>

								</div>
							</div>
						</div>
					</div>
					
					<div class="presence-student">
						<div id="presence-17" data-id="17" class="presence">
							<div class="details">
								<img class="img-thumbnail" alt="avatar" src="http://localhost/public/statics/img/trombino/avatar-1.png" height="170px">
								<a href="#"><h2 class="title">Alexander</h2><h2 class="title">Ping</h2></a>
							</div>
							<div class="controls">

								<div class="row" id="checkbox-align">

									<div class="checkbox-container" data-toggle="tooltip" data-placement="bottom" title="Petit Retard">
										<input type="checkbox" name="r1" class="r1 checkbox-control"  data-checked="warning"/>
										<span class="control">R1</span>
									</div>

									<div class="checkbox-container" data-toggle="tooltip" data-placement="bottom" title="Grand Retard">
										<input type="checkbox" name="r2" class="r2 checkbox-control"  data-checked="danger"/>
										<span class="control">R2</span>
									</div>

									<div class="checkbox-container" data-toggle="tooltip" data-placement="bottom" title="Petit Départ">
										<input type="checkbox" name="d1" class="d1 checkbox-control"  data-checked="warning"/>
										<span class="control">D1</span>
									</div>

									<div class="checkbox-container" data-toggle="tooltip" data-placement="bottom" title="Grand Départ">
										<input type="checkbox" name="d2" class="d2 checkbox-control"  data-checked="danger"/>
										<span class="control">D2</span>
									</div>

									<div class="checkbox-container" data-toggle="tooltip" data-placement="bottom" title="Absence">
										<input type="checkbox" name="absent" class="absent checkbox-control"  data-checked="danger"/>
										<span class="control">Ab</span>
									</div>

								</div>
							</div>
						</div>
					</div>
					
					<div class="presence-student">
						<div id="presence-18" data-id="18" class="presence">
							<div class="details">
								<img class="img-thumbnail" alt="avatar" src="http://localhost/public/statics/img/trombino/avatar-1.png" height="170px">
								<a href="#"><h2 class="title">Mouhsin</h2><h2 class="title">Sarhdaoui</h2></a>
							</div>
							<div class="controls">

								<div class="row" id="checkbox-align">

									<div class="checkbox-container" data-toggle="tooltip" data-placement="bottom" title="Petit Retard">
										<input type="checkbox" name="r1" class="r1 checkbox-control"  data-checked="warning"/>
										<span class="control">R1</span>
									</div>

									<div class="checkbox-container" data-toggle="tooltip" data-placement="bottom" title="Grand Retard">
										<input type="checkbox" name="r2" class="r2 checkbox-control"  data-checked="danger"/>
										<span class="control">R2</span>
									</div>

									<div class="checkbox-container" data-toggle="tooltip" data-placement="bottom" title="Petit Départ">
										<input type="checkbox" name="d1" class="d1 checkbox-control"  data-checked="warning"/>
										<span class="control">D1</span>
									</div>

									<div class="checkbox-container" data-toggle="tooltip" data-placement="bottom" title="Grand Départ">
										<input type="checkbox" name="d2" class="d2 checkbox-control"  data-checked="danger"/>
										<span class="control">D2</span>
									</div>

									<div class="checkbox-container" data-toggle="tooltip" data-placement="bottom" title="Absence">
										<input type="checkbox" name="absent" class="absent checkbox-control"  data-checked="danger"/>
										<span class="control">Ab</span>
									</div>

								</div>
							</div>
						</div>
					</div>
					
					<div class="presence-student">
						<div id="presence-19" data-id="19" class="presence">
							<div class="details">
								<img class="img-thumbnail" alt="avatar" src="http://localhost/public/statics/img/trombino/avatar-1.png" height="170px">
								<a href="#"><h2 class="title">Vincent</h2><h2 class="title">Thiblet</h2></a>
							</div>
							<div class="controls">

								<div class="row" id="checkbox-align">

									<div class="checkbox-container" data-toggle="tooltip" data-placement="bottom" title="Petit Retard">
										<input type="checkbox" name="r1" class="r1 checkbox-control"  data-checked="warning"/>
										<span class="control">R1</span>
									</div>

									<div class="checkbox-container" data-toggle="tooltip" data-placement="bottom" title="Grand Retard">
										<input type="checkbox" name="r2" class="r2 checkbox-control"  data-checked="danger"/>
										<span class="control">R2</span>
									</div>

									<div class="checkbox-container" data-toggle="tooltip" data-placement="bottom" title="Petit Départ">
										<input type="checkbox" name="d1" class="d1 checkbox-control"  data-checked="warning"/>
										<span class="control">D1</span>
									</div>

									<div class="checkbox-container" data-toggle="tooltip" data-placement="bottom" title="Grand Départ">
										<input type="checkbox" name="d2" class="d2 checkbox-control"  data-checked="danger"/>
										<span class="control">D2</span>
									</div>

									<div class="checkbox-container" data-toggle="tooltip" data-placement="bottom" title="Absence">
										<input type="checkbox" name="absent" class="absent checkbox-control"  data-checked="danger"/>
										<span class="control">Ab</span>
									</div>

								</div>
							</div>
						</div>
					</div>
					
					<div class="presence-student">
						<div id="presence-20" data-id="20" class="presence">
							<div class="details">
								<img class="img-thumbnail" alt="avatar" src="http://localhost/public/statics/img/trombino/avatar-1.png" height="170px">
								<a href="#"><h2 class="title">Julien</h2><h2 class="title">--nom1--</h2></a>
							</div>
							<div class="controls">

								<div class="row" id="checkbox-align">

									<div class="checkbox-container" data-toggle="tooltip" data-placement="bottom" title="Petit Retard">
										<input type="checkbox" name="r1" class="r1 checkbox-control"  data-checked="warning"/>
										<span class="control">R1</span>
									</div>

									<div class="checkbox-container" data-toggle="tooltip" data-placement="bottom" title="Grand Retard">
										<input type="checkbox" name="r2" class="r2 checkbox-control"  data-checked="danger"/>
										<span class="control">R2</span>
									</div>

									<div class="checkbox-container" data-toggle="tooltip" data-placement="bottom" title="Petit Départ">
										<input type="checkbox" name="d1" class="d1 checkbox-control"  data-checked="warning"/>
										<span class="control">D1</span>
									</div>

									<div class="checkbox-container" data-toggle="tooltip" data-placement="bottom" title="Grand Départ">
										<input type="checkbox" name="d2" class="d2 checkbox-control"  data-checked="danger"/>
										<span class="control">D2</span>
									</div>

									<div class="checkbox-container" data-toggle="tooltip" data-placement="bottom" title="Absence">
										<input type="checkbox" name="absent" class="absent checkbox-control"  data-checked="danger"/>
										<span class="control">Ab</span>
									</div>

								</div>
							</div>
						</div>
					</div>
					
					<div class="presence-student">
						<div id="presence-21" data-id="21" class="presence">
							<div class="details">
								<img class="img-thumbnail" alt="avatar" src="http://localhost/public/statics/img/trombino/avatar-1.png" height="170px">
								<a href="#"><h2 class="title">Jean-Pierre</h2><h2 class="title">--nom2--</h2></a>
							</div>
							<div class="controls">

								<div class="row" id="checkbox-align">

									<div class="checkbox-container" data-toggle="tooltip" data-placement="bottom" title="Petit Retard">
										<input type="checkbox" name="r1" class="r1 checkbox-control"  data-checked="warning"/>
										<span class="control">R1</span>
									</div>

									<div class="checkbox-container" data-toggle="tooltip" data-placement="bottom" title="Grand Retard">
										<input type="checkbox" name="r2" class="r2 checkbox-control"  data-checked="danger"/>
										<span class="control">R2</span>
									</div>

									<div class="checkbox-container" data-toggle="tooltip" data-placement="bottom" title="Petit Départ">
										<input type="checkbox" name="d1" class="d1 checkbox-control"  data-checked="warning"/>
										<span class="control">D1</span>
									</div>

									<div class="checkbox-container" data-toggle="tooltip" data-placement="bottom" title="Grand Départ">
										<input type="checkbox" name="d2" class="d2 checkbox-control"  data-checked="danger"/>
										<span class="control">D2</span>
									</div>

									<div class="checkbox-container" data-toggle="tooltip" data-placement="bottom" title="Absence">
										<input type="checkbox" name="absent" class="absent checkbox-control"  data-checked="danger"/>
										<span class="control">Ab</span>
									</div>

								</div>
							</div>
						</div>
					</div>
															<div class="clearfix"></div>
				</div>
			</div>
		</section>
	</div><!-- /.row -->

	<!--NAV PAGE-->
	<!--
	<div class="row">
		<div class="col-md-12">
			<ul class="pager pagenav">
				<li class="previous">
					<a href="/previous" rel="prev"><span class="icon-chevron-left"></span>Précédent</a>
				</li>
				<li class="next">
					<a href="/next" rel="next"><span class="icon-chevron-right"></span>Suivant</a>
			  	</li>
			</ul>
		</div>
	</div>
	-->
	<!--END NAV PAGE-->

  </div><!-- .container.blog-content -->

	<footer class="blog-footer">
      <section class="copyright">
        <div class="container">
          <div class="row" id="logo-footer">
            <div class="col-md-12">
                <span>
                  <a href="#">Haut de page</a>
                </span>
                <p>
                  <a href="http://www.webforce3.fr" title="Mentions légales">Web Force 3</a>
                </p>
            </div>
          </div>
        </div>
      </section>
  </footer>

  


	<script src="http://localhost/public/statics/js/jquery.min.js"></script>
	<script src="http://localhost/public/statics/js/bootstrap.min.js"></script>
  <script src="http://localhost/public/statics/js/bootstrap-checkbox.js"></script>

  <script>

  var HTTP_ROOT = 'http://localhost/fr/';

  
  $(document).ready(function() {

    var checkbox_options = {
      buttonStyle: 'btn-default',
      buttonStyleChecked: 'btn-success',
      checkedClass: 'icon-check',
      uncheckedClass: 'icon-check-empty'
    };

    $('input[type="checkbox"].checkbox-control').each(function() {

      var type = typeof($(this).data('checked')) !== 'undefined' ? $(this).data('checked') : 'default';

      checkbox_options.buttonStyleChecked = 'btn-'+type;

      $(this).checkbox(checkbox_options);

      $(this).unbind('click').bind('click', function() {

        var student_id = $(this).closest('.presence').data('id');
        var action = $(this).attr('name');
        var day = parseInt($.now() / 1000);
        var value = $(this).prop('checked') ? 1 : 0;

        $.ajax({
          method: "POST",
          url: HTTP_ROOT+"presence/update",
          data: {student_id: student_id, action: action, value: value, day: day},
          dataType: 'json'
        })
        .done(function(result) {
          if (typeof(result.error) !== 'undefined') {
            alert(result.error);
          } else {
            var actions = {'r1':true, 'r2':true, 'd1':true, 'd2':true, 'absent':true};
            for (var i in result) {

               if (typeof(actions[i]) !== 'undefined' && actions[i] === true) {

                var checked = parseInt(result[i]) ? true : false;

                console.log(i, result[i], value, '#presence-'+result.student_id+' input.'+i, checked);

                //checkbox_options.checked = checked;

                //$('#presence-'+result.student_id+' .'+i).checkbox(checkbox_options);
                $('#presence-'+result.student_id+' input.'+i).checkbox({'checked': checked});
              }
            }
          }
        });

      });

    });

    $('[data-toggle="tooltip"]').tooltip({
      container: 'body'
    })

  });
  
  </script>

</body>
</html>

<?php }} ?>
