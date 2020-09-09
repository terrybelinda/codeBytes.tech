<?php



$to =$_POST['email'];
 $subject = "Purchase Summary";
$txt ="You have purchased " . $_POST["name"] . " which costs $" . $_POST["price"] ."\nThank you!\n\nFor further purchases please login to http://jayasuryapinaki.me/marketplace/marketplace.php";


$headers = "From: orders@marketplace.com" ;
mail($to,$subject,$txt,$headers);
echo "Email sent to: <u>".$_POST['email'] . "</u>";

?>



