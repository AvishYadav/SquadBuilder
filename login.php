<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <script>
        /*function validateemail(){
            var x=document.forms["myform"]["email"].value;
            var atposition=x.indexOf("@");
            var dotposition=x.lastIndexOf(".");
            if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length){
                alert("please enter valid email address\n atposition:"+atposition+"\n dotposition:"+dotposition);
            return false;
            }
            else{
                return false;
            }
        }*/
    </script>
    <div class="center">
        <h1>Login</h1>
        <form name="myform" method="post" action="loginvalidate.php">
            <div class="text-field">
                <input type="text" name="email" id="login_email" required>
                <span></span>
                <label>Email</label>
            </div>
            <div class="text-field">
                <input type="password" name="password" id="login_password" required>
                <span></span>
                <label>Password</label>
            </div>
            <div class="pass">Forgot Password ?</div>
            <input type="submit" value="Login" name="submit_button" id="submit_button">
            <div class="signup-link">
                Not a member ? <a href="register.php">Signup</a>
            </div>
        </div>
    </form>
</body>
</html>