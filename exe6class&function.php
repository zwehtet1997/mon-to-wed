<?php
class Customer
{
// properties
public $cname; 

    // method - Encapsulation
    function set_name($cname)
    {
        $this->name = $cname;
    }

    function get_name()
    {
        return $this->name;
    }
}

function showname()
{
    // $unitprice = SQL Query - UnitPrice;
    // $tax = $unitprice * 0.05 ;
    // echo $tax;
    // $name = "Mg Mg";
    // echo $name;
}

// showname("Mg Mg");
// showname("Ag Ag");
// showname("Hla Hla");
// showname("Mya Mya");


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
    <?php
    // object
    $a = new Customer();
    $a->set_name('AgAg');

    echo $a->get_name();

    ?>
    <input type="text" value="<?php showname(); ?>">
</body>
</html>