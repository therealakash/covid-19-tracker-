<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
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
	<title>Corona Live Updates</title>
  <link rel="shortcut icon" type="image/png" href="2.png">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
	
<!-- Grey with black text -->

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
<div class="container">
  
  
  <h4></h4>  
  <h2  align="center">Corona Live Updates India</h2>  
  <h5  align="center" class="text-primary">There is still a lot of fight is left but corona will lose and we will win.</h5>     
  <table class="table">
    <thead class="thead-dark">
    
      <tr>
        <th>Lastupdatedtime</th>
        <th>State</th>
        <th>Confirmed</th>
        <th>Active</th>
        <th>Recovered</th>
        <th>Deaths</th>
      </tr>
      
<?php

$data= file_get_contents('https://api.covid19india.org/data.json');
$Corona= json_decode($data, true);

$statescount= count($Corona['statewise']);
$i=1;
while ($i<$statescount) {
?>
<tr>
  <td class=""><?php echo $Corona['statewise'][$i]['lastupdatedtime'] ?></td>
   <td class=""><?php echo $Corona['statewise'][$i]['state'] ?></td>
    <td class="text-warning"><?php echo $Corona['statewise'][$i]['confirmed'] ?></td>
     <td class="text-primary"><?php echo $Corona['statewise'][$i]['active'] ?></td>
      <td class="text-success"><?php echo $Corona['statewise'][$i]['recovered'] ?></td>
       <td class="text-danger"><?php echo $Corona['statewise'][$i]['deaths'] ?></td>
</tr>
  <!--echo $Corona['statewise'][$i]['lastupdatedtime']."<br>";
  echo $Corona['statewise'][$i]['state']."<br>";
  echo $Corona['statewise'][$i]['confirmed']."<br>";
  echo $Corona['statewise'][$i]['active']."<br>";
  echo $Corona['statewise'][$i]['recovered']."<br>";
  echo $Corona['statewise'][$i]['deaths']."<br>";-->
<?php
  $i++;





}



?>
</thead>
</table>



<div class="footer">
  <h4><p><b>Stay Home Stay Safe</b></p></h4>
</div>
</body>
</html