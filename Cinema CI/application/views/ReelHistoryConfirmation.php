<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/fontstyle.css">
    <title>Reel | Confirmation</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.qrcode.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/qrcode.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){

            var customer = "<?php echo $this->session->userdata('historyForename')." ".$this->session->userdata('historySurname');?>"
            var moviename = "<?php echo str_replace("%20"," ",$this->session->userdata('historyMoviename'));?>";
            var date = "<?php echo $this->session->userdata('historyDay');?>";
            var time = "<?php echo $this->session->userdata('historyTime');?>";
            var screen = "<?php echo $this->session->userdata('historyScreen');?>";
            var seat = "<?php echo str_replace("%20"," ",$this->session->userdata('historySeats'));?>"; 
            
            $('#qrcode').qrcode({
                width: 200,
                height: 200,
                background: "#FFCC00",
                text: "Reserved for "+customer+"\nMoviename: "+moviename+"\nTime: "+time+"\nDate: "+date+"\nScreen: "+screen+"\nSeats: "+seat
            });
        });
    </script>
</head>
<style>
    body{
        font-family: "Monument Extended";
        background-color: #FFCC00;
        color: #000000;
    }

    .maincontainer{
        padding-top: 200px;
    }

    .confirmationtitle h3{
        font-weight: 600;
    }

    .confirmationbody{
        padding-left: 100px;
        padding-right: 100px;
    }

    .homebtn button{
        background: #000000;
        border: 2px solid #FFCC00;
        border-radius: 25px;
        width: 300px;
        height: 50px;
        color: #FFCC00;
        font-weight: 600;
    }

    .homebtn button:hover{
        border: none;
    }

    .parseFields{
        display: none;
    }
</style>

<body>

    <div class="container maincontainer text-center">
        <div id="qrcode"></div>
        <div class="confirmationtitle pt-5"><h3>ENJOY THE SHOW</h3></div>
        <div class="confirmationbody text-center pt-5"><h6>Thank you for booking with us. Make sure to screenshot the QR code above to collect your ticket at the cinema. We look forward to seeing you there.</h6></div>
    </div>

    <div class="homebtn pt-5 text-center"><a href="<?php echo site_url('reel/booking')?>"><button>RETURN TO BOOKINGS</button></a></div>
    
</body>
</html>