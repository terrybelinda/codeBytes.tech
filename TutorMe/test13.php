<?php
// From URL to get webpage contents. 
//$url = "http://www.shubhamzingh.tech/marketplace/getTopProducts.php"; 
//$url = "https://codemode.tech/src/getAnalytics.php";  
$url = "http://www.easylabs.tech/marketplace/topFiveProduct.php";
// Initialize a CURL session. 
$ch = curl_init();  
  
// Return Page contents. 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
  
//grab URL and pass it to the variable. 
curl_setopt($ch, CURLOPT_URL, $url); 
  
//$result = curl_exec($ch); 

  

                    $testing = file_get_contents($url);
                    // var_dump(json_decode($testing, true));
                    $response = json_decode($testing, true);
                    print_r($response);  


?>