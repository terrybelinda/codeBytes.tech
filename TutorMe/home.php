<!DOCTYPE html>
<html>
   <head>
      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
      <!------ Include the above in your HEAD tag ---------->
      <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
      <!------ Include the above in your HEAD tag ---------->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <style>
         /* Tabs*/
         section {  
         padding: 60px 0; 
         height:410px;
         }
         section .section-title {
         text-align: center;
         color: #AEC6CF;
         margin-bottom: 10px;
         }
         #tabs{
         background: #AEC6CF;
         color: #000000;
         }
         #tabs h6.section-title{
         color: #000000;
         }
         #tabs .nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
         color: #000000;
         background-color: transparent;
         border-color: transparent transparent #000000;
         border-bottom: 4px solid !important;
         font-size: 60px;
         font-weight: bold;
         }
         #tabs .nav-tabs .nav-link {
         border: 1px solid transparent;
         border-top-left-radius: .25rem;
         border-top-right-radius: .25rem;
         color: #000000;
         font-size: 20px;
         }
      </style>
   </head>
   <body>
      <img src="http://terrylinda1379278.ipage.com/TutorMe/Img/header.png" alt="Simply Easy Learning" >
      <!-- Tabs -->
      <section id="tabs">
         <div class="container">
            <h6 class="section-title h1">TutorMe</h6>
            <div class="row">
               <div class="col-xs-12 ">
                  <nav>
                     <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-home-tab"  href="home.php" role="tab" aria-controls="nav-home" aria-selected="true">Home</a>
                        <a class="nav-item nav-link" id="nav-about-tab"  href="about.php" role="tab" aria-controls="nav-about" aria-selected="false">About</a>
                        <a class="nav-item nav-link" id="nav-services-tab"  href="services.php" role="tab" aria-controls="nav-services" aria-selected="false">Services</a>
                        <a class="nav-item nav-link" id="nav-news-tab"  href="news.php" role="tab" aria-controls="nav-news" aria-selected="false">News</a>
                        <a class="nav-item nav-link" id="nav-contacts-tab"  href="login.php" role="tab" aria-controls="nav-contacts" aria-selected="false">Contacts</a>
						<a class="nav-item nav-link" id="nav-users-tab"  href="users.php" role="tab" aria-controls="nav-users" aria-selected="false">Users</a>
						<a class="nav-item nav-link" id="nav-curl-tab" href="curlUsers.php" role="tab" aria-controls="nav-curl" aria-selected="false">View Users</a>

                     </div>
                  </nav>
                  <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                     <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
<?php

function GetUserProfileInfo($access_token) {	
	$url = 'https://www.googleapis.com/oauth2/v2/userinfo?fields=name,email,gender,id,picture,verified_email';	
	
	$ch = curl_init();		
	curl_setopt($ch, CURLOPT_URL, $url);		
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: Bearer '. $access_token));
	$data = json_decode(curl_exec($ch), true);
	$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);		
	if($http_code != 200) 
		throw new Exception('Error : Failed to get user information');
		
	return $data;
}

function GetAccessToken($client_id, $redirect_uri, $client_secret, $code) {	
	$url = 'https://www.googleapis.com/oauth2/v4/token';			

	$curlPost = 'client_id=' . $client_id . '&redirect_uri=' . $redirect_uri . '&client_secret=' . $client_secret . '&code='. $code . '&grant_type=authorization_code';
	$ch = curl_init();		
	curl_setopt($ch, CURLOPT_URL, $url);		
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);		
	curl_setopt($ch, CURLOPT_POST, 1);		
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $curlPost);	
	$data = json_decode(curl_exec($ch), true);
	$http_code = curl_getinfo($ch,CURLINFO_HTTP_CODE);		
	if($http_code != 200) 
		throw new Exception('Error : Failed to receieve access token');
	
	return $data;
}
// Holds the Google application Client Id, Client Secret and Redirect Url
require_once('settings.php');



// Google passes a parameter 'code' in the Redirect Url
if(isset($_GET['code'])) {
	echo "hello";
	try {
		// Get the access token 
		$data = GetAccessToken(CLIENT_ID, CLIENT_REDIRECT_URL, CLIENT_SECRET, $_GET['code']);

		// Access Token
		$access_token = $data['access_token'];
		
		// Get user information
		$user_info = GetUserProfileInfo($access_token);
		print_r($user_info);
	}
	catch(Exception $e) {
		echo $e->getMessage();
		exit();
	}
}



?>
                        <p style = "font-family:georgia,garamond,serif;font-size:20px;font-weight: bold;">
                           Does your child hate MATH? 
                           <br><br>Do you think your child has potential but lacks interest and motivation?
                        </p>
                        <br>At TutorMe we believe that each student has a unique way of understanding things. We identify this and use it to help them develop their math skills.
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <img src="http://terrylinda1379278.ipage.com/TutorMe/Img/footer.png" alt="Simply Easy Learning" >
      <!-- ./Tabs -->
   </body>
</html>