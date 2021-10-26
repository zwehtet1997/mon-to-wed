<?php
session_start();
$connect = mysqli_connect("localhost","root","","laptopsale");

if (isset($_POST['btnsignin'])) 
{
    $email = $_POST['txtemail'];
    $pass = $_POST['txtpass'];

    $loginquery = "select * from Customer where Email = '$email' And Password = '$pass'";
    $run = mysqli_query($connect,$loginquery);
    $count = mysqli_num_rows($run);
    if ($count == 0) 
    {
        echo "<script>alert('Email or Password may be wrong. Pls Try Again!')</script>";
        echo "<script>location='CustomerLogin.php'</script>";
    }
    else 
    {
        $data = mysqli_fetch_array($run);
        
        $_SESSION['cname'] = $data['CustomerName'];
        $_SESSION['email'] = $data['Email'];
        $_SESSION['phone'] = $data['Phone'];
        $_SESSION['gender'] = $data['Gender'];

        echo "<script>alert('Customer Login Successful!')</script>";
        echo "<script>location='Day7_HomePage.html'</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer SignIn</title>
</head>
<body>
    <form action="" method="POST">
        <fieldset style="margin: 50px 400px;">
        <legend>Customer Sign In</legend>
            <table  align="center">
                <tr>
                    <td>Email: </td>
                    <td><input type="email" name="txtemail" placeholder="Eg: John@gmail.com" required></td>
                </tr>
                <tr>
                    <td>Password: </td>
                    <td><input type="password" name="txtpass" placeholder="***********" required></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" value="Sign In" name="btnsignin">
                    </td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>
</html>