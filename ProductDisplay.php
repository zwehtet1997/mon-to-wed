<?php
session_start();
if (!isset($_SESSION['cname'])) 
{
    echo "<script>alert('Customer Login First')</script>";
    echo "<script>location='CustomerLogin.php'</script>";
}
else 
{
    $cname = $_SESSION['cname'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Display</title>
</head>
<body>
    <?php
        echo "Welcome: $cname";
        echo $_SESSION['gender'];
        echo $_SESSION['email'];
        echo $_SESSION['phone'];
    ?>
</body>
</html>