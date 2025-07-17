<?php
session_start();

include('database-conn.php');

checklogin();
$m = 0;
if (isset($_POST['submit'])) {
    $sql = mysqli_query($conn, "update users set fullname='$_POST[fullname]', address='$_POST[address]', city='$_POST[city]', email='$_POST[email]' where id='" . $_SESSION['id'] . "'");
    if ($sql) {
        $m = "fffff";
    }

}
?>
<!DOCTYPE html>
<html>

<head>
    <title>User Dashboard</title>
    <link rel="stylesheet" href="css/styledash.css">

</head>

<body class="dash-body">
    <div class="dash-header">
        <?php include('sidebar.php'); ?>
        <div>

            <?php include('header.php'); ?>



            <div class="prof">
                <div class="change-header">
                    USER | PROFILE
                </div>
                <div class="prof2">
                    <div class="proff"></div>
                    <div class="prof3"><?php
                    $query = mysqli_query($conn, "select * from users where id='$_SESSION[id]'");
                    while ($row = mysqli_fetch_array($query)) {
                        ?>
                            <h3
                                style="color: rgb(138, 30, 48);padding-left:5%;padding-top:20px;font-size:26px;font-family:arial;">
                                <?php if ($m) {
                                    echo "Profile Update Successfully";
                                } ?>
                            </h3>
                            <div class="prof-edit">
                                <h3>Edit Profile</h3>

                            </div>
                            <div class="prof4">
                                <h4><?php
                                echo "Name :  ";
                                echo htmlentities($row['fullname']);
                                echo "<br>";
                                echo "Registration Date :  ";
                                echo htmlentities($row["regdate"]);
                                echo "<br>";
                                echo "Last Upadate  :  ";
                                echo htmlentities($row["updationdate"]);

                                ?>

                                </h4>
                            </div>

                            <div class="prof-form">
                                <form method="post">
                                    <div class="change-leb"><label for="fullname"></label>Name</div>
                                    <div class="change-inp"><input type="text" name="fullname" class="change-form-control"
                                            value="<?php echo htmlentities($row['fullname']); ?>"></div>

                                    <div class="change-leb"><label for="address"></label>Address</div>
                                    <div class="change-inp"><input type="text" name="address" class="change-form-control"
                                            value="<?php echo htmlentities($row['address']); ?>"></div>

                                    <div class="change-leb"><label for="city"></label>City</div>
                                    <div class="change-inp"><input type="text" name="city" class="change-form-control"
                                            value="<?php echo htmlentities($row['city']); ?>"></div>

                                  

                                    <div class="change-leb"><label for="email"></label>Email</div>
                                    <div class="change-inp"><input type="text" name="email" class="change-form-control"
                                            value="<?php echo htmlentities($row['email']); ?>"></div>
                                    <div class="change-leb"> <button type="submit" class="button"
                                            name="submit">Update</button>
                                    </div>
                                </form>

                                <div class="change-leb"></div>

                            </div>



                        <?php } ?>

                    </div>
                    <div class="proff"></div>
                </div>
                <div class="prof-f"></div>
            </div>

        </div>
    </div>

    </div>


</body>

</html>