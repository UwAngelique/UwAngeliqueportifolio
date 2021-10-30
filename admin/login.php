<?php
require('../include/db.php');
if(isset($_POST['login'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $query="SELECT* FROM admin WHERE email='$email'&& password='$password'";
    $run=mysqli_query($db,$query);
    $data=mysqli_fetch_array($run);
    if(count($data)>0){
        $_SESSION['isUserLoggedIn']=true;
        $_SESSION['emailId']= $_POST['email'];
        echo "<script>window.location.href="index.php";</script>
        
    }
    else{
        echo "<script> alert('Incorrect email id or password!')</script>
    }

}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Comparable" Content="IE-edge">
<title>Admin Panel|Log in</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="plugins/fantawesome-free/css/all.min.css">
<link rel="stylesheet" href="https://code.ionicframework.com/ionics/2.0.1/css/ionicons.min.css">
<link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
<link rel="stylesheet" href="dist/css/adminlte.min.css">
<style>
    *{
        margin-top: 0%;
    }
    body{
        position: fixed;
    }
    .login-box{
        text-align: center;
        border: 10px solid white;
        font-size: 25px;
        font-weight: 600;
        position: fixed;
        
    }
    .card{
        margin-left: 400px;
        margin-top: 150px;
        position:fixed;

        width:40%;
    }
    .card p{
        margin-left: 180px;
        margin-top:5px;
        font-size: 25px;
        font-weight: 600;
       color:black;
       position: fixed;
       
    }

    .login-card-body{
        border: 6px solid rgb(199, 199, 211);
        width:45%;
        height:45%;
        text-align:center;
        justify-content: space-between;
        font-size: 20px;
        position: fixed;

    }
    
    </style>
</head>
<body class="hold-transition login-page">
    <div class="login-box">
        <a href="index.php"><b>My</b>PORTIFOLIO</a>
        </div>
        <div class="card">
            <p class="login-box-msg">Admin Login</p>
            <br/>
        </br>
    </br>
</br>
            <div class="login-card-body">
               <br/>
               <br/>
                <form action="" method="post">
                    <div class="input group nb-3">
                        <label> Email</label>
                        <input  style="border:1px solid blue; height:25px; margin-left: 85px; width:197px "type="email" class="form-control" placehold="" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                                </div>
                                </div>
                                </div>
                                <br/>
                         
                                <div class="input-group mb-3">
                                    <label>Password</label>
                                    
                                    <input style="margin-left: 55px; border:1px solid blue; height:25px; width:197px;"type="password" class="form_control" placeholder=""required>
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-lock"></span>
                                            </div>
                                            </div>
                                            </div>
                                            <br/>
                                           
                                            <div class="row">
                                                <div class="col-8">
                                                    <div class="icheck-primary">
                                                        <input type="checkbox" id="remember">
                                                        <label style="margin-left:0px;"for="remember"> Remember Me </label>
                                                           </div>
                                                            </div>
                                                            <br/>
                           
                                                            <div class="col-4">
                                                                <button style=" background:blue; background:blue;color:white;  margin-left: 250px;  width:100px; height:40px;" type="submit" class="btn-btn-primary btn-block">Sign In</button>
                                                             
                                                                </div>
                                                                </div>
                                                                <br/>
                            <br/>
                                                                </form>
</html>