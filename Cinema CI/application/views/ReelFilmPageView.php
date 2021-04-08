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
    <?php foreach($results as $info){ ?>
        <title>Reel | <?php echo $info['Name'] ?></title>
    <?php } ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <script>
	    $(document).ready(function(){
            $('#castsection, #screentimesection, #reviewsection, #inputarea').hide();
            
            $('#cast a').click(function(event){
                $(this).css('color', '#fff');
                $('#screentime a, #reviews a').css('color', '#121212');
                $('#castsection').show();
                $('#screentimesection, #reviewsection').hide();
            });

            $('#screentime a').click(function(event){
                $(this).css('color', '#fff');
                $('#cast a, #reviews a').css('color', '#121212');
                $('#screentimesection').show();
                $('#castsection, #reviewsection').hide();
            });

            $('#reviews a').click(function(event){
                $(this).css('color', '#fff');
                $('#cast a, #screentime a').css('color', '#121212');
                $('#reviewsection').show();
                $('#screentimesection, #castsection').hide();
                $('#writeReview').click(function(){
                    $('#inputarea').show();
                });
                $('.cancelReview').click(function(event){
                    event.preventDefault();
                    $('#inputarea').hide();
                    $('#reviewfield').val('');
                });
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
        overflow-x: hidden;
    }

    .navigation{
        position: relative;
        z-index: 9999;
    }

    .row{
        height: 94vh;
        width: 100vw;
        background-repeat: no-repeat;
        background-size: cover;
        --bs-gutter-x: 0rem;
    }

    .movieTitle img{
        height: 25%;
        width: 25%;
    }

    .movieDesc{
        width: 40%;
    }

    .movieTitle h4, .movieDesc h4, .releaseinfo h4{
        font-family: 'Public Sans', sans-serif;
        font-weight: 200;
        font-size: 20px;
    }

    .buyATicket{
        background: #FFCC00;
        color: #121212;
        border: none;
        width: 170px;
        height: 50px;
        text-transform: uppercase;
        font-family: 'Public Sans', sans-serif;
        font-size: 16px;
        border-radius: 20px;
    }

    .buyATicket:hover{
        border: 2px solid #121212;
    }

    #showtimebtn{
        font-family: 'Public Sans', sans-serif;;
        color: #fff;
        background: #121212;
        border: 2px solid #FFCC00;
        width: 100px;
        height: 50px;
        font-size: 18px;
        border-radius: 20px;
    }

    #showtimebtn:hover{
        background-color: #FFCC00;
        color: #121212;
        border-color: #121212;
        transition: 0.4s;
    }

    #mainContainer, #movieContainer{
        margin: 0;
        padding: 0;
        width: 100vw;
    }

    .col{
        padding-right: 0!important;
        padding-left: 0!important;
    }
    .row{
        margin-right: 0px;
        margin-left: 0px; 
    }

    #optionselector{
        color: #121212;
        background-color: #FFCC00;
        height: 3.5rem;
    }

    #optionrow{
        height: 3.5rem;
    }

    #cast a:hover, #screentime a:hover, #reviews a:hover{
        color:#fff;
    }

    .reviewbox a{
        color: #fff;
    }

    .reviewbox a:hover{
        color: #FFCC00;
    }

    #reviewername{
        color: #FFCC00;
        text-transform: uppercase;
    }

    #reviewfield{
        background: #121212;
        border: 1px solid #FFCC00;
        border-radius: 10px;
        color: #fff;
        padding: 10px;
    }

    .postReview{
        background: #FFCC00;
        border: 2px solid #121212;
        border-radius: 25px;
        width: 200px;
        height: 50px;
        color: #121212;
        font-weight: 600;
    }

    .postReview:hover{
        border: none;
    }

    #writeReview{
        border: none;
        background: none;
        color: #fff;
        padding: 0;
    }

    #writeReview:hover{
        color: #FFCC00;
    }

    .cancelReview{
        background: #121212;
        border: 2px solid #FFCC00;
        border-radius: 25px;
        width: 150px;
        height: 50px;
        color: #FFCC00;
        font-weight: 600;
    }

