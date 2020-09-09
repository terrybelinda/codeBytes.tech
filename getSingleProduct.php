<?php
require "dbConnect.php";
?>
<?php

$rowsAvgRatings = array();


$sql    = "SELECT S.id as product_id,S.service_name as product_name,S.price as product_price,S.image as product_image,COALESCE(avg(rating_1),0) as rating_1,
			COALESCE(avg(rating_2),0) as rating_2,
			COALESCE(avg(rating_3),0) as rating_3 
			from services S LEFT JOIN review R on R.product_id=S.id where S.id='".$_GET['product_id']."' group by S.id ";

$result = $conn->query($sql);

while ($r = $result->fetch_assoc()) {
$rowsAvgRatings[] = $r;
}


$rows = array();
$sql    = "select id,user_id,user_name,product_id,description,rating_1,rating_2,rating_3,time from review
		   where product_id='".$_GET['product_id']."'";

$result = $conn->query($sql);


while ($r = $result->fetch_assoc()) {
$rows[] = $r;
}

$rowsAvgRatings[0]["review"] = $rows;
print_r(json_encode($rowsAvgRatings[0]));


$sql    = "Insert into views (product_id,user_id,user_name,time_stamp)
		   values('".$_GET['product_id']."','".$_GET['user_id']."','".$_GET['user_name']."',CURRENT_TIME())";

$result = $conn->query($sql);



?>

