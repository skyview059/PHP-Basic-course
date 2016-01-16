

<?php
require_once('conn.php');



if(isset($_POST['submit'])){

	$categoryID 	= $_POST['categoryID'];
	$productName 	= $_POST['productName'];
	$productPrice 	= $_POST['productPrice'];
	$description 	= $_POST['description'];
	
	
	$sql = "INSERT INTO `product` SET
			`categoryID` = '$categoryID',
			`productName` = '$productName',
			`productPrice` = '$productPrice',
			`description` = '$description'";



	$query = mysqli_query($conn,$sql);

	if($query){
		echo 'Insert Successful';
	} else {
		echo 'Fail!!, Try Again';
	}

	
}

?>


<h1>Add New Product</h1>
<form name="insertProduct" method="post" enctype="multipart/form-data">
  
  <p>Product Name:
  <input type="text" name="productName" placeholder="Name"></p>
  
  <p>Product Price:
  <input type="text" name="productPrice" placeholder="price"></p>
  
  <p>Category :
  <select name="categoryID">
    <option value="0">--Select Category -</option>
    <option value="1">Nokia</option>
    <option value="2">LG</option>
 </select></p>
 
 
 
 <p>Description
  <textarea rows="5" name="description" placeholder="Discription"></textarea></p>
  
  <input type="submit" name="submit" value="Submit Value"/>  
  
</form>