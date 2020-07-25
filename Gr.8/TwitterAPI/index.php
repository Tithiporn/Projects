<?php 
/* Twitter API SEARCH */

include "twitteroauth/twitteroauth.php";

$consumer = "AMJd1juVaob1ii8ctJNWFIdN3";
$consumersecret = "Dax1Xvwyj54q0DWwhNFOHLJgAMvnEJJjXZlKVaeC4N2iY5u8MA";
$accesstoken = "821581889949437952-prCoPxbW4iDspOr0pWDOMQokG21Om4v";
$accesstokensecret = "zk8q4vdbkRKovDOsAtCnFERovAxhya8yaNykfdGE8LKQ3";

$twitter = new TwitterOAuth($consumer,$consumersecret,$accesstoken,$accesstokensecret);

$tweets = $twitter->get('https://api.twitter.com/1.1/search/tweets.json?q=merhaba&result_type=recent&count=1');

?>

<!DOCTYPE html>
<html lang="en">
<head>
 	<meta charset="UTF-8">
  	<title>Twitter SEARCH</title>
  	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../source/bootstrap-3.3.6-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../source/font-awesome-4.5.0/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="../style/mystyle.css">
	<link rel="stylesheet" type="text/css" href="../style/slider.css">
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
				<li class="active"><a href="../index.php">HOME</a> </li>
                <li class="active"><a href="../trailer/trailer.php">TRAILER</a> </li>
				<li class="active"><a href="../spotify.php">SOUNDTRACK</a>
				<li class="active"><a href="index.php">COMMENT AND REVIEW</a> </li>
			</ul>
		</div>
	</nav>
</div>
<!--_______________________________________ Carousel__________________________________ -->
<div class="allcontain">
	<div id="carousel-up" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner " role="listbox">
			<div class="item active">
				<img src="../image/avenger.jpg" alt="avenger">
			</div>
			<div class="item">
				<img src="../image/justice.jpg"alt="justice">
			</div>
			<div class="item">
				<img src="../image/x-men.jpg"alt="x-men">
			</div>
		</div>
		<nav class="navbar navbar-default midle-nav">
			<div class="collapse navbar-collapse" id="navbarmidle">
				<div class="searchtxt">
					<h1>SEARCH MOVIE REVIEWS</h1>
				</div>
    <form action="" method="post">
        <input type="text" name="keyword"/>
    </form>
    
    
    <?php 
    if(isset($_POST['keyword'])){
      $tweets = $twitter->get('https://api.twitter.com/1.1/search/tweets.json?q='.$_POST['keyword'].'&result_type=recent&count=50');
        foreach($tweets->statuses as $key => $tweet){
            echo "<br>";
            echo "Twitter";
            echo '<img src="'.$tweet->user->profile_image_url.'" /> '.$tweet->text.'<br>';
        }
    }
    ?>
    
               </div>
		</nav>
	</div>
</div>
<center>
            <a class="twitter-timeline"  href="https://twitter.com/hashtag/movietwit" data-widget-id="936954354501689344">#movietwit Tweets</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
				<a class="twitter-timeline"  href="https://twitter.com/hashtag/%E0%B8%A3%E0%B8%B5%E0%B8%A7%E0%B8%B4%E0%B8%A7%E0%B8%AB%E0%B8%99%E0%B8%B1%E0%B8%87" data-widget-id="936958552056348672">#รีวิวหนัง Tweets</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>  
</center>         

</body>
</html>