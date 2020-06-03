<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Project - Public School</title>
</head>
<body>
    <h1 style="text-align: center">Welcome to the Home Page of Public School No123</h1>
    <h2 style="text-align: center">Please Sign In as an Admin or User to continue</h2>
    <form action="contact.php" style="text-align: center">
        <button type="submit">Contact Us</button>
    </form>
    <br>
    <div style="text-align: center;">
        <div style="text-align: center;">
            <form action="adminLogin.php" method="post">
                <h4 style="margin-bottom: 0px;">Admin</h4>
                Username:<input type="text" name="adminUsername">
                <br>
                Password:<input type="password" name="adminPassword">
                <br>
                <input type="submit" value="Login">
            </form>
        </div>
        <br>
        <div style="text-align: center; margin-top: 10px;">
            <form action="userLogin.php" method="post">
                <h4 style="margin-bottom: 0px;">User</h4>
                Username:<input type="text" name="userUsername">
                <br>
                Password:<input type="password" name="userPassword">
                <br>
                <input type="submit" value="Login">
            </form>
        </div>
        <div style="text-align: center; margin-top: 10px;">
            <form action="register.php" method="post">
                <h4 style="margin-bottom: 0px;">Register User</h4>
                Username:<input type="text" name="registerUsername">
                <br>
                Password:<input type="password" name="registerPassword">
                <br>
                <span style="font-weight:bold">***NOTE: Password must be at least 6 characters long, have one uppercase and lowercase letter and at least one number***</span>
                <br>
                Confirm Password:<input type="password" name="confirmRegisterPassword">
                <br>
                <input type="submit" value="Register">
            </form>
        </div>
    </div>
    <div style="text-align: center;">
        <h3>Admins are allowed to edit the school database.</h3>
        <h3 style="margin-top: -10px;">Users can only view the database.</h3>
    </div>
</body>
</html>