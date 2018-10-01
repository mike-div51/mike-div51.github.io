<?php

// $nameErr = $emailErr = $categoryErr = $messageErr = "";
// $name = $email = $category = $priority = $message = "";

$name=$_POST["name"];
$email=$_POST["email"];
$category=$_POST["category"];
$priority=$_POST["priority"];
$copy=$_POST["copy"];
$message=$_POST["message"];



$message="Email: $email \nName: $name \nCategory: $category \nPriority: $priority \nMessage: $message";

mail( "mike@div51.com", "Email from Website", "$message");
header( "Location: index.html");
exit;
?>