<?php

ini_set('display_errors', 0);

require_once __DIR__.'/../vendor/autoload.php';

$app = require __DIR__.'/../src/app.php';
require __DIR__.'/../config/prod.php';
require __DIR__.'/../src/controllers.php';
$app->run();

// testowe logowanie

//$host = "localhost";
//$db_user = "15_okonska";
//$db_password = "Malybratpatrzy8";
//$db_name = "15_okonska";

//$servername = "localhost";
//$username = "root";
//$password = "Malybratpatrzy8";
//$dbname = "15_okonska";
//
//// Create connection
//$conn = new mysqli($servername, $username, $password, $dbname);
//// Check connection
//if ($conn->connect_error) {
//    die("Connection failed: " . $conn->connect_error);
//}
//
//$sql = "SELECT * FROM logowanie";
//$result = $conn->query($sql);
//
//if ($result->num_rows > 0) {
//    echo "<table><tr><th>ID</th><th>Name</th></tr>";
//    // output data of each row
//    while($row = $result->fetch_assoc()) {
//        echo "<tr><td>".$row["id"]."</td><td>".$row["firstname"]." ".$row["lastname"]."</td></tr>";
//    }
//    echo "</table>";
//} else {
//    echo "0 results";
//}
//$conn->close();
//
?>

<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Logowanie testowe</title>
</head>

<body>

Zaloguj się<br /><br />

	<form action="zaloguj.php" method="post">

    Login: <br /> <input type="text" name="login" /> <br />
		Hasło: <br /> <input type="password" name="haslo" /> <br /><br />
		<input type="submit" value="Zaloguj się" />

	</form>

<?php
	if(isset($_SESSION['blad']))	echo $_SESSION['blad'];
?>

</body>
</html>
