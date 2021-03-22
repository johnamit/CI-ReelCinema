<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Checkout</title>
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
        color: #FFCC00;
        border: solid 2px #FFCC00;
        border-radius: 25px;
    }

    #paybtn:hover{
        color: #121212;
        border: solid 2px #FFCC00;
        background-color: #FFCC00;
    }

    #hiddenradio{
        display: none;
    }
    
</style>

<body>

    <div class="container">
        <div class="py-5 text-center">
            <h2 id="checkout-title">CHECKOUT PAGE</h2>
        </div>
    </div>

    <div class="container">
        <h4 class="mb-3">Billing Address</h4>
        <?php echo form_open('home/proceedtoconfirmation');?>
            <div class="row g-3">
                <div class="col-sm-6">
                    <label for="firstname" class="form-label">Forename</label>
                    <input type="text" id="firstname" name="forename" class="form-control" required>
                    <div class="invalid-feedback">Enter a valid forename</div>
                </div>

                <div class="col-sm-6">
                    <label for="lastname" class="form-label">Surname</label>
                    <input type="text" id="lastname" name="surname" class="form-control" required>
                    <div class="invalid-feedback">Enter a valid surname</div>
                </div>

                <div class="col-12">
                    <label for="lastname" class="form-label">Email</label>
                    <input type="text" id="email" name="email" class="form-control" required>
                    <div class="invalid-feedback">Enter a valid email</div>
                </div>

                <div class="col-12">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" id="address" class="form-control" placeholder="Street Address" required>
                    <br>
                    <div class="row">
                        <div class="col-sm-6">
                            <input type="text" id="address-city" class="form-control" placeholder="City" required>
                            <br>
                        </div>
                        <div class="col-sm-6">
                            <input type="text" id="address-county" class="form-control" placeholder="State/Province" required>
                            <br>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" id="address-postcode" class="form-control" placeholder="Post/Zip code"  required>
                            <br>
                        </div>
                        <div class="col-sm-8">
                            <select id="address-country" class="form-control">
                                <option value="Default" selected disabled>Country</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="United States">United States</option>
                                <option value="Canada">Canada</option>
                            </select>
                        </div>
                    </div>                    
                </div>
                <hr>

                <h4 class="mb-3">Payment Information</h4>
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
                <div class="paymentforcard">
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <label for="cardname" class="form-label">Cardholder's Name</label>
                            <input type="text" id="cardname" class="form-control" required>
                        </div>
                        <div class="col-sm-6">
                            <label for="cardname" class="form-label">Card Number</label>
                            <input type="text" id="cardname" name="cardnumber" class="form-control" maxlength="16" required>
                        </div>
                        <div class="col-sm-2">
                            <label for="expdate" class="form-label">Expiration Date</label>
                            <input type="text" id="expdate" class="form-control" placeholder="MM/YYYY" maxlength="7" required>
                        </div>
                        <div class="col-sm-1">
                            <label for="cvv" class="form-label">CVV</label>
                            <input type="text" id="expdate" name="cvc" class="form-control" maxlength="3" required>
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
        </form>
    </div>

    

</body>
</html>
