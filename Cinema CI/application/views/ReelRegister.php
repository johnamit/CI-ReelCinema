<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,200;0,300;0,400;0,500;1,300;1,400;1,500&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/fontstyle.css">
    <title>Reel | Register</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script>
		$(document).ready(function(){
			$('.logo img').mouseover(function(){
				this.src = "<?php echo base_url();?>images/LogoWhite.png";
			});
			$('.logo img').mouseout(function(){
				this.src = "<?php echo base_url();?>images/LogoBlack.png";
			});
		});
	</script>
</head>

<style>

    html{
        scroll-behavior: smooth;
    }

    body{
        font-family: "Monument Extended";
        background-color: #121212;
        color: #fff;
    }

    .row{
        height: 100vh;
        width: 100vw;
    }

    #RMessageSection{
        background: #ffcc00;
    }

    .inputField{
        position: relative;
        border-bottom: 2px solid #adadad;
        margin: 30px 0;
    }

    #inputSpacing{
        margin-bottom: 40px;
    }

    .inputField input{
        width: 100%;
        padding: 0 5px;
        height: 40px;
        font-size: 16px;
        border: none;
        background: none;
        outline: none;
        color: #ffffff;
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
        background: #ffcc00;
    }

    .inputField input:focus ~ label,
    .inputField input:valid ~ label{
        top: -5px;
        color: #ffcc00;
    }

    .inputField input:focus ~ span::before,
    .inputField input:valid ~ span::before{
        width: 100%;
    }

    input:invalid{
        box-shadow: 0 0 0;
    }

    #RForm{
        padding: 0px 12rem;
    }

    #RForm h2{
        text-transform: uppercase;
        font-size: 40px;
        font-weight: 500;
        letter-spacing: 1.4px;
    }

    .spacer{
        padding: 1px 0px;
    }

    .wide{
        padding: 20px 0px;
    }

    .registerBtn{
        width: 100%;
        height: 55px;
        border: 2px solid #121212;
        background: #ffcc00;
        border-radius: 25px;
        font-size: 18px;
        color: #121212;
        font-weight: 700;
        cursor: pointer;
        outline: none;
        margin-top: 50px;
    }

    .registerBtn:hover{
        border: none;
    }

    #RMessage{
        padding-top: 25%;
        color: #121212;
    }

    #RMessage h2{
        text-transform: uppercase;
        font-size: 60px;
        font-weight: 600;
        letter-spacing: 1.4px;
    }

    #RMessage h4{
        font-size: 20px;
        width: 85%;
    }

    .toLoginBtn{
        width: 20%;
        height: 55px;
        border: 2px solid #ffcc00;
        background: #121212;
        color: #ffcc00;
        border-radius: 25px;
        font-size: 18px;
        font-weight: 700;
        cursor: pointer;
        outline: none;
    }

    .toLoginBtn:hover{
        border: none;
    }

    .logo{
        padding-top: 20px;
        padding-left: 20px;
    }

    .logo img{
        height: 55px;
    }
</style>

<body>
    <div class="container-fluid" id="mainContainer">

        <div class="row">
            <div class="col text-left" id="RMessageSection">
                <div class="home">
                    <div class="logo"><a href="<?php echo site_url('reel/home')?>"><img src="<?php echo base_url();?>images/LogoBlack.png" alt="REEL"></a></div>
                </div>
                <div class="container" id="RMessage">
                    <h2>ALREADY A MEMBER?</h2>
                    <h4 class="py-4">Login to access exclusive member discounts, faster checkout and more.</h4>
                    <a href="<?php echo site_url('reel/login')?>"><button class="toLoginBtn">Login</button></a>
                </div>
            </div>

            <div class="col text-center my-auto" id="RFormSection">
                <div class="container" id="RForm">
                    <h2>Join Reel</h2>
                    <div class="spacer wide"></div>
                    <?php echo form_open('reel/doregister');?>
                        <div class="col-12 inputField">
                            <input type="text" name="forename" required>
                            <span></span>
                            <label>Forename</label>
                        </div>
                        <div class="spacer"></div>
                        <div class="col-12 inputField">
                            <input type="text" name="surname" required>
                            <span></span>
                            <label>Surname</label>
                        </div>
                        <div class="spacer"></div>
                        <div class="col-12 inputField">
                            <input type="text" name="email" required>
                            <span></span>
                            <label>Email</label>
                        </div>
                        <div class="spacer"></div>
                        <div class="col-12 inputField">
                            <input type="password" name="password" required>
                            <span></span>
                            <label>Password</label>
                        </div>
                        <div class="spacer"></div>
                        <div class="col-12 inputField">
                            <input type="password" name="confirmpass" required>
                            <span></span>
                            <label>Confirm Password</label>
                        </div>
                        <input class="registerBtn" type="submit" value="REGISTER">
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>