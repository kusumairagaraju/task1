<!DOCTYPE html>
<html>
    <head>
        <title>loginpage</title>
        <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1 style="text-align:center;">LOGIN FORM</h1>
    <div id="fm">
        <form action="connect.php" method="POST">

        <label>Username</label>
        <input type="text" id="user" name="username"><br><br>

        <label>Password</label>
        <input type="password" id="pass" name="password"><br><br>
        
        <input type="submit" id="btn" value="login">
</form>
</div>
</body>
</html>