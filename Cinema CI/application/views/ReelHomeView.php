<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/fontstyle.css">
    <title>Reel | Home</title>
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
        height: 100vh;
        width: 100vw;
    }

    #membership h2, #popularFilms h2{
        color: #fff;
        font-weight: 600;
    }

    #popularFilms h4{
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

        <div id="reelHomeCarousel" class="carousel slide" data-bs-ride="carousel">
            
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
                <button type="button" data-bs-target="#reelHomeCarousel" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#reelHomeCarousel" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#reelHomeCarousel" data-bs-slide-to="2"></button>
            </div>
        </div>

        <div id="popularFilms" class="container">
            <div class="py-5 text-left">
                <h2 id="popularFilms-title">Popular Films</h2>
            </div>

            <div class="row">
                <div class="col">
                    <div class="colimg text-center">
                        <a href=""><img id="pFilm" src="<?php echo base_url();?>images/Avengers Endgame.jpg" alt="TheSimpsonsMovie"></a>
                    </div>
                    <h4 class="text-left pt-4">Placeholder Text</h4>
                </div>
                <div class="col">
                    <div class="colimg text-center">
                        <a href=""><img id="pFilm" src="<?php echo base_url();?>images/Avengers Endgame.jpg" alt="TheSimpsonsMovie"></a>
                    </div>
                    <h4 class="text-left pt-4">Placeholder Text</h4>
                </div>
                <div class="col">
                    <div class="colimg text-center">
                        <a href=""><img id="pFilm" src="<?php echo base_url();?>images/Avengers Endgame.jpg" alt="TheSimpsonsMovie"></a>
                    </div>
                    <h4 class="text-left pt-4">Placeholder Text</h4>
                </div>
                <div class="col">
                    <div class="colimg text-center">
                        <a href=""><img id="pFilm" src="<?php echo base_url();?>images/Avengers Endgame.jpg" alt="TheSimpsonsMovie"></a>
                    </div>
                    <h4 class="text-left pt-4">Placeholder Text</h4>
                </div>
            </div>
            
        </div>

        <div id="membership" class="container my-5">
            <div class="py-5 text-left">
                <h2 id="membership-title">Become A Member</h2>
            </div>
        </div>
    
</body>
</html>