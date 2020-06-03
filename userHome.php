<?php require_once 'db_connect.php'; 
session_start();
if (!isset($_SESSION['loggedin'])) {
	header('Location: firstPage.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Project - Public School</title>

    <style type="text/css">
        .manageStudents {
            width: 70%;
            margin: auto;
        }
        table {
            width: 100%;
            margin-top: 20px;
        }
        .logoutForm {
            position: absolute;
            top:0;
            right: 0;
            margin-top: 5px;
            margin-right: 5px;
        }
    </style>
</head>

<body>
<div class="manageStudents">
    <table border="1" cellspacing="0" cellpadding="0">
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Personal ID</th>
                <th>GPA</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $sql = "SELECT * FROM Students WHERE active = 1";
            $result = $con->query($sql);
 
            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                        <td>".$row['fname']."</td>
                        <td>".$row['lname']."</td>
                        <td>".$row['PersonalID']."</td>
                        <td>".$row['GPA']."</td>
                    </tr>";
                }
            } else {
                echo "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>
<form action="logout.php" class="logoutForm">
    <button type="submit">Logout</button>
</form>
</body>
</html>