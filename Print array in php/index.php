<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Cricketer</title>
</head>
<?php
$cricketer=array();
$cricketer=array("a"=>"Kuldeep Yadav",
"b"=>"Cheteshwar",
"c"=>"Virat Kohli",
"d"=>"Axar Patel",
"e"=>"Ravichandran Ashwin",
"f"=>"Shubman Gill",
"g"=>"Arjun Tendulkar",);
?>
<body>
<center>
    <table border="2" width="500" height="500" align="center">
        <tr bgcolor="cyan">
            <th>Name of cricketers</th>
        </tr>
        <tr>
            <td align="center"><?php echo $cricketer["a"];?></td>
        </tr>
        <tr>
            <td align="center"><?php echo $cricketer["b"];?></td>
        </tr>
        <tr>
            <td align="center"><?php echo $cricketer["c"];?></td>
        </tr>
        <tr>
            <td align="center"><?php echo $cricketer["d"];?></td>
        </tr>
        <tr>
            <td align="center"><?php echo $cricketer["e"];?></td>
        </tr>
        <tr>
            <td align="center"><?php echo $cricketer["f"];?></td>
        </tr>
        <tr>
            <td align="center"><?php echo $cricketer["g"];?></td>
        </tr>
    </table>
</center>
</body>
</html>