<?php
$conn = mysqli_connect("localhost", "root", "eiaclr", "opentutorials");
$sql = "SELECT * FROM topic LIMIT 1000";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($result)){
    echo '<h1>'.$row['title'].'</h1>';
    echo $row['description'];
}
?>