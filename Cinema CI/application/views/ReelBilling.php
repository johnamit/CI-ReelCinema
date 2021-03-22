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

            <div class="billingform">
                <h2 class="pb-4">BILLING INFORMATION</h2>
                <div class="spacer wide"></div>
                <form>
                    <div class="row g-3">
                        <div class="col-sm-5 inputField">
                            <input type="text" id="firstname" name="forename" required>
                            <span></span>
                            <label>Forename</label>
                        </div>
                        <div class="col-sm-1"></div>
                        <div class="col-sm-5 inputField">
                            <input type="text" id="lastname" name="surname" required>
                            <span></span>
                            <label>Surname</label>
                        </div>

                        <div class="col-11 inputField">
                            <input type="text" id="email" name="email" required>
                            <span></span>
                            <label>Email</label>
                        </div>

                        <div class="col-11 inputField">
                            <input type="text" id="streetaddress" name="streetaddress" required>
                            <span></span>
                            <label>Street Address</label>   
                        </div>

                        <div class="col-sm-5 inputField">
                            <input type="text" id="city" name="city" required>
                            <span></span>
                            <label>City</label>   
                        </div>
                        <div class="col-sm-1"></div>
                        <div class="col-sm-5 inputField">
                            <input type="text" id="state/province" name="state/province" required>
                            <span></span>
                            <label>State/Province</label>   
                        </div>

                        <div class="col-sm-4 inputField">
                            <input type="text" id="post/zip" name="post/zip" required>
                            <span></span>
                            <label>Post/Zip Code</label>   
                        </div>
                        <div class="col-sm-1"></div>
                        <div class="col-sm-6 selectField">
                                <select id="address-country" class="form-control">
                                    <option id="countryDefault" value="Default" selected disabled>Country</option>
                                    <option value="United Kingdom">United Kingdom</option>
                                    <option value="United States">United States</option>
                                    <option value="Canada">Canada</option>
                                </select>  

                        </div>

                    </div>

                </form>
            </div>
        </div>        
    </div>
</body>
</html>