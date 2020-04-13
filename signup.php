<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Account</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/signup.css">
</head>
<body>  
<div class="signup-form">
<form action="" method="post">
<div class="form-header">
<h2>Sign Up</h2>
<p>Fill Out This Form And Start Chating With Your Friends.</p>
</div>
<div class="form-group">
<label>UserName</label>
<input type="text" name="user_name" placeholder="Example:  Ishmam Ali" class="form-control" autocomplete="off" required>
</div>
<div class="form-group">
<label>Password</label>
<input type="password" name="user_pass" placeholder="Password" class="form-control" autocomplete="off" required>
</div>
<div class="form-group">
<label>Email Address</label>
<input type="email" name="user_email" placeholder="someone@site.com" class="form-control" autocomplete="off" required>
</div>
<div class="form-group">
<label>Country</label>
<select class="form-control" name="user_country" requird>
<option disabled="">Select a Country</option>
<option>Pakistan</option>
<option>United States Of America</option>
<option>India</option>
<option>UK</option>
<option>Bangladash</option>
<option>France</option>
</select>
</div>
<div class="form-group">
<label>Gender</label>
<select class="form-control" name="user_gender" requird>
<option disabled="">Select your Gender</option>
<option>Male</option>
<option>Female</option>
<option>Others</option>
</select>
</div>
<div class="form-group">
<label class="checkbox-inline"><input type="checkbox" required>I accept the <a href="#">Terms of Use</a>&amp;<a href="#">Privacy Policy</a></label>
</div>
<div class="form-group">
<button type="submit" class="btn btn-primary btn-block  btn-lg" name="sign_up">Sign Up</button>
</div>
<?php
include('signup_user.php');
?>
</form>
<div class="text_center small custom" style="color:black; font-weight:bold; font-size:20px">Already have an Account? <a href="signin.php" style="color:#00cb82; font-weight:bold; font-size:20px">Signin here</a></div>
</div>
</body>
</html>