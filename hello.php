<!DOCTYPE HTML>
<html>
    <head>
        <!-- <link href="https://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet"> -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:900i,500" rel="stylesheet">
        <!-- <link href="https://fonts.googleapis.com/css?family=Roboto:500" rel="stylesheet"> -->
        <link rel="stylesheet" href="css/custom.css" />
    </head>

<?php
if (strpos($_SERVER['HTTP_USER_AGENT'], 'Trident') == TRUE || strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') == TRUE) {
?>
    <h3> Word on the street is you're using IE </h3>
    <p>You are using Internet Explorer</p>
<?php
} else if (strpos($_SERVER['HTTP_USER_AGENT'], 'Edge') == TRUE) {
?>
    <h3> Word on the street is you're using Edge</h3>
    <p>You are using Edge</p>
<?php
} else {
?>
    <h1> Word on the street is you're not using IE or Edge</h1>
    <p>You are not using Edge or IE</p>
<?php
}
?>

<form action="action.php" method="post">
<p>Username: <input type="text" name="username" /></p>
<p>First name: <input type="text" name="firstName" /></p>
<p>Last Name: <input type="text" name="lastName" /></p>
<p><input type="submit" /></p>
</form>

</html>
