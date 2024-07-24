<?php
include("include/connection.php");

    if(isset($_POST['sign_up'])){

        $name = htmlentities(mysqli_real_escape_string($con, $_POST['user_name']));
        $password = htmlentities(mysqli_real_escape_string($con, $_POST['user_pass']));
        $email = htmlentities(mysqli_real_escape_string($con, $_POST['user_email']));
        $course = htmlentities(mysqli_real_escape_string($con, $_POST['user_course']));
        $degree_level = htmlentities(mysqli_real_escape_string($con, $_POST['degree_level']));
        $gender = htmlentities(mysqli_real_escape_string($con, $_POST['user_gender']));
        $country = htmlentities(mysqli_real_escape_string($con, $_POST['user_country']));

        $rand = rand(1, 2);

        if($name == ''){
            echo "<script>alert('We could not verify your name')</script>";
        }

        if(strlen($password) < 8){
            echo"<script>alert('Password must be a minimun of 8 characters')</script>";
            exit();
        }

        $check_email = "select * from users where user_email ='$email'";
        $run_email = mysqli_query($con, $check_email);

        $check = mysqli_num_rows($run_email);

        if($check == 1){
            echo"<script>alert('Email already exists, try again!')</script>";
            echo"<script>window.open('signup.php', '_self')</script>";
            exit();
        }

        if($rand == 1){
            $profile_pic = "assets/images/avatar.3";
        } else if($rand == 2 ){
            $profile_pic = "assets/images/avatar.1";
        }

        $insert = "insert into users (username, password, user_email, course, degree_level, gender, country, profile_pic) values ('$name', '$password', '$email', '$course', '$degree_level', '$gender', '$country', '$profile_pic')";

        $query = mysqli_query($con, $insert);

        if($query){
            echo"<script>alert('Congratulation $name, your account has been created successfuly')</script>";

            echo"<script>window.open('signin.php', '_self')</script>";
        }else {
            echo"<script>alert('Registration failed, please try again')</script>";

            echo"<script>window.open('signup.php', '_self')</script>";
        }


    }


?>