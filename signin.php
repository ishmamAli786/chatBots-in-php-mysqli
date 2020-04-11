<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogIn to Your Account</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/signin.css">
</head>
<body>  
<div class="signin-form">
<form action="" method="post">
<div class="form-header">
<h2>Sign In</h2>
<p>Login to MyChat</p>
</div>
<div class="form-group">
<label>Email</label>
<input type="email" name="email" placeholder="someone@site.com" class="form-control" autocomplete="off" required>
</div>
<div class="form-group">
<label>Password</label>
<input type="password" name="pass" placeholder="Password" class="form-control" autocomplete="off" required>
</div>
<div class="small">Forget Password? <a href="forget_pass.php">Click Here</a><br>
</div>
<div class="form-group">
<button type="submit" class="btn btn-primary btn-block  btn-lg" name="sign_in">Sign In</button>
</div>
<!--<?php
include(signin_user.php);
?>-->
</form>
<div class="text_center small custom" style="color:black; font-weight:bold; font-size:20px">Don't have an Account? <a href="signup.php" style="color:#00cb82; font-weight:bold; font-size:20px">Create Account</a></div>
</div>
</body>
</html>