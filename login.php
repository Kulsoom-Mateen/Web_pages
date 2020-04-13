<?php
// if($_SERVER["REQUEST METHOD"]=="POST"){
    if(isset($_POST['submit'])){
        if(!empty($_POST['name']) && !empty($_POST['password'])){
            if($_POST['name']=='Kulsoom Mateen' && $_POST['password']=='1234'){
                echo 'Correct name and password';
            }
            else{
                echo "Wrong username or password";
            }
        }
    }
// }

?>
<DOCTYPE html>
<html>
    <head>
        <title>Login Page</title>
        <link href="style.css" rel="stylesheet">
    </head>
    <body style="background-color:rgba(110,130,240,0.3);">
        <form class="box" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <h5 style="color:black; margin-bottom: 50px;">Please sign in with your account</h3>
            <input type="text" name="name" placeholder="Username" style="color:black;"><br><br>
            <input type="password" name="password" placeholder="Password" style="color:black;"><br><br>
            <input type="submit" name="submit" value="Login">
            <h6 style="text-align: left;float:left;margin-top: 40px;"><a class="forgot" href="forgot_password.html" target="blank">Forgot password</a></h6>
            <h6 style="text-align: right;margin-top: 45px;"><a class="join" href="signup.html" target="blank">Not registered,join now</a></h6>
        </form>
    </body>
</html>