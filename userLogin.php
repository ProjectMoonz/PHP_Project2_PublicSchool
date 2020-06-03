<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname="publicschool";
$con = mysqli_connect($servername, $username, $password, $dbname);

if ( mysqli_connect_errno() ) {
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

if ( !isset($_POST['userUsername'], $_POST['userPassword']) ) {
	exit('Please fill both the username and password fields!');
}

if ($stmt = $con->prepare('SELECT id, password FROM usercredentials WHERE username = ?')) {
	$stmt->bind_param('s', $_POST['userUsername']);
	$stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $password);
        $stmt->fetch();
        if ($_POST['userPassword'] === $password) {
            session_regenerate_id();
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['name'] = $_POST['userUsername'];
            $_SESSION['id'] = $id;
            header('Location: userHome.php');
	        exit;
        } else {
            echo 'Incorrect password!';
        }
    } else {
        echo 'Incorrect username!';
    }
}
    $stmt->close();
?>