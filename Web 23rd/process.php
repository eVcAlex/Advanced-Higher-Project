<html>
    <head>
        <title>Test Home Page</title>
    </head>
    <body>
        <h1>Test Page</h1>
        <p>Test.</p>

<?php

$host="localhost";
$user="root";
$password="";
$dbname="newsletter";
$cxn=mysqli_connect($host,$user,$password,$dbname) or die("Couldn't connect to the server");

$query="SELECT * FROM email";
$result=mysqli_query($cxn,$query) or die("Couldn't execute query");

if(!$result) {
    echo"Error- " .mysqli_error($cxn);
}

if (mysqli_num_rows($result) > 0) {

while($row = mysqli_fetch_assoc($result)) {

        echo  "Email - ".$row["userEmail"];

    }
} else {
        echo "0 results";
}


mysqli_close($cxn);

?>
   </body>
</html>
