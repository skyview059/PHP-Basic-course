<?php

$conn = mysqli_connect('localhost','root','','crud');
require_once('function.php');



$action 	= isset($_GET['action']) ? $_GET['action'] : '';
$id 		= isset($_GET['id']) ? $_GET['id'] : 0;
















// CRUD

// C = Create --------- Done
// R = Read ----------- Done
// U = Upate ---------- Done
// D = Delete --------- Done

?>
<a href="product_list.php">List</a> | <a href="insert.php">Add New</a>
