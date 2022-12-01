<?php

   // $connection = mysqli_connect('localhost','root','','book_db');
   $host = "localhost";
$dbname = "book_db";
$username = "root";
$password = '';

$mysqli = new mysqli( $host, 
                     $username, 
                     $password, 
                     $dbname);
//  echo ("hi");
if($mysqli->connect_errno)
{
    die("Connection error: " . $mysqli->connect_error);
}

return $mysqli;

   // if(isset($_POST['send'])){
   //    $name = $_POST['name'];
   //    $email = $_POST['email'];
   //    $phone = $_POST['phone'];
   //    $address = $_POST['address'];
   //    $location = $_POST['location'];
   //    $guests = $_POST['guests'];
   //    $arrivals = $_POST['arrivals'];
   //    $leaving = $_POST['leaving'];

   //    $request = " insert into book_form(name, email, phone, address, location, guests, arrivals, leaving) values('$name','$email','$phone','$address','$location','$guests','$arrivals','$leaving') ";
   //    mysqli_query($connection, $request);

   //    header('location:book.php'); 

   // }else{
   //    echo 'something went wrong please try again!';
   // }

?>