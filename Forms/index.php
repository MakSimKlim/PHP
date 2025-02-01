<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>PHP Forms</title>
</head>
<body>
    <form action="form.php" method="post">
        <div>
            <label for="username">Username</label>
            <input type="text" id="user" name="name">
        </div>

        <div>
            <label for="password">Password</label>
            <input type="password" id="password" name="password">
        </div>

        <div>
            <label for="email">E-mail</label>
            <input type="email" id="email" name="email">
        </div>

        <div>
            <input type="submit" value="Register">
        </div>
    </form>
</body>
</html>