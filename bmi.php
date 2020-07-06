<?php
/**
 * filename: data.php
 * description: this will return the score of the teams.
 */

//setting header to json
header("Access-Control-Allow-Origin: *");
header('Content-Type: application/json');

//database
define('DB_HOST', '127.0.0.1');
define('DB_USERNAME', 'amirah');
define('DB_PASSWORD', 'bebek');
define('DB_NAME', 'tasks');

// get connection
$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

if(!$mysqli){
  die("Connection failed: " . $mysqli->error);
}


$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

if(!$mysqli){
  die("Connection failed: " . $mysqli->error);
}

// echo "Database connected";

//query to get data from the table
$query = sprintf("SELECT id, user_bmi, created_at FROM bmi ");

//execute query
$result = $mysqli->query($query);
// print json_encode($result);
// //loop through the returned data
$data = array();
foreach ($result as $row) {
  $data[] = $row;
}

// //free memory associated with result
$result->close();

//close connection
$mysqli->close();

//now print the data
print json_encode($data);

?>
