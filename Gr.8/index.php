<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Project2</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="source/bootstrap-3.3.6-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="source/font-awesome-4.5.0/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="style/slider.css">
	<link rel="stylesheet" type="text/css" href="style/mystyle.css">
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
                <li class="active"><a  href="trailer/trailer.php">TRAILER</a> </li>
				<li class="active"><a href="spotify.php"">SOUND TRACK</a>
				  <!--#include file="TwitterAPI/index.php" -->
                </li>
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
				<img src="image/avenger.jpg" alt="avenger">
			</div>
			<div class="item">
				<img src="image/justice.jpg" alt="justice">
			</div>
			<div class="item">
				<img src="image/x-men.jpg" alt="x-men">
			</div>
		</div>
		<nav class="navbar navbar-default midle-nav">
			<div class="collapse navbar-collapse" id="navbarmidle">
				<div class="searchtxt">
					<h1>SEARCH MOVIE INFORMATION</h1>
				</div>
				<form class="navbar-form navbar-left searchformmargin" role="search">
					<div class="form-group">
  					<script>
  						(function() {
    						var cx = '013090786682384368944:vkjinw4kiv4';
    						var gcse = document.createElement('script');
    						gcse.type = 'text/javascript';
    						gcse.async = true;
    						gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
   	 						var s = document.getElementsByTagName('script')[0];
    						s.parentNode.insertBefore(gcse, s);
  						})();
					</script>
                    <gcse:search></gcse:search>
					
					</div>
				</form>
			</div>
		</nav>
	</div>
</div>
<!-- ____________________MOVIES NOW SHOWING ______________________________--> 
<div class="allcontain">
	<div class="feturedsection">
		<h1 class="text-center">&bullet;&nbsp;MOVIES NOW SHOWING&nbsp;&bullet;</h1>
	</div>
	<div class="feturedimage">
		<div class="row firstrow">
			<div class="col-lg-6 costumcol colborder1">
				<div class="row costumrow">
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 img1colon">
						<img src="image/poster1.jpg" alt="poster1">
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 txt1colon ">
						<div class="featurecontant">
							<h1>Murder On The Orient Express</h1>
							<p>"A lavish train ride unfolds into a stylish & suspenseful mystery. From the novel by Agatha Christie, <br>
			 						Murder on the Orient Express tells of thirteen stranded strangers & one man's race to solve the puzzle before the murderer strikes again. </p>
                        	<h2>TIME : 115 MINS</h2>         
			 				<button id="btnRM"> <a href="https://www.sfcinemacity.com/showtime/movie/HO00004078">GET TICKETS</a></button>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 costumcol colborder2">
				<div class="row costumrow">
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 img2colon">
						<img src="image/poster2.jpg" alt="poster2">
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 txt1colon ">
						<div class="featurecontant">
							<h1>Coco</h1>
							<p>"Coco follows a 12-year-old boy named Miguel <br>who sets off a chain of events relating <br>to a century-old mystery,
			 						leading to <br>an extraordinary family reunion. <br><br></p>
			 				<h2>TIME : 130 MINS</h2>
			 				<button id="btnRM"> <a href="https://www.sfcinemacity.com/showtime/movie/HO00004073">GET TICKETS</a></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- ________________________MOVIES COMING SOON _______________________-->
<div class="latestcars">
	<h1 class="text-center">&bullet;&nbsp;MOVIES COMING SOON&nbsp;&bullet;</h1>
