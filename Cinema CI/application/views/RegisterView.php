<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinema - Login</title>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
</head>

<style>
    /*---Navbar CSS---*/
    .logo{
        line-height: 60px;
        position: fixed;
        float: left;
        margin: 10px 40px;
        color: #e4e4e4;
        font-weight: bold;
        font-size: 20px;
        letter-spacing: 2px;
        text-decoration: none;
    }


    nav{
        position: fixed;
        width: 100%;
        line-height: 60px;
        z-index: 100;
    }


    nav ul{
        margin: 0;
        padding: 0 40px 0 0;
        line-height: 60px;
        list-style: none;
        text-align: right;
        overflow: hidden;
        background: #0000; /* #0000 is rgb value rgb(0,0,0,0.0)*/
        transition: 1s;
    }


    nav.black ul{
        background:#101113; 
    }


    .menuItem{
        display: inline-block;
        padding: 10px 40px;
    }

    .menuItem a{
        text-decoration: none;
        color: #e4e4e4;
        font-size: 14px;
    }

    .logo:hover, .menuItem a:hover, .col1 h4:hover{
        color: #ffffff;
        cursor: pointer;
    }

    #selected{
        font-weight: bold;
        color: #ffffff;
    }

    /*---Register Page CSS---*/
    body{
        margin: 0;
        padding: 0;
        font-family: "Helvetica Neue",sans-serif;
        background: #101113;
        height: 100vh;
        overflow: hidden;
    }

    .container{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 600px;
        background: #101113;
        border-radius: 10px;
    }

    .container h1{
        font-size: 35px;
        color: #e4e4e4;
        font-weight: bold;
        letter-spacing: 2px;
        text-align: center;
        padding: 0 0 20px 0;
    }

    .container h1:hover{
        color: #ffffff;
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
        background: #ffffff;
    }

    .inputField input:focus ~ label,
    .inputField input:valid ~ label{
        top: -5px;
        color: #ffffff;
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
        color: #ffffff;
    }

    .loginBtn{
        width: 100%;
        height: 50px;
        border: solid 2px #ffffff;
        background: #101113;
        border-radius: 25px;
        font-size: 18px;
        color: #ffffff;
        font-weight: 700;
        cursor: pointer;
        outline: none;
        margin-top: 20px;
        margin-bottom: 20px;
    }

    .loginBtn:hover{
        background: #ffffff;
        color: #000000;
    }

    .register{
        margin: 30px 0;
        text-align: center;
        font-size: 16px;
    }

    .regLink {
        color: #3d3d3d;
        text-decoration: none;
    }

    .regLink:hover{
        color: #ffffff;
    }
</style>

<body>
    <div class="toolbar">
        <header>
            <nav>
                <div><a href="Homepage.html" class="logo">CINEMA</a></div>
            </nav>
        </header>
    </div>

    <div class="container">
        <h1>CINEMA REGISTER</h1>
        <?php echo form_open('user/doregister');?>
            <div class="inputField" id="inputSpacing">
                <input type="text" name="forename" required>
                <span></span>
                <label>Forename</label>
            </div>            

            <div class="inputField" id="inputSpacing">
                <input type="text" name="surname" required>
                <span></span>
                <label>Surname</label>
            </div> 

            <div class="inputField" id="inputSpacing">
                <input type="text" name="email" required>
                <span></span>
                <label>Email</label>
            </div>

            <div class="inputField">
                <input type="password" name="password" required>
                <span></span>
                <label>Password</label>
            </div>

            <input class="loginBtn" type="submit" value="Register">
        </form>

        <div class="register">
            <a class="regLink" href="Login.html">Already a member?</a>
        </div>

    </div>

    <script>
        $(window).scroll(function(){
            if($(window).scrollTop()){
                $('nav').addClass('black');
            }
            else{
                $('nav').removeClass('black');
            }
        })
    </script>

</body>
</html>