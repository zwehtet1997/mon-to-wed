<?php
session_start();

if (isset($_POST['btnsubmit'])) 
{
    $username = $_POST['txtusername'];
    $password = $_POST['txtpassword'];

    $_SESSION["uname"] = $username;
    $_SESSION["pass"] = $password;

    echo "<script>alert('User Login Successful!')</script>";
    echo "<script>location='exe5sessionfromform.php'</script>";
}

// if (isset($_POST['btnsubmit'])) 
// {
//     setcookie(time()+60);
//     $username = $_POST['txtusername'];
//     $password = $_POST['txtpassword'];
//     // $cookie_name="UserName";
//     // $cookie_value="Mg Mg";
//     $cookie_username = $username;
//     $cookie_password = $password;
// $_COOKIE
// }
// echo $cookie_username;
// echo "<br>";
// echo $cookie_password;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <table border="1">
            <tr>
                <td>
                    User Name
                </td>
                <td>
                    <input type="text" placeholder="Enter UserName" name="txtusername" required>
                </td>
            <tr>
                <td>
                    Password
                </td>
                <td>
                    <input type="password" placeholder="Enter Password" name="txtpassword" required>
                </td>
            </tr>

            <tr>
                <td colspan="2">
                    <input type="submit" name="btnsubmit" value="Submit">
                </td>
            </tr>

            </tr>
        </table>
    </form>
</body>
</html>