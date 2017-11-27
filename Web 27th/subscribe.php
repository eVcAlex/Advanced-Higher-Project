<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description"  content="The National Football league. View currents teams and standings!">
    <meta name="keywords" content="NFL, national football league">
    <meta name="author" content="Alex McGuiness">
    <title>NFL | Subscribe</title>
    <style>
    <?php include './css/stylePHP.css'; ?>
    </style>
  </head>
  <body>
    <header>
      <div class="container1">
          <div id="branding">
            <img src="./img/logo.png" alt="NFL logo" style="width:100px;height:100px;">
          </div>
        <nav>
          <ul>
            <li><a href="index.html">Home</a></li>

          </ul>
        </nav>
      </div>
    </header>

    <section id="showcaseSub">
      <div class="container">
        <h1> NFL OFFICIAL NEWSLETTER </h1>
      </div>
    </section>

    <section id="welcome2">
      <div class="container">
        <h2> Thank you for subscribing to our newsletter </h2>
      </div>
    </section>

  <section id="roster2">
      <div class="container">

<?php

$host="localhost";
$user="root";
$password="";
$dbname="newsletter";

$cxn=mysqli_connect($host,$user,$password,$dbname) or die("Couldn't connect to the server");


$email=$_POST['userEmail'];

$is_valid = strpos($email, "@");
if($is_valid === false){
      echo "Invalid email, please enter a valid email!";
 } else{
$query="INSERT INTO email (userEmail) VALUES ('$email')";

if(mysqli_query($cxn,$query)){
		echo"Subscribed!";
	}else{
		echo"Error- ".mysqli_error($cxn);
	}
}

echo '<a href="index.html"> Click to return</a>';

mysqli_close($cxn);

?>
   </body>
</html>