</style>

<body>
    <div class="container-fluid" id="mainContainer">
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

        <div class="container-fluid" id="movieContainer">
            <?php foreach($results as $info){ $this->session->set_userdata('reviewMoviename', $info['Name']);?>
            <div class="row" style="background-image: url('<?php echo base_url();?>images/background/<?php echo $info['Name']?> Background.png');">
                <div class="col my-auto mx-5">
                    <div class="movieTitle pb-4">
                        <img src="<?php echo base_url();?>images/logo/<?php echo $info['Name']?> Logo.png" alt="Film Logo">
                        <h4 class="pt-3"><?php echo $info['Genre'] ?> &nbsp;&nbsp;&nbsp;&nbsp; <?php echo $info['Duration'] ?> &nbsp;&nbsp;&nbsp;&nbsp; <?php echo $info['AgeRating'] ?></h4>
                    </div>
                    <div class="movieDesc pb-3"><h4><?php echo $info['Description']?></h4></div>
                    <div class="releaseinfo pb-4"><h4 id="releaseDate"><?php echo $info['ReleaseDate'] ?></h4></div>
                    <div class="buyBtn"><a href=""><button class="buyATicket">Watch Trailer</button></a></div>
                </div>
            </div>
            <?php } ?>
        </div>


        <div class="container-fluid py-3" id="optionselector">
            <div class="row text-center" id="optionrow">
                <div class="col" id="cast"><a href="#castsection">CAST</a></div>
                <div class="col" id="screentime"><a href="#screentimesection">SCREEN TIME</a></div>
                <div class="col" id="reviews"><a href="#reviewsection">REVIEWS</a></div>
            </div>
        </div>
        
        <div class="container pt-2 pb-4" id="castsection">
            <?php foreach($results as $info){?>
                <div class="castbox pt-5">
                    <h4>Director: <?php echo $info['Director'] ?></h4><br>
                    <h4>Cast: <?php echo $info['Cast'] ?></h4>
                </div>
            <?php } ?>
        </div>

        <div class="container pt-2 pb-4" id="screentimesection">
            <?php foreach($showdays as $day){ ?>
                <div class="showdays pt-5 pb-4">
                    <h3><?php echo $day['StringDate']?></h3>
                    <div class="showtimes pt-3">
                        <?php foreach($showtimes as $time){ ?>
                            <?php if ($time['StringDate'] == $day['StringDate']){?>
                                <a href="<?php echo site_url('reel/ticketdetails/'.$info['Name'].'/'.$time['Time'].'/'.$day['Date'])?>"><button id="showtimebtn"><?php echo $time['TimeHI'];?></button>&nbsp;&nbsp;</a>
                            <?php } ?>
                        <?php } ?>
                    </div>
                </div>
            <?php } ?>
            <h6>*Bookings will only be saved under booking history for registered members</h6>
        </div>


        <div class="container pt-2 pb-4" id="reviewsection">
            <div class="reviewbox pt-5">
                <a href="#inputarea"><button id="writeReview"><h4>Write a review</h4></button></a>
                <div id="inputarea">
                    <?php echo form_open('reel/reviewfunction');?>
                        <textarea class="mt-3" name="reviewfield" id="reviewfield" cols="60" rows="2" placeholder="Enter a review"></textarea><br><br>
                        <input class="postReview mb-3" type="submit" value="Post Review">
                        <button class="cancelReview">Cancel</button>
                    </form>
                </div>
            </div>

            <hr>
            <?php foreach($reviews as $review){?>
                <div class="reviewsection pt-4" id="reviews">
                    <h5>"<?php echo $review['Message']?>"</h5>
                    <h6 id="reviewername"><?php echo $review['Forename']." ".$review['Surname']?></h6>
                </div> 
            <?php } ?>                           
        </div>

    </div>
</body>
</html>