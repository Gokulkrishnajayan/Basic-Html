<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>electric bill</title>
</head>

<body>
    <center>
        <br><br><br>
        <h1>Registration form</h1>
        <form action="#" method="post">
            <table>
                <tr>
                    <td>
                        Name
                    </td>
                    <td>
                        :<input type="text" name="name"><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        Consumer Number
                    </td>
                    <td>
                        :<input type="text" name="cnum"><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        Unit Consumed
                    </td>
                    <td>
                        :<input type="number" name="unit"><br>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <button type="submit" name="submit">Submit</button>
                        <button type="reset">Reset</button>
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    extract($_POST);
    function caluculate_bill($unit)
    {
        if ($unit <= 100) {
            $bill = $unit * 4;
        } elseif ($unit > 100 && $unit < 200) {
            $temp = 100 * 4;
            $rem_unit = $unit - 100;
            $bill = $temp + ($rem_unit * 5);
        } else {
            $temp = (100 * 4) + (100 * 5) + (100 * 6);
            $rem_unit = $unit - 200;
            $bill = $temp + ($rem_unit * 6);
        }
        return number_format((float) $bill, 2, '.', '');
    }

    // Fields are empty then no output printed
    if (empty($name) || empty($cnum) || empty($unit)) { 
        echo "<script>alert('Please fill out all fields!')</script>";
    } 
    else {
        echo "<center><br><br>";
        echo "-----------------------------------------------------------------";
        echo "<h3>Kerala State Electricity Board(KSEB)</h3>";
        echo "<br>";
        echo "Consumer Name:" . $name . "<br>";
        echo "Consumer Number:" . $cnum . "<br>";
        echo "Unit Consumed:" . $unit . "<br>";
        $result = caluculate_bill($unit);
        echo "<h4>Total:$" . $result . "</h4><br>";
        echo "-----------------------------------------------------------------";
        echo "</center>";
    }
}
?>

</html>