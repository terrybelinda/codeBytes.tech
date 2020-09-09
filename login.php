<?php
ob_start();
?>
<!DOCTYPE html>
<?php

require_once('settings.php');
require_once('config.php');

$login_url = 'https://accounts.google.com/o/oauth2/v2/auth?scope=' . urlencode('https://www.googleapis.com/auth/userinfo.profile https://www.googleapis.com/auth/userinfo.email') . '&redirect_uri=' . urlencode(CLIENT_REDIRECT_URL) . '&response_type=code&client_id=' . CLIENT_ID . '&access_type=online';

$redirectURL="http://codebytes.tech/home.php";
$permissions=['email'];
$loginURL=$helper->getLoginUrl($redirectURL,$permissions);
echo $loginURL;
?>
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
                        <a class="nav-item nav-link " id="nav-home-tab" href="home.php" role="tab" aria-controls="nav-home" aria-selected="false">Home</a>
                        <a class="nav-item nav-link " id="nav-about-tab"  href="about.php" role="tab" aria-controls="nav-about" aria-selected="true">About</a>
                        <a class="nav-item nav-link" id="nav-services-tab"  href="services.php" role="tab" aria-controls="nav-services" aria-selected="false">Services</a>
                        <a class="nav-item nav-link" id="nav-news-tab"  href="news.php" role="tab" aria-controls="nav-news" aria-selected="false">News</a>
                        <a class="nav-item nav-link active" id="nav-contacts-tab"  href="login.php" role="tab" aria-controls="nav-contacts" aria-selected="false">Contacts</a>
						<a class="nav-item nav-link" id="nav-users-tab"  href="users.php" role="tab" aria-controls="nav-users" aria-selected="false">Users</a>
						<a class="nav-item nav-link" id="nav-curl-tab" href="curlUsers.php" role="tab" aria-controls="nav-curl" aria-selected="false">View Users</a>

                     </div>
                  </nav>
                  <div class="tab-pane fade show active" id="nav-contacts" role="tabpanel" aria-labelledby="nav-contacts-tab">
                     <form action="" method="post" name="Login_Form">
                        <table width="400" border="0" align="center" cellpadding="5" cellspacing="1" class="Table">
                           <tr>
                              <td colspan="2" align="left" align="top"><?php echo $msg;?></td>
                              </td>
                           </tr>
                           <tr>
                              <td colspan="2" align="left" align="top">
                                 <h3>Login</h3>
                              </td>
                           </tr>
                           <tr>
                              <td align="right" align="top">Username</td>
                              <td><input name="Username" type="text" class="Input"></td>
                           </tr>
                           <tr>
                              <td align="right">Password</td>
                              <td><input name="Password" type="password" class="Input"></td>
                           </tr>
                           <tr>
                              <td> </td>
                              <td><input name="Submit" type="submit" value="Login" class="Button3"></td>
                           </tr>
                        </table>
                     </form>
					 <a href="<?= $login_url ?>">Login with Google</a>
                                         <input type="button" onclick="window.location='<?php echo $loginURL ?>'" value="Login with Facebook">

                     <?php 
                        /* Check Login form submitted */if(isset($_POST['Submit'])){
                        
                        /* Check and assign submitted Username and Password to new variable */
                        $Username = isset($_POST['Username']) ? $_POST['Username'] : '';
                        $Password = isset($_POST['Password']) ? $_POST['Password'] : '';
                        
						/* File used for validation*/
						$userlist = file ('txt/validation.txt');
						
						/* checks against each entry in the file*/
						foreach ($userlist as $user) {
						$user_details = explode('|', $user);
						if ($user_details[0] ==$Username && $user_details[1] == $Password) {
						$success = true;
						break;
						}
						}
						if($success){
                     
                        header("Location: http://saranya.co/securesection.php");
                        ob_end_flush();
                        exit();
                        } 
                        else {
                        echo '<p style="color:red;"><strong>Invalid Credentials, Please try again</strong></p>';
                        }
                        }
                        ?>
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