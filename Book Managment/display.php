<?php
$con = mysqli_connect("localhost", "root", "", "mca");
if (!$con) {
    echo "Not connected to server";
}
else{
    $query="select * from books";
    $result=mysqli_query($con,$query);
    if(mysqli_num_rows($result)>0){
        echo '<button onclick="window.location.href=\'index.php\';" type="button">Back</button>';
        echo "<div align='center'>";
        echo "<h2>Library Books</h2>";
        echo "<table border='2' cellpadding='2px'>";
        echo "<tr>";
        echo "<th>Accession number</th>";
        echo "<th>Title</th>";
        echo "<th>Author</th>";
        echo "<th>Edition</th>";
        echo "<th>Publication</th>";
        echo "</tr>";
        while ($rows = mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<td>".$rows['acc_no']."</td>";
            echo "<td>".$rows['title']."</td>";
            echo "<td>".$rows['author']."</td>";
            echo "<td>".$rows['edition']."</td>";
            echo "<td>".$rows['publication']."</td>";
            echo "</tr>";
        }
        echo "</table></div>";    
    }
    else{
        echo "Library is empty";
    }
}
?>