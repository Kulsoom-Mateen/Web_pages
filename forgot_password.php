<!DOCTYPE html>
<html>
    <head>
        <title>Forgot password</title>
        <link href="style_password.css"" rel="stylesheet">
    </head>
    <body  style="background-color:rgba(110,130,240,0.3);">
        <form class="new_password">
            <h3 style="text-align: left;margin-bottom: 20px;margin-top: 0px;">Reset Password</h3><hr>
            <h6 style="float:left;margin-top: 50px;">Email</br> address&nbsp</h6></h6>
            <input type="email" name="email" placeholder="e.g.  abc@email.com">
            <input id="confirm" style="margin-left: 50px;" type="submit" name="confirm" value="Confirm email" onclick=funct()>   
        </form>
        <form id="pass" style="display: none;">
            <h6 style="font-size:15px; float:left;margin-top: 60px;margin-right: 10px;">Reset</br> password&nbsp</h6></h6>
            <input type="text" name="reset_password"></br></br>
            <h6 style="font-size:15px; float:left;margin-top: 10px;margin-right: 10px;">Confirm</br> password&nbsp</h6></h6>
            <input style="margin-top: 10px;" type="text" name="confirm_password"> 
            <button id="OK" type="submit" name="submit">OK</button>
        </form>
        <script>
            function funct(){
                    document.getElementById("pass").style.display="block";
                }
        </script>
    </body>
</html>