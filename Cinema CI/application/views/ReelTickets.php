<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/fontstyle.css">
    <title>Reel | Tickets</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function(){
            $(".proceedbtn").hide();

            var currBasket = <?php foreach($basketcount as $bcount){echo $bcount['rowCount'];}?>;
            if (currBasket >= 1){
                $(".proceedbtn").show();
            }
            else{
                $(".proceedbtn").hide();
            }
        });
        
    </script>

</head>

<style>

    .row{
        height: 100vh;
        background-color: #121212;
    }

    .b{
        background: #121212;
    }

    .y{
        background: #ffcc00;
    }

    .ticketsection table{
        margin-left: auto; 
        margin-right: auto;
        border-collapse: collapse;
        color: #ffffff;
    }

    .ticketsection table th, td{
        padding: 20px;
        text-align: left;
        border-bottom: solid 1px #ffffff;
    }

    .widerow, .widerow-data{
        padding-right: 250px;
    }

    .ticketsection p{
        margin-left: 10rem;
        padding-top: 15px;
        color: #ffcc00;
    }

    .ticketsection p, .widerow-data, .addticket button, .removeticket button{
        font-family: Arial, Helvetica, sans-serif;
    }

    .addticket button, .removeticket button, .proceedbtn button{
        border-radius: 25px;
        width: 140px;
        height: 40px;
        font-size: 16px;
    }

    .addticket button{
        background: #ffcc00;
        color: #121212;
        border: 2px solid #121212;
    }

    .removeticket button{
        background: #121212;
        color: #ffcc00;
        border: 2px solid #ffcc00;
    }

    .addticket button:hover, .removeticket button:hover{
        border: none;
    }

    .basketsection{
        margin-top: 10rem;
    }

    .basketsection-title{
        font-weight: 600;
    }
    
    .basketsection-title span{
        font-weight: 400;
    }

    .basketTD{
        border-bottom: solid 1px #121212;
    }

    .subtotal{
        border-bottom: none;
    }

    .proceedbtn button{
        width: 100%;
        background: #ffcc00;
        color: #121212;
        border: 2px solid #121212;
    }

    .proceedbtn button:hover{
        background: #121212;
        color: #ffcc00;
        border: none;
    }  
    
    .basketTD{
        font-weight: 400;
    }

    a{
        text-decoration: none;
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
        <div class="row">
            <div class="col-8 b my-auto">
                <div class="container ticketsection">
                    <table>
                    <tr>
                        <th class="widerow">TICKET</th>
                        <th class="widerow">PRICE</th>
                        <th class="widerow"></th>
                    </tr>
                    <?php foreach($ticketinfo as $row){ ?>
                        <tr>
                            <td class="widerow-data"><?php echo $row['Ticket']?></td>
                            <td class="widerow-data">£<?php echo $row['Price']?></td>
                            <td class="addticket"><a href="<?php echo site_url('reel/basketaddfunction/'.$row['Ticket'].'/'.$row['Price'].'/'.$row['Seatcount'])?>"><button>Add to Basket</button></td>
                        </tr>
                    <?php } ?>
                    </table>
                    <p>*Family Ticket consists of 1 Adult, 2 Child/Teen and 1 more Adult or Child/Teen Ticket</p>
                </div>
            </div>


            <div class="col-4 y">
                <div class="container basketsection">
                    <h2 class="basketsection-title">BASKET <span><?php foreach($basketcount as $bcount){echo $bcount['rowCount'];}?></span></h2>
                    <h5><?php echo $this->session->userdata('parseDay');?>&nbsp;&nbsp;<?php echo $this->session->userdata('parseTime');?></h5>
                    <br>
                    <table>
                    <?php foreach($basketitems as $items){ ?>
                        <tr>
                            <td class="basketTD"><?php echo $items['Moviename']?></td>
                            <td class="basketTD"><?php echo $items['Ticket']?></td>
                            <td class="basketTD">£<?php echo $items['Price']?></td>
                            <td class="removeticket basketTD"><a href="<?php echo site_url('reel/basketremovefunction/'.$items['Moviename'].'/'.$items['Ticket'])?>"><button>Remove</button></td>
                        </tr>
                    <?php } ?>
                        <tr>
                            <td class="subtotal">Subtotal</td>
                            <td class="subtotal"></td>
                            <td class="subtotal">£<?php foreach($subtotal as $subval){ echo $subval['Subtotal'];}?></td>
                        </tr>
                    </table>
                    <div class="proceedbtn pt-5 pb-3 text-center"><a href="<?php echo site_url('reel/seats')?>"><button>Proceed</button></a></div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>