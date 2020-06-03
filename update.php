<?php 
 
require_once 'db_connect.php';
 
if($_POST) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $pid = $_POST['pid'];
    $gpa = $_POST['gpa'];
 
    $id = $_POST['id'];
 
    $sql = "UPDATE students SET fname = '$fname', lname = '$lname', PersonalID = '$pid', GPA = '$gpa' WHERE id = {$id}";
    if($con->query($sql) === TRUE) {
        echo "<p>Succcessfully Updated</p>";
        echo "<a href='edit.php?id=".$id."'><button type='button'>Back</button></a>";
        echo "<a href='adminHome.php'><button type='button'>Home</button></a>";
    } else {
        echo "Erorr while updating record : ". $con->error;
    }
 
    $con->close();
 
}
 
?>