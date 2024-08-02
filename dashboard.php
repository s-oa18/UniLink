<!DOCTYPE html>
<?php
session_start();
include("include/connection.php");

if (!isset($_SESSION['user_email'])) {
    header("location: signin.php");
}
else { ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UniLink Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="./assets/css/dashboard.css">
</head>
<body>
<div class="container main-section">
        <div class="row sidebyside">
            <div class="col-md-3 col-sm-3 col-xs-12 left-sidebar">
                <div class="input-group searchbox">
                    <div class="input-group-btn">
                        <center>
                            <a href="include/find_students.php">
                                <button class="btn btn-default search-icon" name="search_user" type="submit">Connect with a new student</button>
                            </a>
                        </center>
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
                    <?php
                        $user = $_SESSION['user_email'];
                        $get_user = "SELECT * FROM users WHERE user_email = '$user'";
                        $run_user = mysqli_query($con, $get_user);
                        $row = mysqli_fetch_array($run_user);
                        $user_id = $row['user_id'];
                        $user_name = $row['username'];
                    ?>
                    <?php
                        if (isset($_GET['username'])){
                            $get_username = $_GET['username'];
                            $get_user = "SELECT * FROM users WHERE username ='$get_username'";
                            $run_user = mysqli_query($con, $get_user);
                            $row_user = mysqli_fetch_array($run_user);
                            $username = $row_user['username'];
                            $user_profile_image = $row_user['profile_pic'];
                        }
                        $total_messages = "SELECT * FROM users_chat WHERE (sender_username = '$user_name' AND receiver_username = '$username') OR (receiver_username = '$username' AND sender_username = '$username')";
                        $run_messages = mysqli_query($con, $total_messages);
                        $total = mysqli_num_rows($run_messages);
                    ?>
                    <div class="col-md-12 right-header">
                        <div class="right-header-img">
                            <img src="<?php echo "$user_profile_image"; ?>" alt="Profile Image">
                        </div>
                        <div class="right-header-detail">
                            <form action="" method="POST">
                                <p><?php echo "$username"; ?></p>
                                <span><?php echo "$total"; ?> messages</span>
                                <button class="btn btn-danger" name="logout">Logout</button>
                            </form>
                            <?php
                                if (isset($_POST['logout'])) {
                                    $update_msg = mysqli_query($con, "UPDATE users SET log_in = 'Offline' WHERE username ='$user_name'");
                                    header("Location: logout.php");
                                    exit();
                                }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div id="scrolling_to_bottom" class="col-md-12 right-header-contentChat">
                        <?php
                            $update_msg = mysqli_query($con, "UPDATE users_chat SET msg_status = 'read' WHERE sender_username = '$username' AND receiver_username = '$user_name'");
                            $sel_msg = "SELECT * FROM users_chat WHERE (sender_username = '$user_name' AND receiver_username='$username') OR (receiver_username = '$user_name' AND sender_username = '$username') ORDER BY 1 ASC";
                            $run_msg = mysqli_query($con, $sel_msg);
                            while ($row = mysqli_fetch_array($run_msg)) {
                                $sender_username = $row['sender_username'];
                                $receiver_username = $row['receiver_username'];
                                $msg_content = $row['msg_content'];
                                $msg_date = $row['msg_date'];
                        ?>
                        <ul>
                            <?php
                                if ($user_name == $sender_username && $username == $receiver_username) {
                                    echo "
                                    <li>
                                        <div class='rightside-right-chat'>
                                            <span>$username <small>$msg_date</small></span><br><br>
                                            <p>$msg_content</p>
                                        </div>
                                    </li>
                                    ";
                                } else if ($user_name == $receiver_username && $username == $sender_username) {
                                    echo "
                                    <li>
                                        <div class='rightside-left-chat'>
                                            <span>$username <small>$msg_date</small></span><br><br>
                                            <p>$msg_content</p>
                                        </div>
                                    </li>
                                    ";
                                }
                            ?>
                        </ul>
                        <?php } ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 right-chat-textbox">
                        <form action="" method="post">
                            <input type="text" name="msg_content" placeholder="Type a message..." autocomplete="off" required>
                            <button class="btn btn-primary" name="submit"><i class="fa fa-telegram" aria-hidden="true"></i>send</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
        if (isset($_POST['submit'])) {
            $msg = htmlentities($_POST['msg_content']);
            if ($msg == "") {
                echo "<div class='alert alert-danger'><strong><center>Type a message to send</center></strong></div>";
            } else if (strlen($msg) > 100) {
                echo "<div class='alert alert-danger'><strong><center>Message should not exceed 100 characters</center></strong></div>";
            } else {
                $insert = "INSERT INTO users_chat(sender_username, receiver_username, msg_content, msg_status, msg_date) VALUES ('$user_name', '$username', '$msg', 'unread', NOW())";
                $run_insert = mysqli_query($con, $insert);
            }
        }
    ?>
    <script>
        $('#scrolling_to_bottom').animate({
            scrollTop: $('#scrolling_to_bottom').get(0).scrollHeight
        }, 1000);
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            var height = $(window).height();
            $('.left-chat').css('height', (height - 92) + 'px');
            $('.right-header-contentChat').css('height', (height - 163) + 'px');
        });
    </script>
</body>
</html>
<?php } ?>
