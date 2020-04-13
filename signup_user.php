<?php
include('include/connection.php');
if(isset($_POST['sign_up'])){
    $name=$_POST['user_name'];
    $pass=$_POST['user_pass'];
    $email=$_POST['user_email'];
    $country=$_POST['user_country'];
    $gender=$_POST['user_gender'];
    //explai rand function in php
    $rand= rand(1,2);
    if($name==''){
        echo "<script>alert('We cannot verify your name')</script>";
    }
    if($pass<=8){
        echo "<script>alert('Password Should be minimum 8 character')</script>";
        exit();
    }
    $check_email="select * from users where user_email='$email'";
    $run_email=mysqli_query($con,$check_email);


    $check=mysqli_num_rows($run_email);
    if(check==1){
        echo "<script>alert('Email Already Exist, Please Try Again.')</script>";
        echo "<script>window.open('signup.php','_self')</script>";
        exit();
    }
    if($rand==1){
        $profile_pic="images/travel.jpg";

        }
        elseif($rand==2){
            $profile_pic="images/travel3.jpg";
        }
        $insert ="insert into users (user_name,user_pass,user_email,user_profile,user_country,user_gender) values('$name','$pass','$email','$profile_pic','$country','$gender')";

        $query=mysqli_query($con,$insert);
        if($query){
    
            echo "<script>alert('Cogratulation $name,your account has been created successfully')</script>";
            echo "<script>window.open('signin.php','_self')</script>";
        }
        else{
            echo "<script>alert('Registration failed Try Again')</script>";
            echo "<script>window.open('signup.php','_self')</script>";
        }
    }