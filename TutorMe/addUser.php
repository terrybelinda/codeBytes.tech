<?php require "dbConnect.php"?>
<?php 
   
    $sql = "INSERT INTO company_users VALUES ('".$_POST["fname"]."', '".$_POST["lname"]."', '".$_POST["email"]."', '".$_POST["address"]."', '".$_POST["hphone"]."', '".$_POST["lphone"]."')";
    $conn->query($sql);
    $conn->close();
    header("location: users.php");
    
?>