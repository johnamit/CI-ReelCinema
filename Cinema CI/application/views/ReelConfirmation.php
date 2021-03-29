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
            var customer = "<?php echo $this->session->userdata('parseForename')." ".$this->session->userdata('parseSurname');?>"
            var moviename = "<?php echo str_replace("%20"," ",$this->session->userdata('parseMoviename'));?>";
            var date = "<?php echo $this->session->userdata('parseDay');?>";
            var time = "<?php echo $this->session->userdata('parseTime');?>";
            var screen = "Screen B";
            var seat = "<?php echo $this->session->userdata('parseSeats');?>"; 

            $('#qrcode').qrcode({
                width: 200,
                height: 200,
                background: "#FFCC00",
                text: "Reserved for "+customer+"\nMoviename: "+moviename+"\nTime: "+time+"\nDate: "+date+"\nSeats: "+seat
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
        width: 200px;
        height: 50px;
        color: #FFCC00;
        font-weight: 600;
    }

    .homebtn button:hover{
        border: none;
    }

</style>

<body>

    <div class="container maincontainer text-center">
        <div id="qrcode"></div>
        <div class="confirmationtitle pt-5"><h3>ENJOY THE SHOW</h3></div>
        <div class="confirmationbody text-center pt-5"><h6>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni nesciunt voluptas repudiandae earum. Reprehenderit optio perferendis atque aperiam soluta, accusamus recusandae maiores, fuga dignissimos odio, libero nihil ea eius minima!</h6></div>
        <div class="homebtn pt-5"><a href="<?php echo site_url('reel/home')?>"><button>BACK TO HOME</button></a></div>
    </div>
    
</body>
</html>