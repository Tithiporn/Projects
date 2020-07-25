<html lang="en">
<head>
 	<meta charset="UTF-8">
  	<title>Spotify</title>
  	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="source/bootstrap-3.3.6-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="source/font-awesome-4.5.0/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="style/mystyle.css">
	<link rel="stylesheet" type="text/css" href="style/slider.css">
</head>

<style>
/*---------------------- Header --------------------*/
.allcontain{
	max-width: 1366px;
	margin-left: auto;
	margin-right: auto;
}

.header{
	background-color: #191919;
	
}

.header .container{
	padding: 0px;
}

/*----------------------End Header --------------------*/

	a {
		color:#FFF;
	}
	
	body{
		background:#FBF6D9;
	}
	
	
</style>

<body>
<!-- Header -->
<div class="allcontain">
	<!-- Navbar Up -->
	<nav class="topnavbar navbar-default topnav">
		<div class="collapse navbar-collapse" id="upmenu">
			<ul class="nav navbar-nav" id="navbarontop">
				<li class="active"><a href="index.php">HOME</a> </li>
                <li class="active"><a href="trailer/trailer.php">TRAILER</a> </li>
				<li class="active"><a href="spotify.php">SOUND TRACK</a>
				<li class="active"><a href="TwitterAPI/index.php">COMMENT AND REVIEW</a> </li>
			</ul>
		</div>
	</nav>
</div>
<!--_______________________________________ Carousel__________________________________ -->
<div class="allcontain">
	<div id="carousel-up" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner " role="listbox">
			<div class="item active">
				<img  src="image/avenger.jpg" alt="avenger">
			</div>
			<div class="item">
				<img src="image/justice.jpg"alt="justice">
			</div>
			<div class="item">
				<img src="image/x-men.jpg"alt="x-men">
			</div>
		</div>
		<nav class="navbar navbar-default midle-nav">
			<div class="collapse navbar-collapse" id="navbarmidle">
				<div class="searchtxt">
					<h1>SEARCH MOVIE SOUNDTRACK</h1>
				</div></div>
                <!--to show a search button-->
                
				<form name="form1" method="post">
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="search" name="search"></input>
					<input type="submit" id="button" value="submit"></input>
				</form>
        </nav>
       </div>
	<?php
	if(isset($_POST['search'])){
		require 'vendor/autoload.php';

		$session = new SpotifyWebAPI\Session(
			'def74a85c89649c99fe0bd850775b91a',
			'db30d72738c745cc9f1fff8419f11d37'
		);

		$session->requestCredentialsToken();
		$accessToken = $session->getAccessToken();

		$api = new SpotifyWebAPI\SpotifyWebAPI();
		$api->setAccessToken($accessToken);
		$results = $api->search($_POST['search'], 'album');
			
		foreach ($results->albums->items as $artist) {
			echo "<br><iframe src=\"https://open.spotify.com/embed?uri=".$artist->uri."\" frameborder=\"0\" height=\"380\" allowtransparency=\"true\"></iframe>";
		}
	}
?>
</body>
</html>
