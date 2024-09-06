<?php

//set connection variables
$insert = false;
if(isset($_POST['email'])){
$server = "localhost";
$username = "root";
$password = "";

//creating a database connection
$con = mysqli_connect($server,$username,$password);

//check for connection success
if(!$con)
{
    die("connection to this database failed due to ".mysqli_connect_error());
}

$email = $_POST['email'];

$sql = "INSERT INTO`project3`.`project3` (`email`) VALUES ('$email');";


if($con->query($sql)  == true)
{
    //flag for successful insertion
    $insert = true;
    // echo "successfully inserted";
}
else{
    echo "ERROR : $sql <br> $con->error";
}
//close the database connection
$con->close();
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to signup form</title>
    <link rel="stylesheet" href="style5.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Gotu&display=swap" rel="stylesheet">
</head>
<body>
<!-- <img  class="bg" src="download.jpeg" alt="cutm"> -->
    <div class="container">
        <h1>Welcome to signup form</h1>
        <P>Enter your details and submit this form to signup</P>
        <?php
        if($insert == true){
        echo "<p class = 'submitmsg'>Thanks for submitting your form.We are happy for siginging up</p>";
        }
?>

        <form action="index4.php" method="post">

   
            <input type="email" name="email" id="email" placeholder="Enter your email">
         
            <button class="btn">Submit</button>


    
    
        </form>
    
    </div>

   









    <script src="index.js"></script>
</body>
</html>


