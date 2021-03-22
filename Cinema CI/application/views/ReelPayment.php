<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/fontstyle.css">
    <title>Reel | Billing</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function(){
            $(".paymentforcard").hide();
            $(".paymentforpaypal").hide();
            $("#payment-card").click(function(){
                $(".paymentforcard").show();
                $(".paymentforpaypal").hide();
            });
            $("#payment-paypal").click(function(){
                $(".paymentforpaypal").show();
                $(".paymentforcard").hide();
            });
        });
    </script>

</head>

<style>
    body{
        font-family: "Monument Extended";
        background-color: #121212;
        color: #fff;
    }

    .inputField{
        position: relative;
        border-bottom: 2px solid #adadad;
        margin: 25px 0px;
    }

    .selectField{
        position: relative;
        border-bottom: 2px solid #ffcc00;
        margin: 25px 0px;
    }

    .inputField input{
        width: 100%;
        padding: 0 5px;
        height: 40px;
        font-size: 16px;
        font-weight: 400;
        border: none;
        background: none;
        outline: none;
        color: #ffffff;
    }

    .inputField label{
        position: absolute;
        top: 50%;
        left: 5px;
        color: #adadad;
        transform: translateY(-50%);
        font-size: 16px;
        pointer-events: none;
    }

    .inputField span::before{
        content: '';
        position: absolute;
        top: 40px;
        left: 0;
        width: 0%;
        height: 2px;
        background: #ffcc00;
    }

    .inputField input:focus ~ label,
    .inputField input:valid ~ label{
        top: -5px;
        color: #ffcc00;
    }

    .inputField input:focus ~ span::before,
    .inputField input:valid ~ span::before{
        width: 100%;
    }

    .form-control{
        background: none;
        border: none;
        color: #fff;
    }

    #hiddenradio{
        display: none;
    }

    #paybtn{
        font-weight: 700;
        color: #121212;
        background: #FFCC00;
        border: solid 2px #121212;
        border-radius: 25px;
    }

    #paybtn:hover{
        border: none;
    }

    .checkout-title{
        padding-bottom: 5rem;
    }

    .checkout-title h1{
        color: #FFCC00;
        font-weight: 600;
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

    
    <div class="container-fluid mainContainer">
        <div class="container d-flex flex-column min-vh-100 justify-content-center">

            <div class="checkout-title text-center">
                <h1>CHECKOUT</h1>
            </div>

            <div class="paymentform">
                <h2 class="pb-4">PAYMENT INFORMATION</h2>

                <div class="row">
                    <div class="col-6">
                        <div class="form-check">
                            <input type="radio" id="payment-card" class="form-check-input" name="paymentMethod" required>
                            <label for="payment-card">Credit/Debit Card</label>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-check">
                            <input type="radio" id="payment-paypal" class="form-check-input" name="paymentMethod" required>
                            <label for="payment-paypal">Paypal</label>
                            <input type="radio" id="hiddenradio" checked>
                        </div>
                    </div>
                </div>

                <div class="paymentforpaypal">
                    <div class="row g-3">
                        <br><br>
                        <hr>
                        <button id="paybtn" type="submit" class="btn btn-lg btn-block">PAY WITH PAYPAL</button>
                        <br><br>
                    </div>
                </div>


                <div class="paymentforcard pt-5">
                    <div class="row g-3">
                        <div class="col-sm-5 inputField">
                            <input type="text" id="cardetail" name="cardname" required>
                            <span></span>
                            <label>Cardholder's Name</label>
                        </div>
                        <div class="col-sm-1"></div>
                        <div class="col-sm-5 inputField">
                            <input type="text" id="carddetail" name="cardnumber" maxlength="16" required>
                            <span></span>
                            <label>Card Number</label>
                        </div>

                        <div class="col-sm-12"></div>

                        <div class="col-sm-2 inputField">
                            <input type="text" id="expdate" name="expiration" maxlength="7" required>
                            <span></span>
                            <label>Expiration Date</label>
                        </div>
                        <div class="col-sm-1"></div>
                        <div class="col-sm-1 inputField">
                            <input type="text" id="expdate" name="cvc" maxlength="3" required>
                            <span></span>
                            <label>CVV</label>
                        </div>
                    </div>

                    <div class="row g-3">
                        <br><br>
                        <hr>
                        <button id="paybtn" type="submit" class="btn btn-lg btn-block">PAY WITH CARD</button>
                        <br><br><br>
                    </div>
                </div>


            </div>

        </div>        
    </div>
</body>
</html>