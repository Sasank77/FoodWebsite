<?php

//set connection variables
$insert = false;
if(isset($_POST['name'])){
$server = "localhost";
$username = "root";
$password = "";

//creating a database connection
$con = mysqli_connect($server,$username,$password);

//check for connection success
// if(!$con)
// {
//     die("coonection to this database failed due to ".mysqli_connect_error);
// }
// echo "success connecting to the db"
//collect post variables
$name = $_POST['name'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$email = $_POST['email'];
$phone = $_POST['phone'];
// $date = $_POST['date'];
$other = $_POST['desc'];

$sql = "INSERT INTO `project2`.`project2` ( `name`, `age`, `gender`, `email`, `phone`,  `other`,`dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone','$other', current_timestamp());";

// echo $sql;

//Excecute the query
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
    <title>Welcome to tabel booking form</title>
    <!-- <link rel="stylesheet" href="style2.css"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Gotu&display=swap" rel="stylesheet">
</head>
<body>
<!-- <img  class="bg" src="download.jpeg" alt="cutm"> -->
    <div class="container">
        <h1>BOOK YOUR TABEL</h1>
        <P>Enter your details and submit this form to book your tabel</P>
        <?php
        if($insert == true){
        echo "<p class = 'submitmsg'>Thanks for submitting your form.We are happY for booking your tabel</p>";
        }
?>

        <form action="index.php" method="post">

            <input type="text" name="name" id="name" placeholder="Enter your Name">
            <input type="text" name="age" id="age" placeholder="Enter your Age">
            <input type="text" name="gender" id="gender" placeholder="Enter your Gender">
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <input type="phone" name="phone" id="phone" placeholder="Enter your Phone Number">
            <!-- <input type="datetime-local" name="date" > -->
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other information here"></textarea>
            
            <button class="btn">Submit</button>
            <!-- <button class="btn">Reset</button> -->

    
    
        </form>
    
    </div>

   









    <script src="index.js"></script>
</body>
</html>


