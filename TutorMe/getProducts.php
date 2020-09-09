<?php
require "dbConnect.php";
?>
<?php

$rowsAvgRatings = array();


$sql    = "SELECT S.id as product_id,S.service_name as product_name,S.price as product_price,S.image as product_image,COALESCE(avg(rating_1),0) as rating_1,
			COALESCE(avg(rating_2),0) as rating_2,
			COALESCE(avg(rating_3),0) as rating_3 
			from services S LEFT JOIN review R on R.product_id=S.id group by S.id ";

$result = $conn->query($sql);

while ($r = $result->fetch_assoc()) {
$rowsAvgRatings[] = $r;
}
print_r(json_encode($rowsAvgRatings));

?>

