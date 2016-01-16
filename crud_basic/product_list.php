<?php

require_once('conn.php');



if($action == 'delete'){
	
	//	echo 'I will delete record '. $id;
	
	$query = mysqli_query($conn,"DELETE FROM `product` WHERE `ID` = $id");	
	
	if($query){
		echo '<h2>Delete Successful</h2>';
	} else {
		echo '<h2>Delete Fail!!, Try Again</h2>';
	}

}






$product = mysqli_query($conn,'SELECT * FROM `product`');

?>

<table width="600" border="1" cellspacing="5" cellpadding="5">
  <tr>
    <th scope="col">ID</th>
    <th scope="col">Image</th>
    <th scope="col">Product name</th>
    <th scope="col">Category Name</th>
    <th scope="col">Price</th>
    <th scope="col">Action</th>
  </tr>
  
  <?php while($row = mysqli_fetch_assoc($product)){?>
  
  <tr>
    <td><?php echo $row['ID'] ?></td>
    <td> ---</td>
    <td><?php echo $row['productName'] ?></td>
    <td><?php echo getCategoryName($row['categoryID']) ?></td>
    <td><?php echo $row['productPrice'] ?></td>
    <td>
		<a href="edit.php?id=<?php echo $row['ID'] ?>">Edit </a> | 
    	<a onclick="return confirm('Really Want to Delete?');" href="?action=delete&id=<?php echo $row['ID'] ?>">Delete </a>
    
    </td>
  </tr>
  <?php } ?>
  
  
  
</table>
