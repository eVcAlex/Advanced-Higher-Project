<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description"  content="The National Football league. View currents teams and standings!">
    <meta name="keywords" content="NFL, national football league">
    <meta name="author" content="Alex McGuiness">
    <title>NFL | 49ers </title>
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
            <li><a href="teams.html">Teams</a></li>

          </ul>
        </nav>
      </div>
    </header>

    <section id="showcase49ers">
      <div class="container">
        <h1> San Francisco 49ers </h1>
      </div>
    </section>

    <section id="welcome">
      <div class="container">
        <h2> The official San Francisco 49ers Roster </h2>
      </div>
    </section>

  <section id="roster">
      <div class="container">

<?php

$host="localhost";
$user="root";
$password="";
$dbname="nfl";
$cxn=mysqli_connect($host,$user,$password,$dbname) or die("Couldn't connect to the server");

$query="SELECT * FROM 49ers";
$result=mysqli_query($cxn,$query) or die("Couldn't execute query");

if(!$result) {
    echo"Error- " .mysqli_error($cxn);
}

if (mysqli_num_rows($result) > 0) {

  echo '<div class="container2">';

while($row = mysqli_fetch_assoc($result)) {

      echo '<div class="item"><a href="PlayerDetailsSF.php?'.$row['Name'].'">'. $row['Name'] .'</a></div>';
  }
  echo '</div>';
}

mysqli_close($cxn);

?>
</div>
</section>

<footer>
  <p>NFL, Copyright &copy; 2017 </p>
</footer>

   </body>
</html>
