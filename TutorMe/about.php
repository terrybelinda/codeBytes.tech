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
                        <a class="nav-item nav-link " id="nav-home-tab" href="home.php" role="tab" aria-controls="nav-home" aria-selected="false">Home</a>
                        <a class="nav-item nav-link active" id="nav-about-tab"  href="about.php" role="tab" aria-controls="nav-about" aria-selected="true">About</a>
                        <a class="nav-item nav-link" id="nav-services-tab"  href="services.php" role="tab" aria-controls="nav-services" aria-selected="false">Services</a>
                        <a class="nav-item nav-link" id="nav-news-tab"  href="news.php" role="tab" aria-controls="nav-news" aria-selected="false">News</a>
                        <a class="nav-item nav-link" id="nav-contacts-tab"  href="login.php" role="tab" aria-controls="nav-contacts" aria-selected="false">Contacts</a>
						<a class="nav-item nav-link" id="nav-users-tab"  href="users.php" role="tab" aria-controls="nav-users" aria-selected="false">Users</a>
						<a class="nav-item nav-link" id="nav-curl-tab" href="curlUsers.php" role="tab" aria-controls="nav-curl" aria-selected="false">View Users</a>

                     </div>
                  </nav>
                  <div class="tab-pane fade show active" id="nav-about" role="tab" aria-labelledby="nav-about-tab">
                     <b>TutorMe was founded in the year 2005 by Larry and Elissa Smith to help school-going students to develop a love for learning Math. </b>As education researchers investigating the increase in the number of high school drop-outs since the turn of the century, they realized that one of the most prominent pain-points of students who dropped out was that they found it hard to follow the Math syllabus that was taught in their schools. <b>Larry and Elissa decided that the most natural solution for this was to develop a very student-friendly, self-paced educational tool that would serve as a learning aid for students who find it hard to grasp Math taught in school. The aid they developed was called TutorMe.</b>
                     <br>
                     In the year since its first release, TutorMe has steadily grown from a pilot program used by a handful of students to a widely popular service used by over 100,000 students across the country.
                  </div>
               </div>
            </div>
         </div>
      </section>
      <img src="http://terrylinda1379278.ipage.com/TutorMe/Img/footer.png" alt="Simply Easy Learning" >
      <!-- ./Tabs -->
   </body>
</html>