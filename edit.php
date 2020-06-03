<?php 
 
require_once 'db_connect.php';
 
if($_GET['id']) {
    $id = $_GET['id'];
 
    $sql = "SELECT * FROM Students WHERE id = {$id}";
    $result = $con->query($sql);
 
    $data = $result->fetch_assoc();
 
    $con->close();
 
?>
 
<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
 
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
    <legend>Edit Student</legend>
 
    <form action="update.php" method="post">
        <table cellspacing="0" cellpadding="0">
            <tr>
                <th>First Name</th>
                <td><input type="text" name="fname" placeholder="First Name" value="<?php echo $data['fname'] ?>" /></td>
            </tr>     
            <tr>
                <th>Last Name</th>
                <td><input type="text" name="lname" placeholder="Last Name" value="<?php echo $data['lname'] ?>" /></td>
            </tr>
            <tr>
                <th>Personal ID</th>
                <td><input type="text" name="pid" placeholder="Personal ID" value="<?php echo $data['PersonalID'] ?>" /></td>
            </tr>
            <tr>
                <th>GPA</th>
                <td><input type="text" name="gpa" placeholder="GPA" value="<?php echo $data['GPA'] ?>" /></td>
            </tr>
            <tr>
                <input type="hidden" name="id" value="<?php echo $data['ID']?>" />
                <td><button type="submit">Save Changes</button></td>
                <td><a href="adminHome.php"><button type="button">Back</button></a></td>
            </tr>
        </table>
    </form>
 
</fieldset>
 
</body>
</html>
 
<?php
}
?>