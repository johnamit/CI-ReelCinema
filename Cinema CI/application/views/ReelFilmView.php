<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/fontstyle.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <title>Reel | Film</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</head>

<style>
    body{
        font-family: "Monument Extended";
        background-color: #121212;
        color: #fff;
    }

    .carousel-inner img{
        height: 85vh;
        width: 100vw;
    }

    #comingSoon h2, #nowShowing h2{
        color: #fff;
        font-weight: 600;
    }

    #comingSoon h4, #nowShowing h4{
        font-size: 18px;
    }

    #pFilm{
        height: 450px;
        width: 300px;
    }

    .navigation{
        position: relative;
        z-index: 9999;
    }

    .footer div{
        font-family: Arial, Helvetica, sans-serif;
    }

    i{
        font-size: 20px;
    }

    .footerlogo img{
        height: 60px;
    }

    h4{
        color: #fff;
    }

    .carousel-content {
        position: absolute;
        bottom: 15%;
        left: 5%;
        z-index: 20;
    }

    .carousel-content p{
        font-size: 45px;
        width: 80%;
        text-transform: uppercase;
    }

    #nsredirect{
        background: #FFCC00;
        color: #121212;
        border: none;
        width: 170px;
        height: 50px;
        text-transform: uppercase;
        font-family: Arial, Helvetica, sans-serif;
        font-weight: 600;
        font-size: 17px;
        border-radius: 20px;
    }

</style>

