<!DOCTYPE html>
<html lang="da" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title> lakola-design forside </title>
        <link rel="stylesheet" href="../CSS/LAKOLA.CSS"/>
    </head>

test test 333
<?php

echo"$_GET['name']";
echo"$_GET['email']";
echo"$_GET['besked']";
echo"test test test";
if (mail(
    "koch412laura@gmail.com",
    $_GET['name']  "har sendt en besked",
    $_GET['besked'].
    "From: " $_GET['Email']
    )){
    //You need to redirect
    header("kontakt.html");
    exit();
   }
  else{
   echo "Din email blev ikke sendt";
  }

?>
</html>