<?php
session_start();
$_SESSION["UserID"] = "Uid_00008";
$_SESSION["UserName"] = "Mg Mg";
$_SESSION["Password"] = "123";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php exercise1</title>
</head>
<body>
    <h1>This is Php Document.</h1>

    <!-- php -->
    <?php
    echo "Good Evening.";

    $UserName = "Mg Mg";
    $Password = "123";
    $Phone = "092362712";
    $Price = 12.99;
    $Qty = 2;
    $Status = true;

    echo "<br>This is username: ".$UserName.".";
    echo "<br>This is password: ".$Password.".";

    echo "<br>";
    echo $UserName."".$Password;
    echo "<br>";
    echo $Price * $Qty;
    echo "<br>";

    define("hello","My Name is Mg Mg.");
    echo hello ."<br>";

    echo $_SESSION["UserName"];
    echo $_SESSION["Password"];

    ?>

</body>
</html>