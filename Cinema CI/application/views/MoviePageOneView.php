<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinema - Movie A</title>
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

/*---MoviePageOne CSS---*/
    html, body{
        margin: 0;
        padding: 0;
        width: 100%;
        font-family: "Helvetica Neue",sans-serif;
        background-color: #101113;
        color: #f5f5f5;
    }

    nav.black ul{
        background: #ffffff;
    }

    nav.black .menuItem a, nav.black .logo{
        color: #000000;
    }

    .movieOverview{
        padding-top: 30vh;
        padding-left: 2vw;
        height: 90vh;
    }

    .movieImage img{
        width: 25rem;
        height: 40rem;
        float: right;
        padding-right: 250px;
        transform: translateY(-50px);
    }

    .movieTitle h1{
        font-size: 70px;
        margin: 0;
        padding-bottom: 10px;

    }

    .movieTitle h4{
        font-weight: lighter;
        margin: 0;
        padding-bottom: 6px;
        color: #a7a7a7;
    }

    .movieDesc{
        padding: 5px 0px;
        width: 40%;
    }

    .movieDesc h4{
        font-weight: normal;
    }

    #releaseDate{
        padding-bottom: 30px;
        font-weight: normal;
        color: #a7a7a7;
    }

    .buyBtn{
        padding-bottom: 13vh;
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

    .castBlock h4{
        font-weight: normal;
    }

    .movieTitle, .movieDesc, #releaseDate, .buyBtn{
        transform: translateY(-20px);
    }

    #trailerHead, #reviewHead{
        margin: 0;
        text-align: center;
        padding-bottom: 60px;
        transform: translateX(-30px);
        font-size: 40px;
    }

    .row{
        display: flex;
        margin-left: 10%;
        margin-right: 10%;
    }

    .trailerCol{
        flex: 33.33%;
        padding: 10px;
    }

    .trailerCol img{
        width: 90%;
        height: 90%;
    }

    .reviews{
        margin-top: 20vh;
    }

    .reviews a{
        margin-left: 8vh;
        text-decoration: none;
        color: #a7a7a7;
    }

    .reviews a:hover{
        color: #ffffff;
    }

</style>

<body>
    <div class="toolbar">
        <header>
            <nav>
                <div><a href="Homepage.html" class="logo">CINEMA</a></div>
                <div class="menu">
                    <ul>
                        <li class="menuItem"><a href="NowShowing.html">NOW SHOWING</a></li>
                        <li class="menuItem"><a href="ComingSoon.html">COMING SOON</a></li>
                        <li class="menuItem"><a href="#">PROMOTIONS</a></li>
                        <li class="menuItem"><a href="#">MEMBERSHIP</a></li>
                        <li class="menuItem"></li><li class="menuItem"></li><li class="menuItem"></li>
                        <li class="menuItem"><a href="Login.html">LOGIN</a></li>
                        <li class="menuItem"><a href="Register.html">REGISTER</a></li>
                    </ul>
                </div>
            </nav>
        </header>
    </div>


    <div class="movieOverview">
        <div class="movieImage"><img src="Placeholder.jpg" alt="Placeholder"></div>
        <div class="movieTitle">
            <h4>Drama, Crime Fiction &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2h 58min</h4>
            <h1>Placeholder Movie</h1>
        </div>
        <div class="movieDesc">
            <h4>
                Quisque libero sem, aliquam et eleifend at, commodo sed leo. Ut quis placerat nulla. Praesent non pretium dolor. Morbi convallis elit eros, in rhoncus est facilisis a. Fusce consequat blandit lectus ac eleifend.
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Et labore veritatis quas quos molestias iure inventore autem dolorem voluptatem eum animi, aspernatur laudantium. Earum eligendi veritatis, sed dolorum sunt reiciendis.
            </h4>
        </div>
        <h4 id="releaseDate">Release Date</h4>
        <div class="buyBtn">
            <button class="buyATicket">Buy A Ticket</button>
        </div>
        <div class="castBlock">
            <h3>Cast</h3>
            <h4>John Doe &nbsp;&nbsp; Jane Doe &nbsp;&nbsp; Joe Bloggs</h4>
            <h4>John Doe &nbsp;&nbsp; Jane Doe &nbsp;&nbsp; Joe Bloggs</h4>
        </div>
    </div>

    <div class="trailers">
        <h2 id="trailerHead">Trailers</h2>
        <div class="row">
            <div class="trailerCol">
                <img src="WidePlaceholder.jpg" alt="WidePlaceholder">
            </div>
            <div class="trailerCol">
                <img src="WidePlaceholder.jpg" alt="WidePlaceholder">
            </div>
            <div class="trailerCol">
                <img src="WidePlaceholder.jpg" alt="WidePlaceholder">
            </div>
        </div>
    </div>
    
    <div class="reviews">
        <h2 id="reviewHead">Reviews</h2>
        <h4><a href="#">Make a review</a></h4>
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