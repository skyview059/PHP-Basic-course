

<?php
require_once('conn.php');

if(isset($_POST['update'])){

	$categoryID 	= $_POST['categoryID'];
	$productName 	= $_POST['productName'];
	$productPrice 	= $_POST['productPrice'];
	$description 	= $_POST['description'];
	
	
	$sql = "UPDATE `product` SET
			`categoryID` 	= '$categoryID',
			`productName` 	= '$productName',
			`productPrice` 	= '$productPrice',
			`description` 	= '$description' WHERE `ID` = '$id'";



	$query = mysqli_query($conn,$sql);

	if($query){
		echo 'Update Successful';
	} else {
		echo 'Fail!!, Try Again';
	}

	
}

$product = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM `product` WHERE `ID` = '$id'"));

//echo 'SELECT * FROM `product` WHERE `ID` = $id';
//echo '<br/>';
//echo "SELECT * FROM `product` WHERE `ID` = '$id'"




?>


<h1>Update Product</h1>
<form name="insertProduct" method="post" enctype="multipart/form-data">
  
  <p>Product Name:
  <input type="text" name="productName" placeholder="Name" value="<?php echo $product['productName'] ?>"></p>
  
  <p>Product Price:
  <input type="text" name="productPrice" placeholder="price" value="<?php echo $product['productPrice'] ?>"></p>
  
  <p>Category :
  <select name="categoryID">
    <option value="0">--Select Category -</option>
    <option value="1" <?php echo ($product['categoryID'] == 1) ? ' selected' : ''; ?>>Nokia</option>
    <option value="2" <?php echo ($product['categoryID'] == 2) ? ' selected' : ''; ?>>LG</option>
 </select></p>
 
 
 
 <p>Description
  <textarea rows="5" name="description" placeholder="Discription"><?php echo $product['description'] ?></textarea></p>
  
  <input type="submit" name="update" value="Update Value"/>  
  
</form>