<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <link rel="stylesheet" type="text/css" href="css/home.css">
        <link rel="stylesheet" type="text/css" href="css/login.css">
        <title> Login Page</title>
    </head>
    <body>
        <?php
        session_start();
        include 'conn.php';
        if(isset($_POST['login']))
            {
                $username = $_POST['username'];
                $password = $_POST['pass'];
                $_SESSION['id'] = $_POST['username'];
                $sql = "SELECT * FROM users where username ='$username' and password ='$password'";
                $result = mysqli_query($conn,$sql);
                $u = mysqli_fetch_array($result);
                if($username === $u['ausername'] && $password === $u['password'])
                {
                    echo '<script>alert("Login Sucessfull"); location.href="home.php"</script>';
                }
                if($username !== $u['ausername'] || $password !== $u['password'])
                {
                    echo '<script>alert("Username or Password doesnt match"); location.href="login1.php"</script>';
                }
            }
        ?>
    <form class="f1" id="f1" action="" method="POST" autocomplete="off">
        <h3 class="h2"> Admin Login </h3>

        <label class="l1" >Username</label>
        <input class="i1" type="text" placeholder="Enter Unique ID" name="username" id="username" required>

        <label class="l1" for="password">Password</label>
        <input class="i1" type="password" placeholder="Enter Password" name="pass" id="password" required>

        <input class="submit" type="submit" name="login">
    </form>
</body>
</html>