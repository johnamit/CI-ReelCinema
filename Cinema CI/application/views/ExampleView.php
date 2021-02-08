<html>
<head>
    <title>Login Page</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Archivo'>
</head>

<style>
*{
    margin: 0;
    padding: 0;  
}

.header {
    width: 100%;
    height: 60px;
    display: block;
    background-color: #101016;
}

.logo{
    padding-top: 15;
    padding-left: 10;
    font-family: 'Archivo';
    font-weight: 900;
    color: white;
    height: 100%;
    font-size: 30px;
    text-align: left;
}

body{
    margin: 0;
    padding: 0;
    font-family: 'Montserrat';
    background: #17171f;
    height: 100vh;
    overflow: hidden;
}

.container{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 600px;
    background: #17171f;
    border-radius: 10px;
}

.container h1{
    font-family: 'Archivo';
    font-size: 35px;
    color: #b4b4b4;
    font-weight: 900;
    text-align: center;
    padding: 0 0 20px 0;
}

.container form{
    padding: 0 40px;
    box-sizing: border-box;
}

.inputField{
    position: relative;
    border-bottom: 2px solid #adadad;
    margin: 30px 0;
}

.inputField input{
    width: 100%;
    padding: 0 5px;
    height: 40px;
    font-size: 16px;
    border: none;
    background: none;
    outline: none;
    color: white;
}

.inputField label{
    position: absolute;
    top: 50%;
    left: 5px;
    color: #adadad;
    transform: translateY(-50%);
    font-size: 16px;
    pointer-events: none;
}

.inputField span::before{
    content: '';
    position: absolute;
    top: 40px;
    left: 0;
    width: 0%;
    height: 2px;
    background: #8e44ad;
}

.inputField input:focus ~ label,
.inputField input:valid ~ label{
    top: -5px;
    color: #2980b9;
}

.inputField input:focus ~ span::before,
.inputField input:valid ~ span::before{
    width: 100%;
}

input:invalid{
    box-shadow: 0 0 0;
}


.forgot{
    margin: 30px 0;
    text-align: center;
    color: #3d3d3d;
    cursor: pointer;
}

.forgot:hover{
    text-decoration: none;
    color: #8e44ad;
}

.loginbtn{
    width: 100%;
    height: 50px;
    border: none;
    background: linear-gradient(120deg,#2780ba,#8e44ad);
    border-radius: 25px;
    font-size: 18px;
    color: white;
    font-weight: 700;
    cursor: pointer;
    outline: none;
}

.signup{
    margin: 30px 0;
    text-align: center;
    font-size: 16px;
}

.signupLink {
    color: #3d3d3d;
    text-decoration: none;
}

.signupLink:hover{
    color: #8e44ad;
}
</style>

<body>
    <div class="header">
            <div class="logo">Microblog</div>
    </div>

    <div class="container">
        <h1>Log into Microblog</h1>
        <?php echo form_open('user/dologin');?>

            <div class="inputField">
                <input type="text" name="username" required>
                <?php echo form_error('username'); ?>
                <span></span>
                <label>Username</label>
            </div>

            <div class="inputField">
                <input type="password" name="password" required>
                <?php echo form_error('password'); ?>
                <span></span>
                <label>Password</label>
            </div>

            <input class="loginbtn" type="submit" value="Login">

            <div class="forgot">Forgot Password?</div>

            <div class="signup">
                <a class="signupLink" href="#">Sign up for Microblog</a>
            </div>

        </form>
    </div>
</body>
</html>