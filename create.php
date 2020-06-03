<!DOCTYPE html>
<html>
<head>
    <title>Add Member</title>
 
    <style type="text/css">
        fieldset {
            margin: auto;
            margin-top: 100px;
            width: 50%;
        }
        table tr th {
            padding-top: 20px;
        }
    </style>
 
</head>
<body>
 
<fieldset>
    <legend>Add Member</legend>
 
    <form action="create.php" method="post">
        <table cellspacing="0" cellpadding="0">
            <tr>
                <th>First Name</th>
                <td><input type="text" name="fname" placeholder="First Name" /></td>
            </tr>     
            <tr>
                <th>Last Name</th>
                <td><input type="text" name="lname" placeholder="Last Name" /></td>
            </tr>
            <tr>
                <th>Personal ID</th>
                <td><input type="text" name="pid" placeholder="Personal ID" /></td>
            </tr>
            <tr>
                <th>GPA</th>
                <td><input type="text" name="gpa" placeholder="GPA" /></td>
            </tr>
            <tr>
                <td><button type="submit">Save Changes</button></td>
                <td><a href="adminHome.php"><button type="button">Back</button></a></td>
            </tr>
        </table>
    </form>
 
</fieldset>
 
</body>
</html>
<?php 

require_once 'db_connect.php';
 
if($_POST) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $pid = $_POST['pid'];
    $gpa = $_POST['gpa'];
 
    $sql = "INSERT INTO students (fname, lname, PersonalID, GPA, active) VALUES ('$fname', '$lname', '$pid', '$gpa', 1)";
    if($con->query($sql) === TRUE) {
        echo "<p>New Record Successfully Created</p>";
        echo "<a href='create.php'><button type='button'>Back</button></a>";
        echo "<a href='adminHome.php'><button type='button'>Home</button></a>";
    } else {
        echo "Error " . $sql . ' ' . $connect->connect_error;
    }
 
    $con->close();
}
 
?>