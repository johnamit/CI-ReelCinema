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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <title>Reel | Footer</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    
</head>

<style>
    body{
        background: #121212;
    }

    #footerContainer{
        background: #121212;
        color: #fff;
    }

    .logo img{
        height: 60px;
    }

    i{
        font-size: 20px;
    }
</style>

<body>
    <div class="container-fluid" id="footerContainer">
        <div class="container-fluid py-5 px-5">
            <div class="row">
                <div class="col-3 logo"><img src="<?php echo base_url();?>images/LogoWhite.png" alt="REEL"></div>
                <div class="col-3">ABOUT US<br>MEMBERSHIP<br>GIFT CARDS<br>CAREERS</div>
                <div class="col-3">TERMS AND CONDITIONS<br>COOKIE POLICY<br>PRIVACY POLICY<br>ALLERGENS AND NUTRITION<br>MODERN SLAVERY STATEMENT</div>
                <div class="col-2"></div>
                <div class="col-1 text-center"><i class="bi bi-facebook"></i><br><i class="bi bi-instagram"></i><br><i class="bi bi-twitter"></i><br><i class="bi bi-youtube"></i></div>
            </div>
            <br>
            <hr>
            <div class="row">
                <div class="col-3">REEL Cinemas. All rights reserved.</div>
            </div>
        </div>
    </div>
    
</body>
</html>