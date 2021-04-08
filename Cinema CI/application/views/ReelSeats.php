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
    <title>Reel | Seats</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function(){
            var bookedList = [];
            <?php foreach($bookedseats as $booked){?>
                var bookedSet = "<?php echo $booked['Seat'];?>"
                var splitSeats = bookedSet.split(", ");
                var bookedList = bookedList.concat(splitSeats);
            <?php } ?>
            $.each(bookedList, function(index, value){
                $('input[class="seat"][value="'+value.toString()+'"]').attr("disabled", true);
                $('input[class="seat"][value="'+value.toString()+'"]').parent("label.circle").find("span").removeClass('available').addClass('booked');
            });

            $(".proceedbtn").hide();

            $("input:checkbox").change(function(){
                var selectedSeats = $("input:checkbox:checked").map(function(){
                    return this.value;
                }).toArray();
                var seatsString = selectedSeats.toString();
                document.getElementById("seatsString").value = seatsString;
                console.log(seatsString);

                var maxlimit = <?php foreach($maxseats as $limit){ echo $limit["SeatSum"];}?>;
                if($(".seat:input:checkbox:checked").length > maxlimit){
                    this.checked = false;              
                }

                if($(".seat:input:checkbox:checked").length == maxlimit){
                    $(".proceedbtn").show();
                    $(".seat:input:checkbox:not(:checked)").attr("disabled", true);
                    $(".seat:input:checkbox:not(:checked)").parent("label.circle").find("span").removeClass('available').addClass('booked');
                }
                else{
                    $(".proceedbtn").hide();
                    $(".seat:input:checkbox:not(:checked)").attr("disabled", false);
                    $(".seat:input:checkbox:not(:checked)").parent("label.circle").find("span").removeClass('booked').addClass('available');
                    $.each(bookedList, function(index, value){
                        $('input[class="seat"][value="'+value.toString()+'"]').attr("disabled", true);
                        $('input[class="seat"][value="'+value.toString()+'"]').parent("label.circle").find("span").removeClass('available').addClass('booked');
                    });
                }

                if ($(this).is(':checked')) {
                    $(this).parent("label.circle").find("span").removeClass('available').addClass('selected');
                }
                else{
                    $(this).parent("label.circle").find("span").removeClass('selected').addClass('available');
                }

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
    }

    .navigation{
        position: relative;
        z-index: 9999;
    }

    span img{
        height: 60px;
        width: 60px;
    }

    .selected{
        filter: invert(87%) sepia(22%) saturate(7235%) hue-rotate(1deg) brightness(105%) contrast(105%);
    }

    .available{
        filter: invert(88%) sepia(4%) saturate(775%) hue-rotate(197deg) brightness(106%) contrast(99%);
    }

    .booked{
        filter: invert(29%) sepia(4%) saturate(681%) hue-rotate(175deg) brightness(94%) contrast(93%);
    }

    .roomscreen{
        background: #fff;
        height: 50px;
        border-top-left-radius:50%;
        border-top-right-radius:50%;
    }

    #filler{
        background: #121212;
        transform: translateY(-60%);
    }

    .circle{
        cursor: pointer;
    }

    .circle .seat{
        opacity: 0;
    }

    .proceedbtn{
        transform: translateY(70px);
    }

    .proceedbtn button{
        border-radius: 25px;
        height: 40px;
        font-size: 16px;
        width: 60%;
        background: #ffcc00;
        color: #121212;
        border: 2px solid #121212;
    }

    .proceedbtn button:hover{
        border: none;
    }

    #seatsString{
        display: none;
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

        

        <div class="container d-flex flex-column min-vh-100 justify-content-center " id="seatContainer">
            <div class="row mb-5" id="screen">
                <div class="col-12 roomscreen"></div>
                <div class="col-12 text-center roomscreen" id="filler"><br>Screen <?php foreach($screenno as $screen){echo $screen['Screen']; $this->session->set_userdata('parseScreen', $screen['Screen']);}?></div>
            </div>

            <div class="row g-3 mt-0" id="seats">
                <div class="col-2 text-center">
                    <label class="circle">
                        <span class="available"><img src="<?php echo base_url();?>images/movieseat.png" alt="movieseat"></span>
                        <input type="checkbox" class="seat" value="1A">
                    </label>
                </div>
                <div class="col-2 text-center">
                    <label class="circle">
                        <span class="available"><img src="<?php echo base_url();?>images/movieseat.png" alt="movieseat"></span>
                        <input type="checkbox" class="seat" value="1B">
                    </label>
                </div>
                <div class="col-2 text-center">
                    <label class="circle">
                        <span class="available"><img src="<?php echo base_url();?>images/movieseat.png" alt="movieseat"></span>
                        <input type="checkbox" class="seat" value="1C">
                    </label>
                </div>
                <div class="col-2 text-center">
                    <label class="circle">
                        <span class="available"><img src="<?php echo base_url();?>images/movieseat.png" alt="movieseat"></span>
                        <input type="checkbox" class="seat" value="1D">
                    </label>
                </div>
                <div class="col-2 text-center">
                    <label class="circle">
                        <span class="available"><img src="<?php echo base_url();?>images/movieseat.png" alt="movieseat"></span>
                        <input type="checkbox" class="seat" value="1E">
                    </label>
                </div>
                <div class="col-2 text-center">
                    <label class="circle">
                        <span class="available"><img src="<?php echo base_url();?>images/movieseat.png" alt="movieseat"></span>
                        <input type="checkbox" class="seat" value="1F">
                    </label>
                </div>   
            </div>
            <div class="row g-3 mt-0">
                <div class="col-2 text-center">
                    <label class="circle">
                        <span class="available"><img src="<?php echo base_url();?>images/movieseat.png" alt="movieseat"></span>
                        <input type="checkbox" class="seat" value="2A">
                    </label>
                </div>
                <div class="col-2 text-center">
                    <label class="circle">
                        <span class="available"><img src="<?php echo base_url();?>images/movieseat.png" alt="movieseat"></span>
                        <input type="checkbox" class="seat" value="2B">
                    </label>
                </div>
                <div class="col-2 text-center">
                    <label class="circle">
                        <span class="available"><img src="<?php echo base_url();?>images/movieseat.png" alt="movieseat"></span>
                        <input type="checkbox" class="seat" value="2C">
                    </label>
                </div>
                <div class="col-2 text-center">
                    <label class="circle">
                        <span class="available"><img src="<?php echo base_url();?>images/movieseat.png" alt="movieseat"></span>
                        <input type="checkbox" class="seat" value="2D">
                    </label>
                </div>
                <div class="col-2 text-center">
                    <label class="circle">
                        <span class="available"><img src="<?php echo base_url();?>images/movieseat.png" alt="movieseat"></span>
                        <input type="checkbox" class="seat" value="2E">
                    </label>
                </div>
                <div class="col-2 text-center">
                    <label class="circle">
                        <span class="available"><img src="<?php echo base_url();?>images/movieseat.png" alt="movieseat"></span>
                        <input type="checkbox" class="seat" value="2F">
                    </label>
                </div>
            </div>
            <div class="row g-3 mt-0">
                <div class="col-2 text-center">
                    <label class="circle">
                        <span class="available"><img src="<?php echo base_url();?>images/movieseat.png" alt="movieseat"></span>
                        <input type="checkbox" class="seat" value="3A">
                    </label>
                </div>
                <div class="col-2 text-center">
                    <label class="circle">
                        <span class="available"><img src="<?php echo base_url();?>images/movieseat.png" alt="movieseat"></span>
                        <input type="checkbox" class="seat" value="3B">
                    </label>
                </div>
                <div class="col-2 text-center">
                    <label class="circle">
                        <span class="available"><img src="<?php echo base_url();?>images/movieseat.png" alt="movieseat"></span>
                        <input type="checkbox" class="seat" value="3C">
                    </label>
                </div>
                <div class="col-2 text-center">
                    <label class="circle">
                        <span class="available"><img src="<?php echo base_url();?>images/movieseat.png" alt="movieseat"></span>
                        <input type="checkbox" class="seat" value="3D">
                    </label>
                </div>
                <div class="col-2 text-center">
                    <label class="circle">
                        <span class="available"><img src="<?php echo base_url();?>images/movieseat.png" alt="movieseat"></span>
                        <input type="checkbox" class="seat" value="3E">
                    </label>
                </div>
                <div class="col-2 text-center">
                    <label class="circle">
                        <span class="available"><img src="<?php echo base_url();?>images/movieseat.png" alt="movieseat"></span>
                        <input type="checkbox" class="seat" value="3F">
                    </label>
                </div>
            </div>
            <div class="row g-3 mt-0">
                <div class="col-2 text-center">
                    <label class="circle">
                        <span class="available"><img src="<?php echo base_url();?>images/movieseat.png" alt="movieseat"></span>
                        <input type="checkbox" class="seat" value="4A">
                    </label>
                </div>
                <div class="col-2 text-center">
                    <label class="circle">
                        <span class="available"><img src="<?php echo base_url();?>images/movieseat.png" alt="movieseat"></span>
                        <input type="checkbox" class="seat" value="4B">
                    </label>
                </div>
                <div class="col-2 text-center">
                    <label class="circle">
                        <span class="available"><img src="<?php echo base_url();?>images/movieseat.png" alt="movieseat"></span>
                        <input type="checkbox" class="seat" value="4C">
                    </label>
                </div>
                <div class="col-2 text-center">
                    <label class="circle">
                        <span class="available"><img src="<?php echo base_url();?>images/movieseat.png" alt="movieseat"></span>
                        <input type="checkbox" class="seat" value="4D">
                    </label>
                </div>
                <div class="col-2 text-center">
                    <label class="circle">
                        <span class="available"><img src="<?php echo base_url();?>images/movieseat.png" alt="movieseat"></span>
                        <input type="checkbox" class="seat" value="4E">
                    </label>
                </div>
                <div class="col-2 text-center">
                    <label class="circle">
                        <span class="available"><img src="<?php echo base_url();?>images/movieseat.png" alt="movieseat"></span>
                        <input type="checkbox" class="seat" value="4F">
                    </label>
                </div>
            </div>
            <div class="row g-3 mt-0">
                <div class="col-2 text-center">
                    <label class="circle">
                        <span class="available"><img src="<?php echo base_url();?>images/movieseat.png" alt="movieseat"></span>
                        <input type="checkbox" class="seat" value="5A">
                    </label>
                </div>
                <div class="col-2 text-center">
                    <label class="circle">
                        <span class="available"><img src="<?php echo base_url();?>images/movieseat.png" alt="movieseat"></span>
                        <input type="checkbox" class="seat" value="5B">
                    </label>
                </div>
                <div class="col-2 text-center">
                    <label class="circle">
                        <span class="available"><img src="<?php echo base_url();?>images/movieseat.png" alt="movieseat"></span>
                        <input type="checkbox" class="seat" value="5C">
                    </label>
                </div>
                <div class="col-2 text-center">
                    <label class="circle">
                        <span class="available"><img src="<?php echo base_url();?>images/movieseat.png" alt="movieseat"></span>
                        <input type="checkbox" class="seat" value="5D">
                    </label>
                </div>
                <div class="col-2 text-center">
                    <label class="circle">
                        <span class="available"><img src="<?php echo base_url();?>images/movieseat.png" alt="movieseat"></span>
                        <input type="checkbox" class="seat" value="5E">
                    </label>
                </div>
                <div class="col-2 text-center">
                    <label class="circle">
                        <span class="available"><img src="<?php echo base_url();?>images/movieseat.png" alt="movieseat"></span>
                        <input type="checkbox" class="seat" value="5F">
                    </label>
                </div>
            </div>
            <div class="row g-3 mt-0">
                <div class="col-2 text-center">
                    <label class="circle">
                        <span class="available"><img src="<?php echo base_url();?>images/movieseat.png" alt="movieseat"></span>
                        <input type="checkbox" class="seat" value="6A">
                    </label>
                </div>
                <div class="col-2 text-center">
                    <label class="circle">
                        <span class="available"><img src="<?php echo base_url();?>images/movieseat.png" alt="movieseat"></span>
                        <input type="checkbox" class="seat" value="6B">
                    </label>
                </div>
                <div class="col-2 text-center">
                    <label class="circle">
                        <span class="available"><img src="<?php echo base_url();?>images/movieseat.png" alt="movieseat"></span>
                        <input type="checkbox" class="seat" value="6C">
                    </label>
                </div>
                <div class="col-2 text-center">
                    <label class="circle">
                        <span class="available"><img src="<?php echo base_url();?>images/movieseat.png" alt="movieseat"></span>
                        <input type="checkbox" class="seat" value="6D">
                    </label>
                </div>
                <div class="col-2 text-center">
                    <label class="circle">
                        <span class="available"><img src="<?php echo base_url();?>images/movieseat.png" alt="movieseat"></span>
                        <input type="checkbox" class="seat" value="6E">
                    </label>
                </div>
                <div class="col-2 text-center">
                    <label class="circle">
                        <span class="available"><img src="<?php echo base_url();?>images/movieseat.png" alt="movieseat"></span>
                        <input type="checkbox" class="seat" value="6F">
                    </label>
                </div>
            </div>  
            <div class="row g-3 mt-0">
                <div class="col-2 text-center">
                    <label class="circle">
                        <span class="available"><img src="<?php echo base_url();?>images/movieseat.png" alt="movieseat"></span>
                        <input type="checkbox" class="seat" value="7A">
                    </label>
                </div>
                <div class="col-2 text-center">
                    <label class="circle">
                        <span class="available"><img src="<?php echo base_url();?>images/movieseat.png" alt="movieseat"></span>
                        <input type="checkbox" class="seat" value="7B">
                    </label>
                </div>
                <div class="col-2 text-center">
                    <label class="circle">
                        <span class="available"><img src="<?php echo base_url();?>images/movieseat.png" alt="movieseat"></span>
                        <input type="checkbox" class="seat" value="7C">
                    </label>
                </div>
                <div class="col-2 text-center">
                    <label class="circle">
                        <span class="available"><img src="<?php echo base_url();?>images/movieseat.png" alt="movieseat"></span>
                        <input type="checkbox" class="seat" value="7D">
                    </label>
                </div>
                <div class="col-2 text-center">
                    <label class="circle">
                        <span class="available"><img src="<?php echo base_url();?>images/movieseat.png" alt="movieseat"></span>
                        <input type="checkbox" class="seat" value="7E">
                    </label>
                </div>
                <div class="col-2 text-center">
                    <label class="circle">
                        <span class="available"><img src="<?php echo base_url();?>images/movieseat.png" alt="movieseat"></span>
                        <input type="checkbox" class="seat" value="7F">
                    </label>
                </div>
            </div>
            <?php echo form_open('reel/checkout');?>
                <input id="seatsString" name="seatselection" type="text"/>
                <div class="proceedbtn text-center"><button type="submit">Proceed to Checkout</button></div>
            </form>
        </div> 
    </div>

</body>
</html>