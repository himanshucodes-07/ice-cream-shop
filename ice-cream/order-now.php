<?php
session_start();

include('database-conn.php');

checklogin();
$m = 0;
if (isset($_POST['submit'])) {
    $uid=$_SESSION['id'];
    $sql = mysqli_query($conn, "insert into orders (uid,type, fullname, address, city, contact) values ('$uid', '$_POST[type]','$_POST[fullname]', '$_POST[address]', '$_POST[city]', '$_POST[contact]') ");
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
                                    echo "Order Placed";
                                } ?>
                            </h3>
                            <div class="prof-edit">
                                <h3>Order Product</h3>

                            </div>
                         <!--   <div class="prof4">
                                <h4>
                           //<?php
                             //   echo "Name :  ";
                             //   echo htmlentities($row['fullname']);
                              //  echo "<br>";
                              //  echo "Registration Date :  ";
                               // echo htmlentities($row["regdate"]);
                              //  echo "<br>";
                              //  echo "Last Upadate  :  ";
                              //  echo htmlentities($row["updationdate"]);

                             //   ?>

                                </h4>
                            </div>
                            -->

                            <div class="prof-form">
                                <form method="post">
                                <div class="change-leb"><label for="iname"></label>Ice Cream</div>
                                    <div class="change-inp"><input type="text" name="type" class="change-form-control"
                                            value=""></div>
                                    <div class="change-leb"><label for="fullname"></label>Name</div>
                                    <div class="change-inp"><input type="text" name="fullname" class="change-form-control"
                                            value="<?php echo htmlentities($row['fullname']); ?>"></div>

                                    <div class="change-leb"><label for="address"></label>Address</div>
                                    <div class="change-inp"><input type="text" name="address" class="change-form-control"
                                            value="<?php echo htmlentities($row['address']); ?>"></div>

                                    <div class="change-leb"><label for="city"></label>City</div>
                                    <div class="change-inp"><input type="text" name="city" class="change-form-control"
                                            value="<?php echo htmlentities($row['city']); ?>"></div>

                                  

                                    <div class="change-leb"><label for="contact"></label>Contact No</div>
                                    <div class="change-inp"><input type="contact" name="contact" class="change-form-control"
                                            required></div>
                                    <div class="change-leb"> <button type="submit" class="button"
                                            name="submit">Order</button>
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