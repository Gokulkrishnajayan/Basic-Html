<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Management System</title>
</head>
<style>
    *{
        margin:0;
        padding: 0;
    }
    #main{
        background:#80808054;
        padding:10px;
        align:center;
        text-align:center;"
    }
    button{
        padding:4px;
        align-self:right;

    }
    .button{
        padding:2px;
        width: 10%;
        text-align:center;
    }
    td{
        padding:3px;
    }
</style>
<?php
$con = mysqli_connect("localhost", "root", "", "mca");
if (!$con) {
    echo "Connection Error";
}
$acc_no = $title = $author = $edition = $publication = "";
$success = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $acc_no = $_POST['acc_no'];
    $title = $_POST['title'];
    $author = $_POST['author'];
    $edition = $_POST['edition'];
    $publication = $_POST['publication'];
    if (empty($acc_no) || empty($title) || empty($author) || empty($edition) || empty($publication)) {
        echo "<script>alert('Please fill out all fields')</script>";
    } else {
        $query = "insert into books(acc_no,title,author,edition,publication)
                  values('$acc_no','$title','$author','$edition','$publication')";
        if (mysqli_query($con, $query)) {
            $success = true;
        } else {
            echo "Error:" . $query . "<br>" . mysqli_error($con);
        }
    }
}
?>
<body>
    <div id="main">
    <a href="search.php">
    <button>Search</button></a>
    <a href="display.php">
    <button>Display</button></a>
    
    </div>
    <br><br>
    <div align="center">
        <h2>Library Management System</h2>
        <br>
        <form action="#" method="post">
        <table border="2" cellspacing="2">
            <tr>
                <td>Enter Accession number:</td>
                <td><input type="text" name="acc_no" size="48" style="height:25px;"></td>
            </tr>
            <tr>
                <td>Enter Tile:</td>
                <td><input type="text" name="title" size="48" style="height:25px;"></td>
            </tr>
            <tr>
                <td>Enter Author:</td>
                <td><input type="text" name="author" size="48" style="height:25px;"></td>
            </tr>
            <tr>
                <td>Enter Edition:</td>
                <td><input type="text" name="edition" size="48" style="height:25px;"></td>
            </tr>
            <tr>
                <td>Enter Publication:</td>
                <td><input type="text" name="publication" size="48" style="height:25px;"></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input class="button" type="submit" value="Submit">
                    <input class="button" type="reset" value="Reset">
                </td>
            </tr>
        </table>
    </form>

    <?php
    if ($success) {
        echo "<h1>Book Data insert Successfully<h1>";
    }
    ?>
    </div>
</body>
</html>