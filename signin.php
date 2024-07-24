<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login to your account</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,700;1,400&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<link rel="stylesheet" href="./assets/css/signin.css">
</head>
<body>
    <div class="signin-form">
        <form action="" method="post">
            <div class="form-header">
                <h2>Sign In</h2>
                <p>Login to UniLink</p>
            </div>
            <div class="form-group">
                 <label for="email">Email</label>
                 <input type="email" class="form-control" name="email" placeholder="example@gmail.com" autocomplete="Off" required>
            </div>
            <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="pass" placeholder="Password" autocomplete="Off" required>
            </div>

            <div class="small"> Forgot Password? <a href="forgot_password.php"> Click Here</a></div><br>

            <div class="form-group">
                <button type="submit" class="btn btn-primary w-100 " name="sign_in"> Sign In</button>
            </div>

            <?php include("signin_user.php"); ?> 
            
        </form>
        <div class="text-center small" style="color: #67428B;" > Don't have an account? <a href="signup.php">Create One</a></div>
    </div>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>