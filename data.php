<?php
/**
 * filename: data.php
 * description: this will return the score of the teams.
 */

//setting header to json
header('Content-Type: application/json');

//database
define('DB_HOST', 'ec2-34-197-188-147.compute-1.amazonaws.com');
define('DB_USERNAME', 'xaiwgzulsgxtkb');
define('DB_PASSWORD', 'fc7a410c7df6fb94b409aa0d78e3f2fb15440e42f75b694fbb2a966e448ad8d6');
define('DB_NAME', 'danoh2mjnt7j0s');

//get connection
$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

if(!$mysqli){
  die("Connection failed: " . $mysqli->error);
}

//query to get data from the table
$query = sprintf("SELECT user_id, user_bmi, created_at FROM bmi ORDER BY created_at");

//execute query
$result = $mysqli->query($query);

//loop through the returned data
$data = array();
foreach ($result as $row) {
  $data[] = $row;
}

//free memory associated with result
$result->close();

//close connection
$mysqli->close();

//now print the data
print json_encode($data);

?>