<?php
$mysqli = mysqli_connect("127.0.0.1:3306", "root", "", "test");
if (mysqli_connect_errno($mysqli)) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>

<h3> Hi <?php echo htmlspecialchars($_POST['username']); ?>.</h3>
<h3> Here's everyone else here.</h3>

<?php
/* list all other users of database, then add new user */
$query = "SELECT * FROM users";
if ($res = mysqli_query($mysqli, $query)){
    /* fetch associative array */
    while ($row = mysqli_fetch_assoc($res)) {
        printf ("%s: %s %s", $row["username"], $row["first_name"], $row["last_name"]);
        ?></br><?php /* just a newline between results (really janky? probably a better way to do this) */
    }
    /* free result set */
    mysqli_free_result($res);
}

/*adding new user */
$formatquery = "INSERT INTO users VALUES (\"%s\", \"%s\", \"%s\")";
$query = sprintf($formatquery, htmlspecialchars($_POST['username']), htmlspecialchars($_POST['firstName']), htmlspecialchars($_POST['lastName']));
#echo $query;
mysqli_query($mysqli, $query);

/* close connection */
mysqli_close($mysqli);
?>
