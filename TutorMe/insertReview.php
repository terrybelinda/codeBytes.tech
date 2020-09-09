<?php
require "dbConnect.php";
?>
<?php
header('Access-Control-Allow-Origin: http://jayasuryapinaki.me');
header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
header('Access-Control-Max-Age: 1000');
header('Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With');
$sql    = "insert into review (product_id,description,rating_1,rating_2,rating_3,user_id,user_name) values
		 ('".$_POST["product_id"]."','".$_POST["description"]."','".$_POST["rating_1"]."','".$_POST["rating_2"]."','".$_POST["rating_3"]."','".$_POST["user_id"]."','".$_POST["user_name"]."');";
	
$result = $conn->query($sql);
if($result)
{
echo "success";
}
?>
