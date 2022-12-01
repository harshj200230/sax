<?php
session_start();
$mysqli = require __DIR__ . '/book_form.php';
$sql = "INSERT INTO book_form(id,name,email,phone,address,location,	guests,arrivals,leaving)
        VALUES (?,?,?,?,?,?,?,?,?)";

$stmt = $mysqli->stmt_init();

if(!$stmt->prepare($sql))
{
    die("SQL error");
}

$stmt->bind_param("sssi",
$_POST['send'],
 $_POST['name'],
  $_POST['email'],
$_POST['phone'],
 $_POST['address'],
 $_POST['location'],
 $_POST['guests'],
 $_POST['arrivals'],
$_POST['leaving']);

// if($stmt->execute())
// {
//     header("Location: book_form.php");
//     exit;
// }
// else
// {
//     die($mysqli->error . " " . $mysqli->errno);
// }
// if(isset($_POST['send'])){
//     $name = $_POST['name'];
//     $email = $_POST['email'];
//     $phone = $_POST['phone'];
//     $address = $_POST['address'];
//     $location = $_POST['location'];
//     $guests = $_POST['guests'];
//     $arrivals = $_POST['arrivals'];
//     $leaving = $_POST['leaving'];

//     $request = " insert into book_form(name, email, phone, address, location, guests, arrivals, leaving) values('$name','$email','$phone','$address','$location','$guests','$arrivals','$leaving') ";
//     mysqli_query($connection, $request);

//     header('location:book.php'); 

//  }else{
//     echo 'something went wrong please try again!';
//  }


?>
