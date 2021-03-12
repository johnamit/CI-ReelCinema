<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Seats Page</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        $(document).ready(function(){
            $("input:checkbox").change(function(){
                var selectedSeats = $("input:checkbox:checked").map(function(){
                    return this.value;
                }).toArray();
                var seatsString = selectedSeats.toString();
                console.log(seatsString);

                $('#proceedbtn').click(function(){
                    $.ajax({
                        type: "POST",
                        url: <?php echo site_url('seat/storeseats'); ?>
                        data: {"seatString": seatString},  // fix: need to append your data to the call
                        success: function (data) {}
                    });
                });
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

    #seats-title{
        font-weight: 600;
        color: #EEF0FE;
    }

    .coloredSeat{
        width: 20px;
        height: 20px;
        background-color: #EEF0FE;
    }

    .coloredSeat.checked{
        background-color: #FFCC00;
    }

    .proceedbutton button{
        margin-left: 94vw;
        margin-top: 8rem;
        margin-bottom: 2rem;
        background: #0000;
        color: #ffffff;
        border: solid 2px #f5f5f5;
        border-radius: 25px;
        width: 90px;
        height: 40px;
        font-size: 16px;
    }

    .proceedbutton button:hover{
        background: #ffffff;
        color: #101113;
    }

    #roomscreen{
        background: #EEF0FE;
        color:#121212;
    }
</style>

<body>
    
    <div class="container">
        <div class="py-5 text-center">
            <h2 id="seats-title">SEATS PAGE</h2>
        </div>
    </div>

    <div class="container">
        <div class="row g-3 mb-5">
            <div class="col-12" id="roomscreen">
                <p>Screen</p>
            </div>
        </div>

        <div class="row g-3 mt-0">
            <div class="col-2">
                <input type="checkbox" class="seat" value="1A">
            </div>
            <div class="col-2">
                <input type="checkbox" class="seat" value="1B">
            </div>
            <div class="col-2" id="hidden">
                <input type="checkbox" class="seat" value="1C">
            </div>
            <div class="col-2" id="hidden">
                <input type="checkbox" class="seat" value="1D">
            </div>
            <div class="col-2">
                <input type="checkbox" class="seat" value="1E">
            </div>
            <div class="col-2">
                <input type="checkbox" class="seat" value="1F">
            </div>   
        </div>
        <div class="row g-3 mt-0">
            <div class="col-2">
                <input type="checkbox" class="seat" value="2A">
            </div>
            <div class="col-2">
                <input type="checkbox" class="seat" value="2B">
            </div>
            <div class="col-2">
                <input type="checkbox" class="seat" value="2C">
            </div>
            <div class="col-2">
                <input type="checkbox" class="seat" value="2D">
            </div>
            <div class="col-2">
                <input type="checkbox" class="seat" value="2E">
            </div>
            <div class="col-2">
                <input type="checkbox" class="seat" value="2F">
            </div>
        </div>
        <div class="row g-3 mt-0">
            <div class="col-2">
                <input type="checkbox" class="seat" value="3A">
            </div>
            <div class="col-2">
                <input type="checkbox" class="seat" value="3B">
            </div>
            <div class="col-2">
                <input type="checkbox" class="seat" value="3C">
            </div>
            <div class="col-2">
                <input type="checkbox" class="seat" value="3D">
            </div>
            <div class="col-2">
                <input type="checkbox" class="seat" value="3E">
            </div>
            <div class="col-2">
                <input type="checkbox" class="seat" value="3F">
            </div>
        </div>
        <div class="row g-3 mt-0">
            <div class="col-2">
                <input type="checkbox" class="seat" value="4A">
            </div>
            <div class="col-2">
                <input type="checkbox" class="seat" value="4B">
            </div>
            <div class="col-2">
                <input type="checkbox" class="seat" value="4C">
            </div>
            <div class="col-2">
                <input type="checkbox" class="seat" value="4D">
            </div>
            <div class="col-2">
                <input type="checkbox" class="seat" value="4E">
            </div>
            <div class="col-2">
                <input type="checkbox" class="seat" value="4F">
            </div>
        </div>
        <div class="row g-3 mt-0">
            <div class="col-2">
                <input type="checkbox" class="seat" value="5A">
            </div>
            <div class="col-2">
                <input type="checkbox" class="seat" value="5B">
            </div>
            <div class="col-2">
                <input type="checkbox" class="seat" value="5C">
            </div>
            <div class="col-2">
                <input type="checkbox" class="seat" value="5D">
            </div>
            <div class="col-2">
                <input type="checkbox" class="seat" value="5E">
            </div>
            <div class="col-2">
                <input type="checkbox" class="seat" value="5F">
            </div>
        </div>
        <div class="row g-3 mt-0">
            <div class="col-2">
                <input type="checkbox" class="seat" value="6A">
            </div>
            <div class="col-2">
                <input type="checkbox" class="seat" value="6B">
            </div>
            <div class="col-2">
                <input type="checkbox" class="seat" value="6C">
            </div>
            <div class="col-2">
                <input type="checkbox" class="seat" value="6D">
            </div>
            <div class="col-2">
                <input type="checkbox" class="seat" value="6E">
            </div>
            <div class="col-2">
                <input type="checkbox" class="seat" value="6F">
            </div>
        </div>
        <div class="row g-3 mt-0">
            <div class="col-2">
                <input type="checkbox" class="seat" value="7A">
            </div>
            <div class="col-2">
                <input type="checkbox" class="seat" value="7B">
            </div>
            <div class="col-2">
                <input type="checkbox" class="seat" value="7C">
            </div>
            <div class="col-2">
                <input type="checkbox" class="seat" value="7D">
            </div>
            <div class="col-2">
                <input type="checkbox" class="seat" value="7E">
            </div>
            <div class="col-2">
                <input type="checkbox" class="seat" value="7F">
            </div>
        </div>
    </div>

    <div class="proceedbutton">
        <a href="<?php echo site_url('basket/checkoutfunction')?>"><button>Proceed</button></a>
    </div> 

</body>
</html>