<?php
$connect = mysqli_connect("localhost","root","","laptopsale");

if (isset($_POST['btnsignup'])) 
{
    $cname = $_POST['txtcname'];
    $email = $_POST['txtemail'];
    $phone = $_POST['txtphone'];
    $gender = $_POST['rdogender'];
    $dob = $_POST['txtdob'];
    $pass = $_POST['txtpass'];
    $address = $_POST['txtaddress'];
    $regionid = $_POST['cboregion'];
    $chkhobby = $_POST['chk'];
    $chk = " ";
    foreach ($chkhobby as $chkhb) 
    {
        $chk .= $chkhb." , ";
    }
    
    $profilepic = $_FILES['txtprofile']['name'];
    $folder = "img/";
    if ($profilepic) 
    {
        $filename= $folder."".$profilepic;
        $copy = copy($_FILES['txtprofile']['tmp_name'],$filename);
        if (!$copy) 
        {
            exit("Error occur in storing image!");
        }
    }

    $chkemail = "Select * from customer where Email = '$email'";
    $runchkemail = mysqli_query($connect,$chkemail);
    $count = mysqli_num_rows($runchkemail);
    if ($count == 0) 
    {
        $register = "Insert into customer
                    (CustomerName,Email,Phone,Gender,DateOfBirth,Password,Address,ProfileImage,RegionID,Hobby)
                    values ('$cname','$email','$phone','$gender','$dob','$pass','$address','$filename','$regionid','$chk')";

        $run = mysqli_query($connect,$register);

        if ($run) 
        {
            echo "<script>alert('Customer Sign Up Successfully!')</script>";
            echo "<script>location='Day7_HomePage.html'</script>";
        }
        else
        {
            echo "<script>alert('Sry!Something want wrong!')</script>";
        }
    }
    else
    {
        echo "<script>alert('Customer Email Already Exist! Try with another Email!')</script>";
        echo "<script>location='CustomerRegister.php'</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<body>
    <h2>Sign Up Form!</h2>
    <form action="" method="POST" enctype="multipart/form-data">
        <label>Customer Name:</label>
        <input type="text" name="txtcname" placeholder="Eg:John Smith" required><br><br>

        <label>Bate Of Birth:</label>
        <input type="date" name="txtdob" required><br><br>

        <label>Password:</label>
        <input type="password" name="txtpass" placeholder="**********" required><br><br>

        <label>Email:</label>
        <input type="email" name="txtemail" placeholder="Eg:John@gmail.com" required><br><br>

        <label>Gender:</label>
        <input type="radio" name="rdogender" value="Male" checked>Male
        <input type="radio" name="rdogender" value="Female">Female<br><br>

        <label>Phone Number:</label>
        <input type="number" name="txtphone" placeholder="09*********" required style="appearance: textfield;"><br><br>

        <label>Profile Picture:</label>
        <input type="file" name="txtprofile" required"><br><br>

        <label>Region:</label>
        <select name="cboregion">
            <optgroup label="Choose Region">
                <?php
                $region = "SELECT * FROM region";
                $runquery = mysqli_query($connect,$region);
                $regioncount = mysqli_num_rows($runquery);
                for ($i=1; $i <= $regioncount ; $i++) 
                { 
                $regionfetch = mysqli_fetch_array($runquery);
                $reid = $regionfetch['RegionID'];
                $rename = $regionfetch['RegionName'];
                echo "<option value='$reid'>".$i.' - '.$rename."</option>";
                }
                ?>    
            </optgroup>
        </select><br><br>

        <label>Address:</label>
        <textarea name="txtaddress" placeholder="Eg: 100, 6th floor, yangon"></textarea><br><br>

        <label>Hobby:</label>
        <input type="checkbox" name="chk[]" value="Drawing" checked>Drawing
        <input type="checkbox" name="chk[]" value="Listen Music">Listen Music
        <input type="checkbox" name="chk[]" value="Travel">Travel<br><br>

        <input type="checkbox" name="chk1" required>I agreed Terms and Conditions.<br><br>

        <input type="submit" value="Sign Up" name="btnsignup">
        <input type="reset" value="Clear">
    </form>
</body>
</html>