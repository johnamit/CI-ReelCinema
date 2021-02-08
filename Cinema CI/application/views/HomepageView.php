<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinema - Home</title>
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


/*---Homepage CSS---*/
    *{
        box-sizing: border-box;
    }

    html, body{
        margin: 0;
        padding: 0;
        width: 100%;
        font-family: "Helvetica Neue",sans-serif;
        background-color: #101113;
        color: #f5f5f5;
    }

    header{
        height: 90vh;
        width: 100%;
        background: url(SkyfallHeroDark.jpg) no-repeat 50% 50%;
        background-size: cover;
    }

    .popularFilms{
        margin: auto;
        padding-top: 20px;
    }

    #popularHead{
        text-align: center;
        padding-bottom: 20px;
    }

    .row{
        display: flex;
        margin-left: 10%;
        margin-right: 10%;
    }

    .col1{
        flex: 25%;
        padding: 10px;
    }

    .col1 h4{
        font-weight: lighter;
        color: #f5f5f5;
    }


    .col1 img{
        width: 80%;
        height: 80%;
    }

    .HeroText{
        margin: 0;
        padding-top: 2px;
        padding-left: 4.5vw;
        font-size: 130px;
    }

    .durationGenre{
        margin: 0;
        padding-top: 30vh;
        padding-left: 5vw;
        font-size: 20px;
        color: #c5c4c4;
    }

    span{
        border: solid 1px #e4e4e4;
        padding: 2px 15px;
        color: #c5c4c4;
    }

    .buyATicket{
        background: #0000;
        color: #f5f5f5;
        border: solid 2px #f5f5f5;
        border-radius: 25px;
        width: 150px;
        height: 40px;
        font-size: 16px;
    }

    .buyATicket:hover{
        background: #f5f5f5;
        color: #101113;
    }

    .buyBtn{
        display: inline-block;
        padding-top: 40px;
        padding-left: 9vh;
    }

    .buyBtn span{
        border: none;
    }

    .buyBtn a{
        text-decoration: none;
        color: #e4e4e4;
        padding-left: 60px;
        font-size: 18px;
    }

    .buyBtn a:hover{
        color: #ffffff;
    }

    .Hero{
        padding-top: 15px;
    }

    .warningBox *{
        background-color: #f5f5f5;
        text-align: center;
        color: #101113;
        padding-top: 10px;
        padding-bottom: 10px;
    }

    .warningBox span{
        font-size: 18px;
        font-weight: normal;
        border: none;
        text-decoration: none;
        background: #0000;
    }

</style>

<body>
    <div class="toolbar">
        <header>
            <nav>
                <div><a href="<?php echo site_url('home/homepage')?>" class="logo">CINEMA</a></div>
                <div class="menu">
                    <ul>
                        <li class="menuItem"><a href="<?php echo site_url('home/nowshowing')?>">NOW SHOWING</a></li>
                        <li class="menuItem"><a href="<?php echo site_url('home/comingsoon')?>">COMING SOON</a></li>
                        <li class="menuItem"><a href="#">PROMOTIONS</a></li>
                        <li class="menuItem"><a href="#">MEMBERSHIP</a></li>
                        <li class="menuItem"></li><li class="menuItem"></li><li class="menuItem"></li>
                        <li class="menuItem"><a href="<?php echo site_url('home/login')?>">LOGIN</a></li>
                        <li class="menuItem"><a href="<?php echo site_url('home/register')?>">REGISTER</a></li>
                    </ul>
                </div>
            </nav>
            <div class="Hero">
                <h4 class="durationGenre">2h 24min &nbsp;&nbsp; Action, Adventure &nbsp;&nbsp; <span>12A</span></h4>
                <h1 class="HeroText">SKYFALL</h1>
                <div class="buyBtn">
                    <button class="buyATicket">Buy A Ticket</button>
                    <span><a href="#">Learn More</a></span>
                </div>
            </div>
        </header>  
    </div>

    <div class="popularFilms">
        <h2 id="popularHead">POPULAR FILMS</h2>
        <div class="row">
            <div class="col1">
                <a href="MoviePageOne.html"><img src="Placeholder.jpg" alt="Placeholder"></a>
                <h4>Placeholder Movie A</h4>
            </div>
            <div class="col1">
                <a href="#"><img src="Placeholder.jpg" alt="Placeholder"></a>
                <h4>Placeholder Movie B</h4>
            </div>
            <div class="col1">
                <a href="#"><img src="Placeholder.jpg" alt="Placeholder"></a>
                <h4>Placeholder Movie C</h4>
            </div>
            <div class="col1">
                <a href="#"><img src="Placeholder.jpg" alt="Placeholder"></a>
                <h4>Placeholder Movie D</h4>
            </div>
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

    <div class="warningBox">
        <h2>COVID WARNING <br><span>correspondence with government guidelines all cinemas are closed until further notice</span></h2>
    </div>

    <div class="memberAd">
        <h2>BECOME A MEMBER</h2>
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis rerum magni sed molestias autem excepturi dignissimos inventore nulla dolorum dicta! Officia ut itaque delectus, voluptatibus quidem distinctio quo in vero.
    </div>
    
    <div class="footer">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Impedit perferendis nam dolores libero, repellendus voluptatum quis inventore, iusto dolore qui voluptatibus explicabo corporis deleniti harum non, illo iure quod voluptates!
    </div>
</body>
</html>