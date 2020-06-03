<?php 
 
require_once 'db_connect.php';
 
if($_GET['id']) {
    $id = $_GET['id'];
 
    $sql = "SELECT * FROM students WHERE ID = {$id}";
    $result = $con->query($sql);
    $data = $result->fetch_assoc();
 
    $con->close();
?>
 
<!DOCTYPE html>
<html>
<head>
    <title>Remove Member</title>
</head>
<body>
 
<h3>Do you really want to remove ?</h3>
<form action="remove_confirm.php" method="post">
 
    <input type="hidden" name="id" value="<?php echo $data['ID'] ?>" />
    <button type="submit">Save Changes</button>
    <a href="adminHome.php"><button type="button">Back</button></a>
</form>
 
</body>
</html>
 
<?php
}
?>