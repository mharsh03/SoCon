<!doctype html>
<html>
<head>
    <title>Login</title>
</head>
<body>
<h1>Login</h1>
<form action="" method="post">
    <label>Username:</label><input type="text" name="user"><br/>
    <label>Password:</label><input type="password" name="pass"><br/>
    <input type="submit" value="Login" name="submit"><br/>
    <!--New user Register Link -->
    <p><a href="register.php">New User Registeration!</a></p>
</form>
<?php
include 'dbConnect.php';
if(isset($_POST["submit"])){
    if(!empty($_POST['user']) && !empty($_POST['pass'])){
        $user = $_POST['user'];
        $pass = $_POST['pass'];

        $query = mysqli_query($conn, "SELECT * FROM userpass WHERE user='".$user."' AND pass='".$pass."'");
        $numrows = mysqli_num_rows($query);
        if($numrows !=0)
        {
            while($row = mysqli_fetch_assoc($query))
            {
                $dbusername=$row['user'];
                $dbpassword=$row['pass'];
            }
            if($user == $dbusername && $pass == $dbpassword)
            {
                session_start();
                $_SESSION['sess_user']=$user;
                //Redirect Browser
                header("Location:welcome.php");
            }
        }
        else
        {
            echo "Invalid Username or Password!";
        }
    }
    else
    {
        echo "Required All fields!";
    }
}
?>
</body>
</html>