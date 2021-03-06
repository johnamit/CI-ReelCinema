<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/fontstyle.css">
		<title>Reel | Nav</title>
		<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js"></script>
		<script>
			$(document).ready(function(){
				$('.menu-open img').mouseover(function(){
					this.src = "<?php echo base_url();?>images/menuhover.png";
				});
				$('.menu-open img').mouseout(function(){
					this.src = "<?php echo base_url();?>images/menu.png";
				});
				$('.logo img').mouseover(function(){
					this.src = "<?php echo base_url();?>images/LogoYellow.png";
				});
				$('.logo img').mouseout(function(){
					this.src = "<?php echo base_url();?>images/LogoWhite.png";
				});
                $('.menu-close img').mouseover(function(){
					this.src = "<?php echo base_url();?>images/closeWhite.png";
				});
				$('.menu-close img').mouseout(function(){
					this.src = "<?php echo base_url();?>images/close.png";
				});

				var timeline = new TimelineMax({ paused: true });

				timeline.to(".nav-container", 1, {
					left: 0,
					ease: Expo.easeInOut,
				});

				timeline.staggerFrom(
					".menu > div",
					0.8,
					{ y: 100, opacity: 0, ease: Expo.easeOut },
					"0.1",
					"-=0.4"
				);

				timeline.staggerFrom(
					".menubottom",
					0.8,
					{ y: 100, opacity: 0, ease: Expo.easeOut },
					"0.4",
					"-=0.6"
				);

				timeline.reverse();
				$(document).on("click", ".menu-open", function () {
					timeline.reversed(!timeline.reversed());
				});
				$(document).on("click", ".menu-close", function () {
					timeline.reversed(!timeline.reversed());
				});
			});
		</script>
	</head>

    <style>

        * {
            font-family: "Monument Extended";
            font-weight: 600;
        }

        body {
            margin: 0;
        }

        .logo{
            position: absolute;
            top: 0;
            padding: 25px 40px 40px 40px;
            font-size: 20px;
            cursor: pointer;
        }

        .logo img{
            height: 55px;
        }

        .menu-open img, .menu-close img{
            height: 30px;
            width: 30px;
        }

        .menu-open,
        .menu-close {
            position: absolute;
            top: 0;
            right: 0;
            padding: 40px;
            font-size: 20px;
            cursor: pointer;
        }

        .menubottom {
            position: absolute;
            bottom: 0;
            left: 0;
            margin: 40px 100px;
        }

        .menubottom span {
            text-transform: uppercase;
            margin: 0 20px;
            letter-spacing: 0px;
        }

        .nav-container {
            position: fixed;
            left: -100%;
            width: 100%;
            height: 100vh;
            background: #FFCC00;
        }

        .menu__item {
            position: relative;
            padding: 0 5vw;
            font-size: 20px;
        }

        .menu {
            padding: 15vh 0 25vh;
        }

        .menu__item-link {
            cursor: pointer;
            font-size: 5vw;
            padding: 0 1vw;

        }

        a{
            color: #121212;
            text-decoration: none;
        }

        .menu__item-link:hover, span:hover{
            transition-duration: 0.5s;
            color: #fff;
            font-style: italic;
        }

		#setUser{
			color: #121212;
		}

    </style>

	<body>
		<nav class="navbar py-0">
			<div class="navitems">
				<div class="logo"><a href="<?php echo site_url('reel/home')?>"><img src="<?php echo base_url();?>images/LogoWhite.png" alt="REEL"></a></div>
				<div class="menu-open"><img src="<?php echo base_url();?>images/menu.png" alt="menu"></div>
			</div>
		</nav>
		
		<div class="nav-container">
			<div class="menu-close"><img src="<?php echo base_url();?>images/close.png" alt="menuicon"></div>
			<div class="menubottom">
				<span id="setUser"><?php echo $this->session->userdata('name');?></span>
				<a href="<?php echo site_url('reel/logout')?>"><span>Logout</span></a>
			</div>
			<nav class="menu">
				<div class="menu__item">
					<a class="menu__item-link" href="<?php echo site_url('reel/film')?>">Films</a>
				</div>
				<div class="menu__item">
					<a class="menu__item-link">Reel Rewards</a>
				</div>
				<div class="menu__item">
					<a class="menu__item-link">About</a>
				</div>
				<div class="menu__item">
					<a class="menu__item-link" href="<?php echo site_url('reel/booking')?>">Bookings</a>
				</div>
			</nav>
		</div>

	</body>
</html>
