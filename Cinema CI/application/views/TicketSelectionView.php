<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket Selection</title>
</head>

<style>
/*---TicketSelection CSS---*/
    body{
        margin: 0;
        padding: 0;
        font-family: "Helvetica Neue",sans-serif;
        background: #101113;
        height: 100vh;
        overflow: auto;
        color: #ffffff;
    }

    .backbutton button{
        margin: 20px 0px 50px 20px;
        background: #0000;
        color: #ffffff;
        border: solid 2px #f5f5f5;
        border-radius: 25px;
        width: 90px;
        height: 40px;
        font-size: 16px;
    }

    .backbutton button:hover, .proceedbutton button:hover{
        background: #ffffff;
        color: #101113;
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

    .ticketselection{
        margin-top: 5%;
    }

    .ticketselection table{
        margin-left: auto; 
        margin-right: auto;
        border-collapse: collapse;
    }

    .ticketselection table th, td{
        padding: 20px;
        text-align: left;
        border-bottom: solid 1px #ffffff;
    }

    .widerow{
        padding-right: 250px;
    }

    .addticket button{
        background: #0000;
        color: #ffffff;
        border: solid 1px #ffffff;
        border-radius: 25px;
        width: 140px;
        height: 40px;
        font-size: 16px;
    }

    .addticket button:hover{
        background: #1DB954;
        color: #000000;
        border-color: #0000;
        cursor: pointer;
    }

    .ticketselection p{
        padding-top: 0.5rem;
        margin-left: 33rem; 
        color: #505050;
    }

</style>

<body>
    <div class="container">
        <div class="backbutton">
            <a href="<?php echo site_url('home/canceltonowshowing')?>"><button>Cancel</button></a>
        </div>

        <div class="basket">
            <h4>Basket 
            <?php foreach($basketcount as $bcount){ ?>
                <span><?php echo ':  '.$bcount['rowCount']?></span>
            <?php } ?>
            </h4>
        </div>

        <div class="ticketselection">
            <table>
                <tr>
                    <th class="widerow">TICKET</th>
                    <th class="widerow">PRICE</th>
                    <th class="widerow"></th>
                </tr>
                <?php foreach($ticketinfo as $row){ ?>
                    <tr>
                        <td class="widerow"><?php echo $row['Ticket']?></td>
                        <td class="widerow"><?php echo $row['Price']?></td>
                        <td class="addticket"><a href="<?php echo site_url('basket/basketfunction/'.$row['Ticket'].'/'.$row['Price'].'/'.$row['Seatcount'])?>"><button>Add to Basket</button></td>
                    </tr>
                <?php } ?>
            </table>
            <p>*Family Ticket consists of 1 Adult, 2 Child/Teen and 1 more Adult or Child/Teen Ticket</p>
        </div>

        <div class="proceedbutton">
            <a href="<?php echo site_url('home/seating')?>"><button>Proceed</button></a>
        </div>    
    </div>

</body>
</html>