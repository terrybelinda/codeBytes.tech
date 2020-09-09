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
         padding: 10px 0; 
         height:600px;
	
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
         }body {font-family: Arial, Helvetica, sans-serif;}
		* {box-sizing: border-box;}

		/* Full-width input fields */
		input[type=text], input[type=password] {
		width: 100%;
		padding: 15px;
		margin: 5px 0 22px 0;
		display: inline-block;
		border: none;
		background: #f1f1f1;
		}

		/* Add a background color when the inputs get focus */
		input[type=text]:focus, input[type=password]:focus {
		  background-color: #ddd;
		  outline: none;
		}

		/* Set a style for all buttons */
		button {
		  background-color: #4CAF50;
		  color: white;
		  padding: 14px 20px;
		  margin: 8px 0;
		  border: none;
		  cursor: pointer;
		  width: 100%;
		  opacity: 0.9;
		}

		button:hover {
		  opacity:1;
		}

		/* Extra styles for the cancel button */
		.cancelbtn {
		  padding: 14px 20px;
		  background-color: #f44336;
		}

		/* Float cancel and signup buttons and add an equal width */
		.cancelbtn, .signupbtn {
		  float: left;
		  width: 50%;
		}

		/* Add padding to container elements */
		.container {
		  padding: 16px;
		}

		/* The Modal (background) */
		.modal {
		  display: none; /* Hidden by default */
		  position: fixed; /* Stay in place */
		  z-index: 1; /* Sit on top */
		  left: 0;
		  top: 0;
		  width: 100%; /* Full width */
		  height: 100%; /* Full height */
		  overflow: auto; /* Enable scroll if needed */
		  background-color: #474e5d;
		  padding-top: 50px;
		}

		/* Modal Content/Box */
		.modal-content {
		 
		  background-color: #fefefe;
		  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
		  border: 1px solid #888;
		  width: 50%; /* Could be more or less, depending on screen size */
		}

		.add{
			float: right;
			width: 300px;
		}

		/* Style the horizontal ruler */
		hr {
		  border: 1px solid #f1f1f1;
		  margin-bottom: 25px;
		}
		 
		/* The Close Button (x) */
		.close {
		  position: absolute;
		  right: 35px;
		  top: 15px;
		  font-size: 40px;
		  font-weight: bold;
		  color: #f1f1f1;
		}

		.close:hover,
		.close:focus {
		  color: #f44336;
		  cursor: pointer;
		}

		/* Clear floats */
		.clearfix::after {
		  content: "";
		  clear: both;
		  display: table;
		}

		/* Change styles for cancel button and signup button on extra small screens */
		@media screen and (max-width: 300px) {
		  .cancelbtn, .signupbtn {
			 width: 100%;
		  }
		}
		body {
		  font-family: Arial;
		}

		* {
		  box-sizing: border-box;
		}

		.example{
			float:left;
		}
		form.example input[type=text] {
		  text-align: left;
		  font-size: 12px;
		  border: 1px solid grey;
		  background: #f1f1f1;
		  float:left;
		  width:500px;
		}


		form.example::after {
			text-align: left;
		  content: "";
		  clear: both;
		  display: table;
		}
		table, th, td {
		border: 1px solid black;
		 padding: 7px;
		}
		.scrollit {
		overflow:auto;
		height:300px;
		width:600px;
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
                        <a class="nav-item nav-link " id="nav-home-tab"  href="home.php" role="tab" aria-controls="nav-home" aria-selected="true">Home</a>
                        <a class="nav-item nav-link" id="nav-about-tab"  href="about.php" role="tab" aria-controls="nav-about" aria-selected="false">About</a>
                        <a class="nav-item nav-link " id="nav-services-tab"  href="services.php" role="tab" aria-controls="nav-services" aria-selected="false">Services</a>
                        <a class="nav-item nav-link" id="nav-news-tab"  href="news.php" role="tab" aria-controls="nav-news" aria-selected="false">News</a>
                        <a class="nav-item nav-link" id="nav-contacts-tab"  href="login.php" role="tab" aria-controls="nav-contacts" aria-selected="false">Contacts</a>
                        <a class="nav-item nav-link active" id="nav-users-tab"  href="users.php" role="tab" aria-controls="nav-users" aria-selected="false">Users</a>
						<a class="nav-item nav-link" id="nav-curl-tab" href="curlUsers.php" role="tab" aria-controls="nav-curl" aria-selected="false">View Users</a>

                     </div>
                  </nav>
                  <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                     <div class="tab-pane fade show active" id="nav-users" role="tab" aria-labelledby="nav-users-tab">

                    

<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;" id="add">Add User</button>

<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content" action="/addUser.php" method="post">
    <div class="container">
      <h1>Add user</h1>
      <p>Please fill in this form to add user</p>
      <hr>
      <label for="fname"><b>First Name</b></label>
      <input type="text" placeholder="Enter First Name" name="fname" required>

      <label for="lname"><b>Last Name</b></label>
      <input type="text" placeholder="Enter Last Name" name="lname" required>

      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>

      
      <label for="address"><b>Address</b></label>
      <input type="text" placeholder="Enter Home Address" name="address" required>
    
      <label for="hphone"><b>Home Phone</b></label>
      <input type="text" placeholder="Enter Home Phone" name="hphone" required>

      <label for="lphone"><b>Cell Phone</b></label>
      <input type="text" placeholder="Enter Cell Phone" name="lphone" required>

    
      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" class="signupbtn">Add</button>
      </div>
    </div>
  </form>
</div>

<br>
<h4> or </h4>
<form class="example" action="/users.php"  method="post" >
  <input type="text" placeholder="Enter first name or Last name or cell phone or email address or home phone "   name="search">
  <br>
  <input type="submit" value="search" name="submit_btn">
</form>
        
<?php
require "dbConnect.php";
?>
<?php
if (isset($_POST['submit_btn'])) {
    
    $sql    = "SELECT fname,lname,email,cphone,hphone,HomeAddress FROM company_users where fname like '%" . $_POST["search"] . "%'  OR  lname like '%" . $_POST["search"] . "%'  OR   Cphone like '%" . $_POST["search"] . "%' 
       OR   hphone like '%" . $_POST["search"] . "%' OR    hphone like '%" . $_POST["search"] . "%'  OR  email like '%" . $_POST["search"] . "%'  ";
    $result = $conn->query($sql);
    

    echo '<div class="scrollit"><table style="width:100%"><tr><th>First Name</th><th>Last Name</th><th>Email</th><th>Cell Phone</th><th>Home Phone</th><th>Address</th></tr>';
    while ($row = $result->fetch_assoc()) {
        echo '<tr><th>';
        echo $row["fname"];
        echo '</th><th>';
        echo $row["lname"];
        echo '</th><th>';
        echo $row["email"];
		echo '</th><th>';
        echo $row["cphone"];
		echo '</th><th>';
        echo $row["hphone"];
		echo '</th><th>';
        echo $row["HomeAddress"];
        echo '</th></tr>';
    }
    echo '</table></div>';
}

?>        


<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it 
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

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