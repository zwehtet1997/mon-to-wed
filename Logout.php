<?php
session_start();
session_destroy();

echo "<script>alert('User Logout Successful!')</script>";
echo "<script>location='Day7_HomePage.html'</script>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
</head>
<body>
    
</body>
</html>