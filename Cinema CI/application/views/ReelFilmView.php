<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/fontstyle.css">
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
        height: 90vh;
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
                <img src="<?php echo base_url();?>images/carouselimg2.jpg" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?php echo base_url();?>images/carouselimg1.jpg" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?php echo base_url();?>images/carouselimg3.jpg" alt="...">
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
                        <h4 class="text-left pt-3">American Psycho</h4>
                    </div>
                </div>
                <div class="col">
                    <div class="colimg text-center">
                        <a href="<?php echo site_url('reel/filmpage/Avengers Endgame')?>"><img id="pFilm" src="<?php echo base_url();?>images/Avengers Endgame.jpg" alt="AvengersEndgame"></a>
                        <h4 class="text-left pt-3">Avengers Endgame</h4>
                    </div>
                </div>
                <div class="col">
                    <div class="colimg text-center">
                        <a href="<?php echo site_url('reel/filmpage/Baby Driver')?>"><img id="pFilm" src="<?php echo base_url();?>images/Baby Driver.jpg" alt="BabyDriver"></a>
                        <h4 class="text-left pt-3">Baby Driver</h4>
                    </div>  
                </div>
                <div class="col">
                    <div class="colimg text-center">
                        <a href="<?php echo site_url('reel/filmpage/Frozen')?>"><img id="pFilm" src="<?php echo base_url();?>images/Frozen.jpg" alt="Frozen"></a>
                        <h4 class="text-left pt-3">Frozen</h4>
                    </div>
                </div>
            </div>

            <div class="row pt-5">
                <div class="col">
                    <div class="colimg text-center">
                        <a href="<?php echo site_url('reel/filmpage/Interstellar')?>"><img id="pFilm" src="<?php echo base_url();?>images/Interstellar.jpg" alt="Interstellar"></a>
                        <h4 class="text-left pt-3">Interstellar</h4>
                    </div>
                </div>
                <div class="col">
                    <div class="colimg text-center">
                        <a href="<?php echo site_url('reel/filmpage/Kingsman The Golden Circle')?>"><img id="pFilm" src="<?php echo base_url();?>images/Kingsman The Golden Circle.jpg" alt="KingsmanTheGoldenCircle"></a>
                        <h4 class="text-left pt-3">Kingsman The Golden Circle</h4>
                    </div>
                </div>
                <div class="col">
                    <div class="colimg text-center">
                        <a href="<?php echo site_url('reel/filmpage/The Simpsons Movie')?>"><img id="pFilm" src="<?php echo base_url();?>images/The Simpsons Movie.jpg" alt="TheSimpsonsMovie"></a>
                        <h4 class="text-left pt-3">The Simpsons Movie</h4>
                    </div>
                </div>
                <div class="col">
                    <div class="colimg text-center">
                        <a href="<?php echo site_url('reel/filmpage/The Wolf of Wall Street')?>"><img id="pFilm" src="<?php echo base_url();?>images/The Wolf of Wall Street.jpg" alt="TheWolfofWallStreet"></a>
                        <h4 class="text-left pt-3">The Wolf of Wall Street</h4>
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
                        <h4 class="text-left pt-3">A Silent Voice</h4>
                    </div>
                </div>
                <div class="col">
                    <div class="colimg text-center">
                        <a href=""><img id="pFilm" src="<?php echo base_url();?>images/Creed.jpg" alt="Creed"></a>
                        <h4 class="text-left pt-3">Creed</h4>
                    </div>
                </div>
                <div class="col">
                    <div class="colimg text-center">
                        <a href="<?php echo site_url('reel/filmpage/Django Unchained')?>"><img id="pFilm" src="<?php echo base_url();?>images/Django Unchained.jpg" alt="DjangoUnchained"></a>
                        <h4 class="text-left pt-3">Django Unchained</h4>
                    </div>
                </div>
                <div class="col">
                    <div class="colimg text-center">
                        <a href="<?php echo site_url('reel/filmpage/Shrek')?>"><img id="pFilm" src="<?php echo base_url();?>images/Shrek.jpg" alt="Shrek"></a>
                        <h4 class="text-left pt-3">Shrek</h4>
                    </div>
                </div>
            </div>

            <div class="row pt-5">
                <div class="col">
                    <div class="colimg text-center">
                        <a href="<?php echo site_url('reel/filmpage/Silence of the Lambs')?>"><img id="pFilm" src="<?php echo base_url();?>images/Silence of the Lambs.jpg" alt="Silence of the Lambs"></a>
                        <h4 class="text-left pt-3">Silence of the Lambs</h4>
                    </div>
                </div>
                <div class="col">
                    <div class="colimg text-center">
                        <a href="<?php echo site_url('reel/filmpage/The Greatest Showman')?>"><img id="pFilm" src="<?php echo base_url();?>images/The Greatest Showman.jpg" alt="The Greatest Showman"></a>
                        <h4 class="text-left pt-3">The Greatest Showman</h4>
                    </div>
                </div>
                <div class="col">
                    <div class="colimg text-center">
                        <a href="<?php echo site_url('reel/filmpage/The Theory of Everything')?>"><img id="pFilm" src="<?php echo base_url();?>images/The Theory of Everything.jpg" alt="The Theory of Everything"></a>
                        <h4 class="text-left pt-3">The Theory of Everything</h4>
                    </div>
                </div>
                <div class="col"></div>
            </div>
        </div>
    </div>

</body>
</html>