</div>
<br>
<br>
<!-- ________________________MOVIES COMING SOON Image Thumbnail________________-->
	<div class="grid">
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
				<div class="txthover">
					<img src="image/cposter1.jpg" alt="cposter1">
						<div class="txtcontent"><br><br><br>
							<div class="stars">
								<div class="glyphicon glyphicon-star"></div>
								<div class="glyphicon glyphicon-star"></div>
								<div class="glyphicon glyphicon-star"></div>
							</div>
							<div class="simpletxt">
								<h3 class="name">Star Wars : The Last Jedi</h3>
								<p>"Having taken her first steps into a larger world in Star Wars: Episode VII - The Force Awakens (2015)
	 							Rey continues her epic journey with Finn, Poe and Luke Skywalker in the next chapter of the saga.)" </p><br>
	 							<button id="btnRM"> <a href="http://www.imdb.com/videoembed/vi983676953">TRAILER</a></button><br>
                                
							</div>
							<div class="stars2">
								<div class="glyphicon glyphicon-star"></div>
								<div class="glyphicon glyphicon-star"></div>
								<div class="glyphicon glyphicon-star"></div>
							</div>
						</div>
				</div>	 
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 ">
				<div class="txthover">
					<img src="image/cposter2.jpg" alt="cposter2">
						<div class="txtcontent"><br><br>
							<div class="stars">
								<div class="glyphicon glyphicon-star"></div>
								<div class="glyphicon glyphicon-star"></div>
								<div class="glyphicon glyphicon-star"></div>
							</div>
							<div class="simpletxt">
								<h3 class="name">Avengers : Infinity War</h3>
								<p>"The Avengers and their Super Hero allies must be willing to sacrifice all in an attempt to defeat the powerful Thanos before his blitz of devastation and ruin puts an end to the universe. " </p><br>
	 							<button id="btnRM"> <a href="http://www.imdb.com/videoembed/vi3114711065">TRAILER</a></button><br>
							</div>
							<div class="stars2">
								<div class="glyphicon glyphicon-star"></div>
								<div class="glyphicon glyphicon-star"></div>
								<div class="glyphicon glyphicon-star"></div>
							</div>
						</div>
				</div>	 
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
				<div class="txthover">
					<img src="image/cposter3.jpg" alt="cposter3">
						<div class="txtcontent"><br><br><br><br>
							<div class="stars">
								<div class="glyphicon glyphicon-star"></div>
								<div class="glyphicon glyphicon-star"></div>
								<div class="glyphicon glyphicon-star"></div>
							</div>
							<div class="simpletxt">
								<h3 class="name">Maze Runner: The Death Cure</h3>
								<p>"Young hero, Thomas, embarks on a mission to find a cure to a deadly disease known as the "Flare"." </p><br>
	 							<button id="btnRM"> <a href="http://www.imdb.com/videoembed/vi2256517401">TRAILER</a></button><br>
							</div>
							<div class="stars2">
								<div class="glyphicon glyphicon-star"></div>
								<div class="glyphicon glyphicon-star"></div>
								<div class="glyphicon glyphicon-star"></div>
							</div>
						</div>
				</div>	 
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
				<div class="txthover">
					<img src="image/cposter4.jpg" alt="cposter4">
						<div class="txtcontent"><br><br><br><br>
							<div class="stars">
								<div class="glyphicon glyphicon-star"></div>
								<div class="glyphicon glyphicon-star"></div>
								<div class="glyphicon glyphicon-star"></div>
							</div>
							<div class="simpletxt">
								<h3 class="name">Black Panther</h3>
								<p>"T'Challa, after the death of his father, the King of Wakanda, returns home to the isolated, technologically advanced African nation to succeed to the throne and take his rightful place as king." </p><br>
	 							<button id="btnRM"> <a href="http://www.imdb.com/videoembed/vi2320939289">TRAILER</a></button><br>
                                
							</div>
							<div class="stars2">
								<div class="glyphicon glyphicon-star"></div>
								<div class="glyphicon glyphicon-star"></div>
								<div class="glyphicon glyphicon-star"></div>
							</div>
						</div>
				</div>	 
			</div>
			

<script type="text/javascript" src="source/bootstrap-3.3.6-dist/js/jquery.js"></script>
<script type="text/javascript" src="source/js/isotope.js"></script>
<script type="text/javascript" src="source/js/myscript.js"></script> 
<script type="text/javascript" src="source/bootstrap-3.3.6-dist/js/jquery.1.11.js"></script>
<script type="text/javascript" src="source/bootstrap-3.3.6-dist/js/bootstrap.js"></script>
        </div>
    </div>
</div>
</body>
</html>