<body>
    
    <div class="navigation">
        <?php 
            if($this->session->has_userdata('name')){
                $this->load->view('ReelUserNav');
            }
            else{
                $this->load->view('ReelNav');
            }
        ?>
    </div>

    <div id="reelFilmCarousel" class="carousel slide" data-bs-ride="carousel">    
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php echo base_url();?>images/carouselimgdark.png" alt="...">
                <div class="carousel-content">
                    <p>Explore our selection of blockbuster films</p>
                    <button id="nsredirect">NOW SHOWING</button>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?php echo base_url();?>images/carouselimg2dark.png" alt="...">
                <div class="carousel-content">
                    <p>Take a look at what's coming to the big screen</p>
                    <button id="nsredirect">COMING SOON</button>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?php echo base_url();?>images/carouselimg3dark.png" alt="...">
                <div class="carousel-content">
                    <p>Find out what we're doing to keep everyone safe</p>
                    <button id="nsredirect">FIND OUT MORE</button>
                </div>
            </div>
        </div>

        <div class="carousel-indicators">
            <button type="button" data-bs-target="#reelFilmCarousel" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#reelFilmCarousel" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#reelFilmCarousel" data-bs-slide-to="2"></button>
        </div>
    </div>

    <div class="container-fluid mainContainer">
        <div id="nowShowing" class="container">
            <div class="py-5 text-left">
                <h2 id="nowShowing-title">Now Showing</h2>
            </div>

            <div class="row">
                <div class="col">
                    <div class="colimg text-center">
                        <a href="<?php echo site_url('reel/filmpage/American Psycho')?>"><img id="pFilm" src="<?php echo base_url();?>images/American Psycho.jpg" alt="AmericanPsycho"></a>
                        <a href="<?php echo site_url('reel/filmpage/American Psycho')?>"><h4 class="text-left pt-4">American Psycho</h4></a>
                    </div>
                </div>
                <div class="col">
                    <div class="colimg text-center">
                        <a href="<?php echo site_url('reel/filmpage/Avengers Endgame')?>"><img id="pFilm" src="<?php echo base_url();?>images/Avengers Endgame.jpg" alt="AvengersEndgame"></a>
                        <a href="<?php echo site_url('reel/filmpage/Avengers Endgame')?>"><h4 class="text-left pt-4">Avengers Endgame</h4></a>
                    </div>
                </div>
                <div class="col">
                    <div class="colimg text-center">
                        <a href="<?php echo site_url('reel/filmpage/Baby Driver')?>"><img id="pFilm" src="<?php echo base_url();?>images/Baby Driver.jpg" alt="BabyDriver"></a>
                        <a href="<?php echo site_url('reel/filmpage/Baby Driver')?>"><h4 class="text-left pt-4">Baby Driver</h4></a>
                    </div>  
                </div>
                <div class="col">
                    <div class="colimg text-center">
                        <a href="<?php echo site_url('reel/filmpage/Frozen')?>"><img id="pFilm" src="<?php echo base_url();?>images/Frozen.jpg" alt="Frozen"></a>
                        <a href="<?php echo site_url('reel/filmpage/Frozen')?>"><h4 class="text-left pt-4">Frozen</h4></a>
                    </div>
                </div>
            </div>

            <div class="row pt-5">
                <div class="col">
                    <div class="colimg text-center">
                        <a href="<?php echo site_url('reel/filmpage/Interstellar')?>"><img id="pFilm" src="<?php echo base_url();?>images/Interstellar.jpg" alt="Interstellar"></a>
                        <a href="<?php echo site_url('reel/filmpage/Interstellar')?>"><h4 class="text-left pt-4">Interstellar</h4></a>
                    </div>
                </div>
                <div class="col">
                    <div class="colimg text-center">
                        <a href="<?php echo site_url('reel/filmpage/Kingsman The Golden Circle')?>"><img id="pFilm" src="<?php echo base_url();?>images/Kingsman The Golden Circle.jpg" alt="KingsmanTheGoldenCircle"></a>
                        <a href="<?php echo site_url('reel/filmpage/Kingsman The Golden Circle')?>"><h4 class="text-left pt-4">Kingsman The Golden Circle</h4></a>
                    </div>
                </div>
                <div class="col">
                    <div class="colimg text-center">
                        <a href="<?php echo site_url('reel/filmpage/The Simpsons Movie')?>"><img id="pFilm" src="<?php echo base_url();?>images/The Simpsons Movie.jpg" alt="TheSimpsonsMovie"></a>
                        <a href="<?php echo site_url('reel/filmpage/The Simpsons Movie')?>"><h4 class="text-left pt-4">The Simpsons Movie</h4></a>
                    </div>
                </div>
                <div class="col">
                    <div class="colimg text-center">
                        <a href="<?php echo site_url('reel/filmpage/The Wolf of Wall Street')?>"><img id="pFilm" src="<?php echo base_url();?>images/The Wolf of Wall Street.jpg" alt="TheWolfofWallStreet"></a>
                        <a href="<?php echo site_url('reel/filmpage/The Wolf of Wall Street')?>"><h4 class="text-left pt-4">The Wolf of Wall Street</h4></a>
                    </div>
                </div>
            </div>  
        </div>


        <div id="comingSoon" class="container pt-5">
            <div class="py-5 text-left">
                <h2 id="comingSoon-title">Coming Soon</h2>
            </div>

            <div class="row">
                <div class="col">
                    <div class="colimg text-center">
                        <a href="<?php echo site_url('reel/filmpage/A Silent Voice')?>"><img id="pFilm" src="<?php echo base_url();?>images/A Silent Voice.jpg" alt="A Silent Voice"></a>
                        <a href="<?php echo site_url('reel/filmpage/A Silent Voice')?>"><h4 class="text-left pt-4">A Silent Voice</h4></a>
                    </div>
                </div>
                <div class="col">
                    <div class="colimg text-center">
                        <a href="<?php echo site_url('reel/filmpage/Creed')?>"><img id="pFilm" src="<?php echo base_url();?>images/Creed.jpg" alt="Creed"></a>
                        <a href="<?php echo site_url('reel/filmpage/Creed')?>"><h4 class="text-left pt-4">Creed</h4></a>
                    </div>
                </div>
                <div class="col">
                    <div class="colimg text-center">
                        <a href="<?php echo site_url('reel/filmpage/Django Unchained')?>"><img id="pFilm" src="<?php echo base_url();?>images/Django Unchained.jpg" alt="DjangoUnchained"></a>
                        <a href="<?php echo site_url('reel/filmpage/Django Unchained')?>"><h4 class="text-left pt-4">Django Unchained</h4></a>
                    </div>
                </div>
                <div class="col">
                    <div class="colimg text-center">
                        <a href="<?php echo site_url('reel/filmpage/Shrek')?>"><img id="pFilm" src="<?php echo base_url();?>images/Shrek.jpg" alt="Shrek"></a>
                        <a href="<?php echo site_url('reel/filmpage/Shrek')?>"><h4 class="text-left pt-4">Shrek</h4></a>
                    </div>
                </div>
            </div>

            <div class="row pt-5 pb-5">
                <div class="col">
                    <div class="colimg text-center">
                        <a href="<?php echo site_url('reel/filmpage/Silence of the Lambs')?>"><img id="pFilm" src="<?php echo base_url();?>images/Silence of the Lambs.jpg" alt="Silence of the Lambs"></a>
                        <a href="<?php echo site_url('reel/filmpage/Silence of the Lambs')?>"><h4 class="text-left pt-4">Silence of the Lambs</h4></a>
                    </div>
                </div>
                <div class="col">
                    <div class="colimg text-center">
                        <a href="<?php echo site_url('reel/filmpage/The Greatest Showman')?>"><img id="pFilm" src="<?php echo base_url();?>images/The Greatest Showman.jpg" alt="The Greatest Showman"></a>
                        <a href="<?php echo site_url('reel/filmpage/The Greatest Showman')?>"><h4 class="text-left pt-4">The Greatest Showman</h4></a>
                    </div>
                </div>
                <div class="col">
                    <div class="colimg text-center">
                        <a href="<?php echo site_url('reel/filmpage/The Theory of Everything')?>"><img id="pFilm" src="<?php echo base_url();?>images/The Theory of Everything.jpg" alt="The Theory of Everything"></a>
                        <a href="<?php echo site_url('reel/filmpage/The Theory of Everything')?>"><h4 class="text-left pt-4">The Theory of Everything</h4></a>
                    </div>
                </div>
                <div class="col"></div>
            </div>
        </div>

        <div class="footer px-5 py-5">
            <br><br>
            <div class="row">
                <div class="col-3 footerlogo"><img src="<?php echo base_url();?>images/LogoWhite.png" alt="REEL"></div>
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