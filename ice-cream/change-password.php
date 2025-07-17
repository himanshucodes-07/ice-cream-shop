<?php
session_start();

include('database-conn.php');

checklogin();

$_SESSION['m'] = 0;

if (isset($_POST['submit'])) {
    $cpass = $_POST['cpass'];

    $query = mysqli_query($conn, "select * from users where id='" . $_SESSION['id'] . "'");
    $row = mysqli_fetch_array($query);  
    if ($row['password']==$cpass) {
        $sql = mysqli_query($conn, "update users set password='$_POST[npass]' where id='" . $_SESSION['id'] . "'");
        $_SESSION['m'] = 1;
    } else {
        $_SESSION['m'] = 2;
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>User | change password</title>
    <link rel="stylesheet" href="css/styledash.css">

</head>

<body class="dash-body">
    <div class="dash-header">
        <?php include('sidebar.php'); ?>
        <div>

            <?php include('header.php'); ?>



            <div class="change">
                <div class="change-header">
                    USER | CHANGE PASSWORD
                </div>
                <div class="change1">
                    <div class="">
                        <h3
                            style="color: rgb(138, 30, 48);padding-left:5%;padding-top:20px;font-size:26px;font-family:arial;">
                            <?php if ($_SESSION['m'] == 1) {
                                echo "Password Update Successfully";
                            } elseif ($_SESSION['m'] == 2) {
                                echo "Wrong Password";
                            } ?>
                        </h3>
                    </div>
                    <form class="change-form" method="post">
                        <div class="change2">Change Password</div>
                        <div class="change-leb"> <label for="cpass">Current Password</label></div>
                        <div class="change-inp"> <input type="password" name="cpass" class="change-form-control"
                                placeholder="Enter Current Password" required></div>

                        <div class="change-leb"> <label for="npass">New Password</label></div>
                        <div class="change-inp"> <input type="password" name="npass" class="change-form-control"
                                placeholder="Enter New Password" required></div>

                        <div class="change-leb"> <label for="npass">Confirm New Password</label></div>
                        <div class="change-inp"> <input type="password" name="npass" class="change-form-control"
                                placeholder="Confirm Password" required></div>

                        <div class="change-leb"> <button type="submit" name=submit class="button">Submit</button> </div>


                    </form>


                </div>
            </div>
        </div>

    </div>


</body>

</html>