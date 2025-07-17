<?php
session_start();
include("database-conn.php");

if (strlen($_SESSION['id'] == 0)) {
    header('location:log-out.php');
} else {
    $_SESSION['ms']="";
    if (isset($_GET['id'])) {
        $idd = $_GET['id'];
        $s="order canceled";
        mysqli_query($conn, "update orders set status='$s' where id='$idd'");
        $_SESSION['ms'] = "order canceled ";
    }




    ?>

    <!DOCTYPE html>
    <html>

    <head>
        <title>User | Manage Order</title>
        <link rel="stylesheet" href="css/styledash.css">
        <link rel="stylesheet" href="/styletable.css">

    </head>

    <body class="dash-body">
        <div class="dash-header">
            <?php include('sidebar.php'); ?>

            <div>
                <?php include('header.php'); ?>


                <div class="dash-all">
                    <h3>User | Manage Order</h3>
                </div>
                <div class="mu-back">
                    <div class="mu-head">
                        Manage orders
                        <br><br>

                        <p style="color:red;font-size:15px;font-family: arial;"><?php echo htmlentities($_SESSION['ms']); ?>
                        
                        
                        </p>
                    </div>

                    <div class="mu-table">
                        <table>
                            <thead class="mu-table-head">
                                <tr>
                                    <th>#</th>
                                    <th>Full Name</th>
                                    <th>Type</th>
                                    <th>Address</th>
                                    <th>City</th>
                                    <th>Contact</th>
                                    
                                    <th>cost</th>
                                    <th>Order Date </th>
                                    <th>status</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php $cnt = 0;
                                $i=$_SESSION['id'];
                                $sql = mysqli_query($conn, "select * from orders where uid='$i'");
                                while ($row = mysqli_fetch_array($sql)) {
                                    $cnt++;
                                    
                                    ?>
                                    <tr>
                                        <td class="mu-center"><?php echo $cnt; ?>.</td>
                                        <td class="mu-center"><?php echo $row['fullname']; ?></td>
                                        <td class="mu-center"><?php echo $row['type']; ?></td>
                                        <td class="mu-center"><?php echo $row['address']; ?></td>
                                        
                                        <td class="mu-center"><?php echo $row['city']; ?></td>
                                        <td class="mu-center"><?php echo $row['contact']; ?></td>
                                        <td><?php echo $row['cost']; ?></td>
                                        <td><?php echo $row['orderdate']; ?></td>
                                        <td><?php echo $row['status']; ?></td>
                                       
                                        <td><?php echo "<a href='order-history.php?id=$row[id]' onClick='return check()'>cancel order</a>";?></td>
                                    <?php }?>
                                </tr>

                            </tbody>
                        </table>




                    </div>

                </div>






            </div>
        </div>
        </div>
        <script>
            function check(){
                return confirm('Are you sure want to delete data')
            }
        </script>




    </body>

    </html>
<?php } ?>