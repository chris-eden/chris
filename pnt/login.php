<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>User Login And Registration</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="login-box">
    <div class="col-md-6 login-left">
    <h2>Login Here</h2>
    <form action="validation.php" method="post">
        <div class="form-group">
        <label>Nom </label><br/><br/>
        <input type="text" name="user" class="form-control" required><br/><br/>
        </div>
        <div class="form-group">
        <label>Mot de passe </label><br/><br/>
        <input type="password" name="password" class="form-control" required><br/><br/>
        </div>
        <button type="submit" class="">Login</button>
    </form>

</div>
</div>

<div class="login-box">
    <div class="col-md-6 login-right">
    <h2>Register Here</h2>
    <form action="registration.php" method="post">
        <div class="form-group">
        <label>Nom </label><br/><br/>
        <input type="text" name="user" class="form-control" required><br/><br/>
    </div>
        <div class="form-group">
        <label>Mot de passe </label><br/><br/>
        <input type="password" name="password" class="form-control" required><br/><br/>
        </div>
        <button type="submit" class="">Register</button>
    </form>

</div>
</div>
</body>
</html>
