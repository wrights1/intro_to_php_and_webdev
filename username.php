<!DOCTYPE HTML>
<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Muli:600" rel="stylesheet">
    <link rel="stylesheet" href="css/custom.css" />
</head>
<body>

<h2 class="title"> USERNAME GENERATOR </h2>

 <?php
    $name = "";
 ?>

<p id ="nameLine">Your new name is </p>

<div id="nameButton">
<form action="" method="post">
    <button name="click" class="click">Get Name!</button>
</form>
</div>

<?php
if(isset($_POST['click']))
{
    $name = exec('python .\username_generator\generator.py');
}
?>

<p> <?php echo $name ?> </p>