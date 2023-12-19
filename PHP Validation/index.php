<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="#" method="POST">
        <table align="center">
            <h1 align="center">Registration Form</h1>
            <tr>
                <td>
                    Name
                </td>
                <td>
                    :<input type="text" name="name">
                </td>
            </tr>
            <tr>
                <td>
                    Email
                </td>
                <td>
                    :<input type="email" name="email">
                </td>
            </tr>
            <tr>
                <td>
                    Phone
                </td>
                <td>
                    :<input type="text" name="phone">
                </td>
            </tr>
            <tr>
                <td>
                    Password
                </td>
                <td>
                    :<input type="password" name="password">
                </td>
            </tr>
            <tr>
                <td>
                    Confirm Password
                </td>
                <td>
                    :<input type="password" name="cpassword">
                </td>
            </tr>
            <tr>
                <td>
                    Gender
                </td>
                <td>
                    :<input type="radio" name="gender" value="male">Male
                    <input type="radio" name="gender" value="female">Female
                </td>
            </tr>
            <tr>
                <td>
                    Address
                </td>
                <td>
                    :<textarea name="address"></textarea>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <button type="submit" name="submit">Submit</button>
                    <button type="reset">Reset</button>
                </td>

            </tr>

        </table>
    </form>

</body>
<?php
 $name='';
 $gmail='';
 $phone='';
 $password='';
 $cpassword='';
//  $gender='';
 $address='';
if (isset($_POST['submit'])){
    $con=Mysqli_Connect('localhost','root','','mca');
    if(!$con){
        echo("Connection failed!");
    }else{
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $gmail = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
    // $gender = mysqli_real_escape_string($con, $_POST['gender']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
        if(empty($name)){
            echo "<script>alert('Name field cannot be empty')</script>";
        }   
        elseif(empty($gmail)){
            echo "<script>alert('Gmail field cannot be empty')</script>";
        }
        elseif(empty($phone)){
            echo "<script>alert('Phone field cannot be empty')</script>";
        }
        elseif(empty($password)&&empty($cpassword)){
            echo "<script>alert('Password field Cannot be empty')</script>";
        //}
        // elseif(empty($gender)){
        //     echo "<script>alert('Gender field connot be empty')</script>";
        }
        elseif(empty($address)){
            echo "<script>alert('Address field connot be empty')</script>";
        }
        
    }

    
}



?>

</html>
