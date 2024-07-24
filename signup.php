<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create new account</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,700;1,400&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<link rel="stylesheet" href="./assets/css/signup.css">
</head>
<body>
    <div class="signup-form">
        <form action="" method="post">
            <div class="form-header">
                <h2>Sign Up</h2>
                <p>Complete the form and start connecting with other students</p>
            </div>
            <div class="form-group">
                 <label for="username">Username</label>
                 <input type="text" class="form-control" name="user_name" placeholder="Full Name" autocomplete="Off" required>
            </div>

            <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="user_pass" placeholder="Password" autocomplete="Off" required>
            </div>

            <div class="form-group">
                 <label for="email">Email</label>
                 <input type="email" class="form-control" name="user_email" placeholder="example@gmail.com" autocomplete="Off" required>
            </div>

            <div class="form-group">
                 <label for="course">Course</label>
                 <input type="text" class="form-control" name="user_course" placeholder="MSc Information Technology" autocomplete="Off" required>
            </div>

            <div class="form-group">
                 <label for="degree-level">Degree Level</label>
                 <select class="form-control" name="degree_level" id="" required>
                 <option value="" disabled="">Select your Degree Level</option>
                 <option value="">Undergraduate</option>
                 <option value="">postgraduate</option>
                 </select>
                 
            </div>

            <div class="form-group">
                 <label for="gender">Gender</label>
                 <select class="form-control" name="user_gender" id="">
                <option value="" disabled="">Select your Gender</option>
                 <option value="">Male</option>
                 <option value="">Female</option>
                 <option value="">Others</option>
                 </select>
                 
            </div>

            <div class="form-group">
                 <label for="country">Country</label>
                 <input type="text"class="form-control" name="user_country" placeholder="United Kingdom" autocomplete="Off" required>
            </div>

            <div class="form-group">
                 <label for="checkbox" class="checkbox-inline">
                    <input type="checkbox" name="checkbox" id="" required> I accept the  <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a>
                 </label>
                 
            </div>
            
            <div class="form-group">
                <button type="submit" class="btn btn-primary w-100 " name="sign_up"> Sign Up</button>
            </div>

            <?php include("signup_user.php"); ?> 
            
        </form>
        <div class="text-center small" style="color: #67428B;" > Already have an account? <a href="signin.php">Sign in Here</a></div>
    </div>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>