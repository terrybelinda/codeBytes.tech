<?php
$ch = curl_init("http://www.shubhamzingh.tech/marketplace/getTopProducts.php");
$fp = fopen("example_homepage.txt", "w");

curl_setopt($ch, CURLOPT_FILE, $fp);
curl_setopt($ch, CURLOPT_HEADER, 0);

curl_exec($ch);
?>