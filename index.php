<?php

$firstname=$_REQUEST['first name'];
$lastname=$_REQUEST['last name'];
$gender=$_REQUEST['gender'];
$email=$_REQUEST['email'];
$password=$_REQUEST['paw'];
$checkbox=$_REQUEST['check'];


if(isset($_POST['btntest']))

{

$host="localhost";
$user ="root";
$password="";
$db="project";

$conn= mysqli_connect($host,$user,$password,$db);



$insert="insert into customers_list values('$firstname','$lastname','$gender','$email','$paw','$check')";

$mysqli_query($conn,$insert);

if($conn){
    echo("<h1 style='color:green;'>Your registration is done!<h1>");
}
else{
    echo("<h1 style='color:red;'>Your registration is failed!<h1>");
}


}







?>