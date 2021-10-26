<?php
session_start();

if (isset($_SESSION["UserID"])) 
{
    $uid = $_SESSION["UserID"];

    // SQL Query
    // ---------
    // Select * from User where UserID = $uid

    echo "Welcome ".$_SESSION["UserName"]; 
}
else
{
    echo "<script>alert('User Must Login First.')</script>";
    echo "<script>location='exe1.php'</script>";
}

if(isset($_POST['btncal']))
{
    // $studentname = $_POST['txtsname'];
    // $mark = $_POST['txtmark'];
    // if($mark > 0 && $mark < 40)
    // {
    //     echo $studentname."<br>";
    //     echo "Exam Fail";
    // }
    // elseif($mark > 39 && $mark <= 100)
    // {
    //     echo $studentname."<br>";
    //     echo "Exam Pass";
    // }
    // else
    // {
    //     echo "<script>window.alert('Invalid Mark.')</script>";
    //     echo "<script>window.location='exe2.php'</script>";
    // }

    $firstnum = $_POST['txtfnum'];
    $secondnum = $_POST['txtsnum'];
    $operator = $_POST['txtoper'];
    $ans;
    switch($operator)
    {
        case "+": $ans = $firstnum + $secondnum;
        echo $ans;
        break;
        case "-": $ans = $firstnum - $secondnum;
        echo $ans;
        break;
        case "*": $ans = $firstnum * $secondnum;
        echo $ans;
        break;
        case "/": $ans = $firstnum / $secondnum;
        echo $ans;
        break;
        default : echo "Invalid Operator Sign.";
    }

}
echo "<br>";
echo $UserName."<br>";

echo $_SESSION["UserName"];
echo $_SESSION["Password"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 2</title>
</head>
<body>
    <h2>Student Marks Sheet!</h2>
    <form action="" method="POST">
        <!-- <label>Student Name</label><br>
        <input type="text" name="txtsname" placeholder="Eg: Mg Mg" required><br>

        <label>Student Mark</label><br>
        <input type="number" name="txtmark" placeholder="Eg: 100" style="appearance: textfield;" required><br> -->

        <label>Enter Fisrt Number</label><br>
        <input type="number" name="txtfnum" placeholder="Eg: 10" required style="appearance: textfield;"><br>
        <label>Enter Second Number</label><br>
        <input type="number" name="txtsnum" placeholder="Eg: 20" required style="appearance: textfield;"><br>
        <label>Enter Operator Sign</label><br>
        <input type="text" name="txtoper" placeholder="Eg: +" required><br>

        <input type="submit" value="Calculate" name="btncal">
    </form>
</body>
</html>