<?php
$servername = "127.0.0.1";
$username = "homestead";
$password = "secret";

//try {
//    $conn = new PDO("mysql:host=$servername", $username, $password);
//    // set the PDO error mode to exception
//    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    echo "Connected successfully\n";
//}
//catch(PDOException $e)
//{
//    echo "Connection failed: " . $e->getMessage() . "\n";
//    die(1);
//}


$table = "tcompany";
try {
	$db = new PDO("mysql:dbname=wordpresstest;host={$servername}", $username, $password );
	$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );//Error Handling
	$sql ="CREATE table $table(
     ID INT( 11 ) AUTO_INCREMENT PRIMARY KEY,
     Prename VARCHAR( 50 ) NOT NULL, 
     Name VARCHAR( 250 ) NOT NULL,
     StreetA VARCHAR( 150 ) NOT NULL, 
     StreetB VARCHAR( 150 ) NOT NULL, 
     StreetC VARCHAR( 150 ) NOT NULL, 
     County VARCHAR( 100 ) NOT NULL,
     Postcode VARCHAR( 50 ) NOT NULL,
     Country VARCHAR( 50 ) NOT NULL);" ;
	$db->exec($sql);
	print("Created $table Table.\n");

} catch(PDOException $e) {
	echo $e->getMessage();//Remove or change message in production code
	die(1);
}