<?php
session_start();
include("database-conn.php");
if(strlen($_SESSION['login'])==0){	
if (isset($_POST['submit'])) {
    $uname = $_POST['username'];
    $query = "select * from users where email='$_POST[username]' and password='$_POST[password]'";
    $query_run = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($query_run);
    if ($row > 0) {
        $_SESSION['login'] = $_POST['username'];
        $_SESSION['id'] = $row['id'];
        $uid = $row['id'];
        $host = $_SERVER['HTTP_HOST'];
        $uip = $_SERVER['REMOTE_ADDR'];
       // $status = 1;
       // $log = mysqli_query($conn, "insert into userlog (uid,username,userip,status) values ('$uid','$uname','$uip','$status')");
        header("location:dashboard.php");
    } else {
       // $_SESSION['login'] = $_POST['username'];
     //   $uip = $_SERVER['REMOTE_ADDR'];
      //  $status = 0;
      //  mysqli_query($conn, "insert into userlog (username,userip,status) values ('$uname','$uip','$status')");
        ?>
        <br><br>
        <center><span style="color:red;font-size:25px;">Wrong Password or Email</span></center>
        <?php
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>User-Login</title>
    <link rel="stylesheet" href="css/stylelogin.css">
</head>

<body>
    <div class="login">
        <div class="log-head">
            <a class="log-head1" href="index.html">
                <h2> iCECREAM Order | User Login</h2>
            </a>
        </div>
        <div class="log-form">
            <form id="user-login" class="log-form1" method="post">
                <fieldset class="field">
                    <legend style="color:blue;font-size:19px;">
                        Sign in to your account
                    </legend>
                    <p style="color:black;opacity:0.7;">
                        Please enter your name and password to log in.<br />

                    </p>
                    <div class="form">

                        <input type="username" class="form-control" name="username" placeholder="Email" required>

                    </div>
                    <div class="form" style="padding-top:26px;">

                        <input type="password" class="form-control" name="password" placeholder="Password" required>

                        <a style="text-decoration:none;  color:blue; margin-left:15px;" href="forgot-password.php">
                            Forgot Password ?
                        </a>
                    </div>
                    <div class="form-actions">

                        <button type="submit" class="botton" name="submit">
                            Login
                        </button>
                    </div>
                    <div class="new-account">
                        Don't have an account yet?
                        <a style="text-decoration:none; color:blue;" href="registration.php">
                            Create an account
                        </a>
                    </div>
                </fieldset>
            </form>

        </div>

    </div>
</body>

</html>
<?php
}
else {
    header("location:order-now.php");
}
?>