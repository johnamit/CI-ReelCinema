<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/fontstyle.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <title>Reel | BillingTest</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
            <?php if($this->session->has_userdata('name')){ ?>
                document.getElementById("forename").value = "<?php echo $this->session->userdata('name');?>";
                document.getElementById("surname").value = "<?php echo $this->session->userdata('lastname');?>";
                document.getElementById("email").value = "<?php echo $this->session->userdata('sessionEmail');?>";
            <?php } ?>
            

        });
    </script>
</head>

<style>
    body{
        font-family: "Helvetica Neue",sans-serif;
        background-color: #121212;
        color: #EEF0FE;
    }

    #checkout-title{
        font-weight: 700;
        color: #FFCC00;
    }
    

    #paybtn{
        font-weight: 700;
        background: #FFCC00;
        color: #121212;
        border: solid 2px #121212;
        border-radius: 25px;
    }

    #paybtn:hover{
        border: none;
    }

    #hiddenradio{
        display: none;
    }

    .errorreport{
        padding-top: 10px;
        color: red;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 12px;
    }

    .form-control{
        background-color: #121212;
        color: #EEF0FE;
        border: none;
        border-radius: 0px;
        border-bottom: solid 2px #adadad;
    }

    .form-control:focus,
    .form-control:valid{
        background-color: #121212;
        color: #EEF0FE;
        border: none;
        box-shadow: none;
        border-bottom: solid 2px #FFCC00;
    }
    
    input:required:invalid {
        box-shadow: none;
    }

    .topcontainer{
        margin-top: 200px;
        margin-bottom: 100px;
    }

    .movieinfo{
        text-transform: uppercase;
        font-weight: 600;
    }

    .movieImage img{
        height: 450px;
        width: 300px;
    }

    .subtotal{
        color: #FFCC00;
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

    <div class="container topcontainer">
        <h4 class="pb-4">Order Information</h4>
        <div class="row">
            <?php foreach($movieinfo as $checkoutinfo){ ?>
                <div class="col movieImage"><img src="<?php echo base_url();?>images/<?php echo $checkoutinfo['Name']?>.jpg" alt="Placeholder"></div>
                <div class="col my-auto">
                    <h2 class="movieinfo"><?php echo $checkoutinfo['Name']?></h2>
                    <h4><?php echo $checkoutinfo['Duration']?>&nbsp;&nbsp;|&nbsp;&nbsp;<?php echo $checkoutinfo['Genre']?></h4>
                    <div class="row g-2 pt-5">
                        <div class="col-12"><h5>Date: &nbsp;&nbsp;&nbsp; <?php echo $this->session->userdata('parseDay');?></h5></div>
                        <div class="col-12"><h5>Time: &nbsp;&nbsp;&nbsp; <?php echo $this->session->userdata('parseTime');?></h5></div>
                        <div class="col-12"><h5>Seats: &nbsp; <?php echo $this->session->userdata('parseSeats');?></h5></div>
                        <div class="col-12"><h5>Screen: &nbsp; <?php echo $this->session->userdata('parseScreen');?></h5></div>
                        <div class="col-12"><h5 class="subtotal">Total: &nbsp;&nbsp;&nbsp; <?php foreach($subtotal as $subval){echo $subval['Subtotal'];}?></h5></div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

    <div class="container">
        <h4 class="mb-3">Personal Information</h4>
        <?php echo form_open('reel/checkout');?>
            <div class="row g-3">
                <div class="col-sm-6">
                    <label for="forename" class="form-label"></label>
                    <input type="text" id="forename" name="forename" value="<?php echo set_value('forename') ?>" class="form-control" placeholder="Forename" required>
                    <?php echo form_error('forename','<div class="errorreport">','</div>') ?>
                </div>  

                <div class="col-sm-6">
                    <label for="surname" class="form-label"></label>
                    <input type="text" id="surname" name="surname" value="<?php echo set_value('surname') ?>" class="form-control" placeholder="Surname" required>
                    <?php echo form_error('surname','<div class="errorreport">','</div>') ?>
                </div>

                <div class="col-12">
                    <label for="email" class="form-label"></label>
                    <input type="text" id="email" name="email" value="<?php echo set_value('email') ?>" class="form-control" placeholder="Email" required>
                    <?php echo form_error('email','<div class="errorreport">','</div>') ?>
                </div>

            </div>

            <h4 class="mb-3 mt-5 pt-5">Payment Information</h4>
            <div class="row g-3">
                <div class="col-12">
                    <label for="cardname" class="form-label"></label>
                    <input type="text" id="cardname" name="cardname" value="<?php echo set_value('cardname') ?>" class="form-control" placeholder="Cardholder name" required>
                    <?php echo form_error('cardname','<div class="errorreport">','</div>') ?>
                </div>  

                <div class="col-12">
                    <label for="cardnumber" class="form-label"></label>
                    <input type="text" id="cardnumber" name="cardnumber" value="<?php echo set_value('cardnumber') ?>" class="form-control" placeholder="Card number" maxlength="16" required>
                    <?php echo form_error('cardnumber','<div class="errorreport">','</div>') ?>
                </div>

                <div class="col-sm-2">
                    <label for="expiry" class="form-label"></label>
                    <input type="text" id="expiry" name="expiry" value="<?php echo set_value('expiry') ?>" class="form-control" placeholder="Exp (MM/YY)" minlength="4" maxlength="4" required>
                    <?php echo form_error('expiry','<div class="errorreport">','</div>') ?>
                </div>

                <div class="col-sm-1"></div>

                <div class="col-sm-1">
                    <label for="cvc" class="form-label"></label>
                    <input type="password" id="cvc" name="cvc" value="<?php echo set_value('cvc') ?>" class="form-control" placeholder="CVC" minlength="3" maxlength="4" required>
                    <?php echo form_error('cvc','<div class="errorreport">','</div>') ?>
                </div>

            </div>

            <div class="row py-5">
                <button id="paybtn" type="submit" class="btn btn-lg btn-block">PAY WITH CARD</button>
            </div>
        </form>
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
</body>
</html>