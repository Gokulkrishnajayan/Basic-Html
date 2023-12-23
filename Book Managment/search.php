<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body align="center">
    <div>
    <h2>Library Management System</h2>
    <form action="#" method="post">
        Enter title:
        <input type="text" name="search" size="48">
        <br><br>
        <input type="submit" value="Submit">
        <button onclick="window.location.href='index.php';" type="button">Back</button>
    </form>
    <br><br>
<?php
$con = mysqli_connect("localhost", "root", "", "mca");
if (!$con) {
    echo "Not connected to server";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    extract($_POST);
    if (empty($search)) {
        echo "<script>alert('fields cannot be empty')</script>";
    } 
    else {
        $query = "select * from books where title='$search'";
        $result = mysqli_query($con, $query);
        if (mysqli_num_rows($result) > 0) {
            while ($rows = mysqli_fetch_assoc($result)) {
 ?>
    <table border="2" align="center" cellpadding="5">
        <tr>
            <th>Acccession number</th>
            <th>Title</th>
            <th>Author</th>
            <th>Edition</th>
            <th>Publication</th>
        </tr>
        <tr>
            <td><?php echo $rows["acc_no"]; ?></td>
            <td><?php echo $rows["title"]; ?></td>
            <td><?php echo $rows["author"]; ?></td>
            <td><?php echo $rows["edition"]; ?></td>
            <td><?php echo $rows["publication"]; ?></td>
        </tr>
    </table>
    </div>
    <div>
<?php
           }
        } 
        else {
            echo "No Books Found by the name $search";
        }

    }
}
?>

    </div>
</body>
</html>