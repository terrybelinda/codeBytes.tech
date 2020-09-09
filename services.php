<?php require "dbConnect.php"?>
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
	height:500px; 
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
						<a class="nav-item nav-link " id="nav-home-tab"  href="home.php" role="tab" aria-controls="nav-home" aria-selected="true">Home</a>
						<a class="nav-item nav-link" id="nav-about-tab"  href="about.php" role="tab" aria-controls="nav-about" aria-selected="false">About</a>
						<a class="nav-item nav-link active" id="nav-services-tab"  href="services.php" role="tab" aria-controls="nav-services" aria-selected="false">Services</a>
						<a class="nav-item nav-link" id="nav-news-tab"  href="news.php" role="tab" aria-controls="nav-news" aria-selected="false">News</a>
						<a class="nav-item nav-link" id="nav-contacts-tab"  href="login.php" role="tab" aria-controls="nav-contacts" aria-selected="false">Contacts</a>
						<a class="nav-item nav-link" id="nav-users-tab"  href="users.php" role="tab" aria-controls="nav-users" aria-selected="false">Users</a>
						<a class="nav-item nav-link" id="nav-curl-tab" href="curlUsers.php" role="tab" aria-controls="nav-curl" aria-selected="false">View Users</a>

					</div>
				</nav>
				<div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
					<div class="tab-pane fade show active" id="nav-services" role="tab" aria-labelledby="nav-services-tab">
						<a href="stats.php#top" style="float: left;">click to view Recently visited products & Top 5 products </a><br><br>
						<?php
						$sql='Select * from services';
						$result= $conn->query($sql);
						echo "<ul>";
						while ($row = $result->fetch_assoc()) { 
							echo "<li><a href='viewServices.php?id=".$row["id"]."'>".$row['service_name']."</a></li>";
							
						} 
						echo "</ul>";
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
