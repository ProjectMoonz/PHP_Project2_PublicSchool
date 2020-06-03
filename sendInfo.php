<?php 

$fullName = $_POST['fullName'];
$phone = $_POST['phone'];
$question = $_POST['question'];

$numpattern="/^([0-9]+)$/";

require_once 'db_connect.php';

if ( !isset($_POST['fullName'], $_POST['phone'], $_POST['question']) ) {
	exit('Please fill all the information!');
}

if(is_numeric($phone)) {
    $sql = "INSERT INTO questioninfo (fullName, phone, question) VALUES ('$fullName', '$phone', '$question')";
    if($con->query($sql) === TRUE) {
        echo "<p>Successfully sent message</p>";
        echo "<a href='firstPage.php'><button type='button'>Home</button></a>";
    } else {
        echo "Error adding record : " . $con->error;
    }
     
    $con->close();
} else {
    echo "<p>Please enter only numbers for Phone!</p>";
};


 
?>
