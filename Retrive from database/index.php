<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retrive from database</title>
</head>
<body>
<?php
$con = mysqli_connect("localhost", "root", "", "mca");
if (!$con) {
    echo "Not connected to server";
}
else{
    $query="select * from personal";
    $result=mysqli_query($con,$query);
    if(mysqli_num_rows($result)>0){
        echo "<div align='center'>";
        echo "<h2>Personal Details</h2>";
        echo "<table border='2' cellpadding='2px'>";
        echo "<tr>";
        echo "<th>Name</th>";
        echo "<th>Email</th>";
        echo "<th>Password</th>";
        echo "<th>Phone no</th>";
        echo "</tr>";
        while ($rows = mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<td>".$rows['name']."</td>";
            echo "<td>".$rows['email']."</td>";
            echo "<td>".$rows['password']."</td>";
            echo "<td>".$rows['phone_no']."</td>";
            echo "</tr>";
        }
        echo "</table></div>";    
    }
    else{
        echo "Details empty";
    }
}
?>

</body>
</html>