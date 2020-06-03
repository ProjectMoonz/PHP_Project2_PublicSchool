<?php 
 
require_once 'db_connect.php';
 
if($_POST) {
    $id = $_POST['id'];
 
    $sql = "DELETE FROM students WHERE ID = {$id}";
    if($con->query($sql) === TRUE) {
        echo "<p>Successfully removed!!</p>";
        echo "<a href='adminHome.php'><button type='button'>Back</button></a>";
    } else {
        echo "Error updating record : " . $con->error;
    }
 
    $con->close();
}
 
?>