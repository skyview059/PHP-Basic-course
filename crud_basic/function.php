<?php

function getCategoryName($categoryID){	
	global $conn;

	
	$result = mysqli_fetch_assoc(mysqli_query($conn,"SELECT `categoryName` FROM `category` WHERE `ID` = '$categoryID'"));
	return $result['categoryName'];
}