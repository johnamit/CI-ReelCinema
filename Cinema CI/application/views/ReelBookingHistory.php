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

    .maincontainer{
        margin-top: 200px;
        margin-bottom: 100px;
    }

    #pFilm{
        height: 225px;
        width: 150px;
    }

    #logo{
        width: 300px;
        height: 150px;
    }

    .row{
        border-bottom: 1px solid #fff;
    }

    button{
        background: #121212;
        border: 2px solid #FFCC00;
        border-radius: 25px;
        width: 150px;
        height: 50px;
        color: #FFCC00;
        font-weight: 600;
    }

    button:hover{
        border: 2px solid #121212;
        background: #FFCC00;
        color: #121212;
    }

    .footer{
        position: relative;
        z-index: -9999;
        bottom: 0;
        width: 100%;
    }

    .footer div{
        font-family: Arial, Helvetica, sans-serif;
        border-bottom: none;
    }

    i{
        font-size: 20px;
    }

    .footerlogo img{
        height: 60px;
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

    <div class="container maincontainer">
        <?php foreach($bookinginfo as $booking){?>
            <div class="row">
                <div class="col-3 bookingimg">
                    <img id="logo" src="<?php echo base_url();?>images/logo/<?php echo $booking['Moviename']?> Logo.png" alt="<?php echo $booking['Moviename']?>">
                </div>
                <div class="col-7 bookingdetails my-auto">
                    <h6><?php echo $booking['Date'].", ".$booking['Time'];?></h6>
                    <h6><?php echo $booking['Forename'].", ".$booking['Surname'].", ".$booking['Email'];?></h6>
                    <h6><?php echo "Screen: ".$booking['Screen'].", Seats: ".$booking['Seat'];?></h6>
                </div>
                <div class="col qrbtn my-auto">
                <a href="<?php echo site_url('reel/historyCheck/'.$booking['Forename'].'/'.$booking['Surname'].'/'.$booking['Moviename'].'/'.$booking['Time'].'/'.$booking['Date'].'/'.$booking['Screen'].'/'.$booking['Seat'])?>"><button>VIEW QR</button></a>
                </div>
            </div>
            <br>
        <?php } ?>
        <div class="nomorebooking text-center"><h6>NO FURTHER BOOKINGS FOUND</h6></div>
    </div>
            

</body>
</html>