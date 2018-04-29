<?php
header("Content-Type: application/json; charset=UTF-8");
$obj = json_decode($_POST["x"], false);

//for get method
// $obj = json_decode($_GET["x"], false);

$conn = new mysqli("localhost", "bushra", "master1234", "oop") or die(mysql_error());
$result = $conn->query("SELECT name, email FROM ".$obj->table." LIMIT ".$obj->limit);
//user table has name, email, password fields

$outp = array();
$outp = $result->fetch_all(MYSQLI_ASSOC);

echo json_encode($outp);


?>