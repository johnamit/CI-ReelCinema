<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="NavBarStyle.css">
    <link rel="stylesheet" href="Error404Style.css">
    <title>Error 404</title>
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
  
  /*Error 404 css*/
  html, body{
    margin: 0;
    padding: 0;
    width: 100%;
    font-family: "Helvetica Neue",sans-serif;
    background-color: #101113;
    color: #f5f5f5;
}

.container, h2{
    margin: 0;
    padding: 0;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
}

.container h1{
    font-size: 200px;
    color: #f5f5f5;
}

.container h1:hover{
    color: #ffffff;
}

h2{
    padding-top: 250px;
    font-weight: lighter;
    font-size: 20px;
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

  <div class="container">
    <h1>404</h1>
  </div>
  <h2>PAGE NOT FOUND</h2>

</body>
</html>
