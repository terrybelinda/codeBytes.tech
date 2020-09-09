<?php
require "dbConnect.php";
?>
<?php
$sql    = "insert into review (product_id,description,rating_1,rating_2,rating_3,user_id,user_name) values
		 ('".$_POST["product_id"]."','".$_POST["description"]."','".$_POST["rating_1"]."','".$_POST["rating_2"]."','".$_POST["rating_3"]."','".$_POST["user_id"]."','".$_POST["user_name"]."');";
echo $sql;	
$result = $conn->query($sql);
if($result)
{
echo "inserted";
}
?>
