<?php

include("database-conn.php");

if (isset($_POST['submit'])) {
    $query = "insert into users (fullname,address,city,email,password) values('$_POST[fullname]','$_POST[address]','$_POST[city]','$_POST[email]','$_POST[password]')";
    $query_run = mysqli_query($connection, $query);
    if ($query) {
        echo "<script>alert('Successfully Registered. You can login now');
	</script>";
        echo "<script> window.location.href='user-login.php'</script>";
        //header('location:user-login.php');

    }

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>User registration</title>
    <link rel="stylesheet" href="css/stylelogin.css">


</head>

<body>
    <div class="login">
        <div class="log-head">
            <a class="log-head1" href="../index.php">
                <h2> User Registration</h2>
            </a>
        </div>
        <div class="log-form">
            <form id="registration" class="log-form1" method="post">
                <fieldset class="field">
                    <legend style="color:blue;font-size:19px;">
                        Sign Up
                    </legend>
                    <p style="color:black;opacity:0.7;font-size:15px;">
                        Enter your personal details below:<br />

                    </p>
                    <div class="form">
                        <input type="text" class="form-control" name="fullname" placeholder="Full Name" required>
                    </div>
                    <div class="form">
                        <input type="text" class="form-control" name="address" placeholder="Address" required>
                    </div>
                    <div class="form">
                        <input type="text" class="form-control" name="city" placeholder="City" required>
                    </div>
                    
                    <p style="color:black;opacity:0.7;font-size:15px;">
                        Enter your Email and Create Password:
                    </p>
                    <div class="form">

                        <input type="text" class="form-control" name="email" id="email" onBlur="" placeholder="Email"
                            required>


                    </div>
                    <div class="form">

                        <input type="password" class="form-control" id="password" name="password" placeholder="Password"
                            required>

                    </div>
                    <div class="form">

                        <input type="password" class="form-control" id="password_again" name="password_again"
                            placeholder="Password Again" required>

                    </div>
                    <div class="form">
                        <div style="margin-left:15px;" class="form">
                            <input type="checkbox" id="agree" value="agree" checked="true" readonly=" true">
                            <label for="agree">
                                I agree
                            </label>
                        </div>
                    </div>
                    <div class="form-actions">

                        <button type="submit" class="botton" name="submit">
                            Register
                        </button>
                    </div>
                    <div class="new-account">
                        Already have an account ?
                        <a style="text-decoration:none;color:blue;" href="user-login.php">
                            Log-in
                        </a>
                    </div>
                    <div class="new-account"></div>
                </fieldset>
            </form>



        </div>



</body>

</html>