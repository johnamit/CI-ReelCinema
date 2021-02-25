<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinema - Now Showing</title>
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

/*---Now Showing CSS---*/
    *{
        box-sizing: border-box;
    }

    html, body{
        margin: 0;
        padding: 0;
        width: 100%;
        font-family: "Helvetica Neue",sans-serif;
        background-color: #101113;
        color: white;
    }

    nav.black ul{
        background: #ffffff;; 
    }

    nav.black .menuItem a, nav.black .logo{
        color: #000000;
    }

    .showingFilms{
        margin: auto;
        padding-top: 120px;
    }

    #showingHead{
        text-align: center;
        padding-bottom: 40px;
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
        color: #e4e4e4;
    }

    .col1 img{
        width: 80%;
        height: 85%;
    }

</style>

<body>
    <div class="toolbar">
        <header>
            <nav>
                <div><a href="<?php echo site_url('home/homepage')?>" class="logo">CINEMA</a></div>
                <div class="menu">
                    <ul>
                        <li class="menuItem" id="selected"><a href="<?php echo site_url('home/nowshowing')?>">NOW SHOWING</a></li>
                        <li class="menuItem"><a href="<?php echo site_url('home/comingsoon')?>">COMING SOON</a></li>
                        <li class="menuItem"><a href="<?php echo site_url('home/errorpage')?>">PROMOTIONS</a></li>
                        <li class="menuItem"><a href="<?php echo site_url('home/errorpage')?>">MEMBERSHIP</a></li>
                        <li class="menuItem"></li><li class="menuItem"></li><li class="menuItem"></li>
                        <li class="menuItem"><a href="<?php echo site_url('home/login')?>">LOGIN</a></li>
                        <li class="menuItem"><a href="<?php echo site_url('home/register')?>">REGISTER</a></li>
                    </ul>
                </div>
            </nav>
        </header>
    </div>

    <div class="showingFilms">
        <h2 id="showingHead">Now Showing</h2>
        <div class="row">
            <div class="col1">
                <a href="<?php echo site_url('films/thesimpsonsmovie')?>"><img src="<?php echo base_url();?>images/The Simpsons Movie.jpg" alt="TheSimpsonsMovie"></a>
                <h4>The Simpsons Movie</h4>
            </div>
            <div class="col1">
                <a href="<?php echo site_url('films/frozen')?>"><img src="<?php echo base_url();?>images/Frozen.jpg" alt="Frozen"></a>
                <h4>Frozen</h4>
            </div>
            <div class="col1">
                <a href="<?php echo site_url('films/avengersendgame')?>"><img src="<?php echo base_url();?>images/Avengers Endgame.jpg" alt="AvengersEndgame"></a>
                <h4>Avengers Endgame</h4>
            </div>
            <div class="col1">
                <a href="<?php echo site_url('films/interstellar')?>"><img src="<?php echo base_url();?>images/Interstellar.jpg" alt="Interstellar"></a>
                <h4>Interstellar</h4>
            </div>
        </div>
        <div class="row">
            <div class="col1">
                <a href="<?php echo site_url('films/thewolfofwallstreet')?>"><img src="<?php echo base_url();?>images/The Wolf of Wall Street.jpg" alt="TheWolfofWallStreet"></a>
                <h4>The Wolf of Wall Street</h4>
            </div>
            <div class="col1">
                <a href="<?php echo site_url('films/kingsmanthegoldencircle')?>"><img src="<?php echo base_url();?>images/Kingsman The Golden Circle.jpg" alt="KingsmanTheGoldenCircle"></a>
                <h4>Kingsman: The Golden Circle</h4>
            </div>
            <div class="col1">
                <a href="<?php echo site_url('films/babydriver')?>"><img src="<?php echo base_url();?>images/Baby Driver.jpg" alt="BabyDriver"></a>
                <h4>Baby Driver</h4>
            </div>
            <div class="col1">
                <a href="<?php echo site_url('films/americanpsycho')?>"><img src="<?php echo base_url();?>images/American Psycho.jpg" alt="AmericanPsycho"></a>
                <h4>American Psycho</h4>
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

</body>
</html>