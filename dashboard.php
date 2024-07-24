<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UniLink Home</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>
    <div class="container main-section">
        <div class="row">
            <div class = "col-md-3 col-sm-3 col-xs-12 left-sidebar">
                <div class="input-group searchbox">
                    <div class="input-group-btn">
                        <center> <a href="include/find_students.php"><button class="btn btn-default seacrh-icon" name="search_user" type="submit"> Connect with a new student</button></a></center>
                    </div>
                </div>

                <div class="left-chat">
                    <ul>
                        <?php include("include/get_users_data.php"); ?>
                    </ul>
                </div>
            </div>

            <div class="col-md-9 col-sm-9 col-xs-12 right-sidebar">
                <div class="row">
                    <!-- retrieving logged in users details -->
                    <?php
                     $user = $_SESSION['user_email'];
                     $get_user = "select * from users where user_email = '$user'";
                     $run_user = mysqli_query($con, $get_user);
                     $row = mysqli_fetch_array($run_user);

                     $user_id = $row['user_id'];
                     $user_name = $row['username'];

                     ?>

                     <!-- retrieving other students details when clicked -->
                      <?php
                      if (isset($_GET['username'])){

                        global $con;

                        $get_username = $_GET['username'];
                        $get_user = "select * from users where username ='$get_username'";

                        $run_user = mysqli_query($con, $get_user);
                        $row_user = mysqli_fetch_array($run_user);

                        $username = $row_user['username'];
                        $user_profile_image = $row_user['profile_pic'];
                      }

                      $total_messages = "select * from users_chat where (sender_username = '$user_name' AND receiver_username = '$username') OR (receiver_username = '$username' AND sender_username = '$username')";

                      $run_messages = mysqli_query($con, $total_messages);
                      $total = mysqli_num_rows($run_messages);

                    ?>

                    <div class="col-md-12 right-header">
                        <div class="right-header-img">
                            <img src="<?php echo "$user_profile_image"; ?>">
                        </div>

                        <div class="right-header-detail">
                            <form action="#" method="POST">
                                <p><?php echo "$username"; ?> </p>
                                <span> <?php echo "$total"; ?> messages </span>&nbsp &nbsp
                                <button class="btn btn-danger" name="Logout"></button>
                            </form>
                            <?php
                            if(isset($_POST['logout'])){
                                $update_msg = mysqli_query($con, "UPDATE users SET log_in = 'Offline' WHERE username ='$user_name' ");
                                header("Location: logout.php");
                            }
                            ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</body>
</html>