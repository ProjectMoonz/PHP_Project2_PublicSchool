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

if ( !isset($_POST['adminUsername'], $_POST['adminPassword']) ) {
	exit('Please fill both the username and password fields!');
}

if ($stmt = $con->prepare('SELECT id, password FROM admincredentials WHERE username = ?')) {
	$stmt->bind_param('s', $_POST['adminUsername']);
	$stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $password);
        $stmt->fetch();
        if ($_POST['adminPassword'] === $password) {
            session_regenerate_id();
            $_SESSION['loggedinadmin'] = TRUE;
            $_SESSION['name'] = $_POST['adminUsername'];
            $_SESSION['id'] = $id;
            header('Location: adminHome.php');
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