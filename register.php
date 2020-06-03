<?php
require_once 'db_connect.php';

$user = $_POST['registerUsername'];
$pass = $_POST['registerPassword'];
$confirmpass = $_POST['confirmRegisterPassword'];
$pattern = ' /^.*(?=.{6,})(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).*$/ ';

if($pass === $confirmpass) {
    if(preg_match($pattern,$pass)){
        $sql = "INSERT INTO usercredentials (username, password) VALUES ('$user', '$pass')";
        if($con->query($sql) === TRUE) {
            echo "<p>New User Successfully Created</p>";
            echo "<a href='adminHome.php'><button type='button'>Home</button></a>";
        } else {
            echo "Error " . $sql . ' ' . $connect->connect_error;
        }
        $con->close();
    }
} else {
    echo "<p>Passwords do not match!</p>";
};
?>