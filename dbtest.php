<?php
$mysqli = mysqli_connect("127.0.0.1:3306", "root", "", "test");
if (mysqli_connect_errno($mysqli)) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$query = "SELECT * FROM users";
if ($res = mysqli_query($mysqli, $query)){

    #$res = mysqli_query($mysqli, "");
    /* fetch associative array */
    while ($row = mysqli_fetch_assoc($res)) {
        printf ("%s: %s %s", $row["username"], $row["first_name"], $row["last_name"]);
        ?></br><?php /* just a newline between results (jank af?) */
    }

    /* free result set */
    mysqli_free_result($res);
}

/* close connection */
mysqli_close($mysqli);
?>
