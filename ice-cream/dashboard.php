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



            <div>
                <div class="dash-all">
                    <h3>USER DASHBOARD</h3>
                </div>
                <div class="dash-all2">
                    <center>
                    <div class="dash-all3">
                        <div class="dash-all4">
                            <img src="dash/myp.png" style="width:55px; height:auto;" alt="my profile"><br>
                            My Profile
                            <div class="dash-all-l"><a href="edit-profile.php">[ update profile ]</a></div>
                        </div>
                        <div class="dash-all4">
                        <img src="dash/bookapp.png" style="width:55px; height:auto;" alt="my profile"><br>
                            Order Now
                            <div class="dash-all-l"> <a href="order-now.php">[ Order Now ]</a></div>
                        </div>
                        <div class="dash-all4">
                        <img src="dash/myapp.png" style="width:55px; height:auto;" alt="my profile"><br>
                            Order History
                            <div class="dash-all-l"> <a href="order-history.php">[ Order history ]</a></div>
                        </div>
                    </div>
                    </center>
                </div>

                <div class="dash-all3">
                    Ice Cream Order Website
                </div>
            </div>
        </div>

    </div>


</body>

</html>