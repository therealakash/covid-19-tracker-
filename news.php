<!DOCTYPE html>
<html>
<head>
	<title>Live News</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
  <style>
  .footer {
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: gray;
   color: white;
   text-align: center;
   position: auto;
}
</style>
 <link rel="shortcut icon" type="image/png" href="2.png">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
<nav class="navbar navbar-expand-md bg-danger navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="index.php"><h3>Covid-19Updates</h3></a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item active">
      <a class="nav-link" href="index.php"><h4>Home</h4></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="sy.html"><h4>Symptoms&Precautions</h4></a>
    </li>
     <li class="nav-item active">
      <a class="nav-link" href="news.php"><h4>News</h4></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="hp.html"><h4>Helpful websites</h4></a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="liven.html"><h4>Live News</h4></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="ab.html"><h4>About Us</h4></a>
    </li>
    </ul>
  </div>
</nav>
	<?php
	$url='http://newsapi.org/v2/top-headlines?sources=google-news&apiKey=8ca3254212bf4d94be19119989cd62f4';
	$respones= file_get_contents($url);
	$NewsData= json_decode($respones);

	?>
	<div class="jumbotron">
		<h1>Live News Updates</h1>
		
	</div>
	<div class="container-fluid">
		<?php
		foreach($NewsData->articles as $News) 
		{

		?>
		<div class="row NewsGrid">
			<div class="col-md-3">
				<img src="<?php  echo $News->urlToImage  ?>" alt="News thumbnail">
				
			</div>
			<div class="col-md-9">
				<h2>Title:<?php echo $News->title ?></h2>
				<h5>Discription <?php echo $News->description ?></h5>
				<p>Content: <?php echo $News->content ?></p>
				<h6>Aurthor: <?php echo $News->author ?></h6>
				<h6>Published <?php echo $News->publishedAt ?></h6>


				
			</div>
			
		</div>
		<?php
	    }
	    ?>	
	</div>
	<div class="footer">
    <h4><p><b>Stay Home Stay Safe</b></p></h4>
  </div>


</body>
</html>