<!DOCTYPE html>
<html lang="en-AU">
<head itemscope itemtype="https://schema.org/WebSite">

	<meta name="description" content="Maid 2 Shine is a full service cleaning company in Port Hedland Western Australia that offer residential, commercial, and vacate cleaning including carpet cleaning">

	<?php include 'head.html'; ?>

	

	<title>Maid 2 Shine Cleaning Services | Port Hedland Western Australia</title>

	<link rel="canonical" href="http://maid2shine.com.au" itemprop="url">

	<style>
		div.bg {
		    position: relative;
		    height: 40vh;
		    overflow: hidden;
		    z-index: 0;
		    width: 100vw;
			box-shadow: inset 0px 0px 23px rgba(0,0,0,0.5);
			background: rgba(255,255,255,0.3);
		}
		div.bg.image {
			position: fixed;
			z-index: -1;
		}
		div.bg h2 {
			display: none;
		}
		div.bg h3 {
			font-size: 1.2em;
			font-style: italic;
		}
		h2 {
		    font-size: 1.6em;
		    text-transform: capitalize;
		    margin: 7px 0px;
		}
		div.block.white {
			background: #fff;
			padding: 40px 20px;
		}
		.bg div {
		    position: relative;
		    margin-top: 10%;
		    margin-top: calc(20vh - 45px);
		    text-align: center;
		    text-shadow: 0px 0px 7px rgba(255,255,255,1), 0px 0px 20px rgba(255,255,255,0.4), 0px 0px 80px rgba(255,255,255,0.4);
		}
		@media all and (min-width:992px) {
			div.bg {
			    height: 65vh;
			}
			div.bg h2 {
				display: block;
			}
			div.bg h3 {
				font-size: 1.8em;
			}
		}
		@media all and (min-width: 1140px) {
			.bg div {
			    position: absolute;
			    top: 20%;
			    margin-top: 0px;
			    width: 1140px;
			    text-align: left;
			    left: calc(50% - 570px);
			}
		}

	</style>

</head>
<body>

<?php include 'header.html'; ?>

	
		<?php 
			$bg = array('images/filios-sazeides-540219-unsplash.jpg','images/aaron-huber-401200-unsplash.jpg','images/naomi-hebert-188443-unsplash.jpg','images/taylor-hernandez-401953-unsplash.jpg');
			$i = rand(0, count($bg)-1);
			$selectedbg = "$bg[$i]";
		?>
	<div class="bg image" style="background:url(<?php echo $selectedbg; ?>) center 40% no-repeat; background-size: cover;"></div>
	<div class="bg">
		<div>
			<h1>Maid 2 Shine</h1>
			<h2>Domestic &amp; Commercial Cleaning</h2>
			<h2>Port Hedland Western Australia</h2>
			<h3>Let us take a bite out of your Grime</h3>
		</div>
	</div>
	<!--<div class="container slider">
		<div class="carousel">
			<div class="siema">
				<div>
					<a href="">
						<img src="images/floorbeforeafterslider.jpg">
					</a>
				</div>
				<div>
					<a href="">
						<img src="images/showerbeforeafterslider.jpg">
					</a>
				</div>
				<div>
					<a href="">
						<img src="images/sinkbeforeafterslider.jpg">
					</a>
				</div>
				<div>
					<a href="">
						<img src="images/calciumbeforeafterslider.jpg">
					</a>
				</div>
			</div>
			<button class="siema prev">
		    	<svg class="icon icon-keyboard_arrow_left"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-keyboard_arrow_left"></use></svg>
			</button>
			<button class="siema next">
		    	<svg class="icon icon-keyboard_arrow_right"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-keyboard_arrow_right"></use></svg>
			</button>
		</div>
	</div>-->


	<div class="block white">
		<div class="container">
			<p>We are a locally owned and operated cleaning company.  Our staff is reliable, trustworthy, loyal and hard working.  We will concentrate on what is important to you and can adjust our hours to suit your requirements.</p>
			 
			<p><em>We give that little bit extra in cleaning!</em></p>

			<p>We specialize in:</p>
				<!-- <ul>
					<li>Carpets/tiles/grout</li>
					<li>Home / Office</li>
					<li>Vacate cleaning - Domestic / Commercial</li>
				</ul> -->
			<div class="flex flexMd">
				<div class="card third">
					<h3>Tile and Grout Cleaning</h3>
					<p>Your tiles CAN be clean enough to eat off of them (although we do not recommend this)</p>
				</div>
				<div class="card third">
					<h3>Carpet Steam Cleaning</h3>
					<p>High powered, quality carpet and rug cleaning.  We also steam clean couches and lounges, carpeted stairs, and matresses.</p>
				</div>
				<div class="card third">
					<h3>Gardening and Yard Cleaning</h3>
					<p>Gardening, lawn mowing, weeding, skip bins and rubbish removal</p>
				</div>
			</div>
			<div class="flex flexMd">
				<div class="card third">
					<h3>Domestic Cleaning</h3>
					<p>Packages Available</p>
					<p>We vacuum, dust, mop, scrub, wipe, and tidy.  We'll take out your rubbish and do your dishes!  Our comprehensive clean includes all manner of dirt and grime!</p>
				</div>
				<div class="card third">
					<h3>Commercial Cleaning</h3>
					<p>Prices vary</p>
					<p>All aspects of commercial cleaning including offices, workshops, factory floors, bathrooms, etc</p>
				</div>
				<div class="card third">
					<h3>Vacate Cleaning</h3>
					<p>Each job quoted separately</p>
					<p>"Bond back" vacate cleaning includes interior, exterior, yard, and professional carpet cleaning</p>
				</div>
			</div>
			<div>
				<p>Check out all of our <a href="services">Services</a>.</p>
			</div>
			<!-- <div class="flex flexMd">
				<div class="card third">
					<h3>Oven Cleaning</h3>
					<p>Oven cleaning includes an overnight soak and a full scrub of the entire interior and exterior of your 600mm or 900mm oven</p>
				</div>
				<div class="card third">
					<h3>Blinds</h3>
					<p>Hand removal, cleaning, and rehanging of vertical or Venetian blinds.</p>
				</div>
				<div class="card third">
					<h3>High Pressure Washing</h3>
					<p>Use a high pressure wash to renew your walkways, entryways, carparks, and outdoor areas.</p>
				</div>
			</div> -->
		</div>
	</div>
	<div class="block color">
		<div class="container">
			<h2>Regular Domestic Cleaning</h2>
			<p>How It Works</p>
			<p>Schedule our staff to clean your home on a regular basis to keep it sparkling!  Set up an appointment on a weekly, fortnightly or monthly basis.  Regular, thorough cleaning will increase the longevity of your house, improve your health, and make your home an even more enjoyable and welcoming place to be.</p>
			<img src="images/cards.png" width="250px" alt="maid 2 shine accepts card and paypal payments">
			<p>To make keeping your home spotless even easier, you can establish a method of entry and set up direct debit payments.  Our staff can clean while you get on with your day.  You'll come home to a beautiful home and an email receipt.  No fuss, no hassle, no mess!</p>
			<a href="https://clienthub.getjobber.com/client_hubs/dc36f32e-0ba4-495c-99ca-3da87e5688d8/public/work_request/new" target="_blank" rel="noopener" class="cta">Get Regular Cleaning!</a>
		</div>
	</div>
	<div class="block white">
		<div class="container review">
			<h2>Reviews from Clients</h2>
			<div class="flex flexMd">
				<div class="card third">
					<p class="date">9-9-17</p>
					<p>Fantastic service! Used recently for our vacate clean, was very reassuring to leave our home in Maid 2 Shines hands! Very professional and highly recommend</p>
					<p>Beth McCallum</p>
				</div>
				<div class="card third">
					<p class="date">7-9-17</p>
					<p>Thank you so much! You did such an amazing job! Would very much recommend Maid2Shine for bond cleans. Such a thorough job! Top notch</p>
					<p>Rebecca Glendinning</p>
				</div>
				<div class="card third">
					<p class="date">5-9-17</p>
					<p>Great service and very happy polite employees, we had a mattress cleaned and it came up a treat!! And cost far less than I would have thought, thanks guys!!</p>
					<p>Rob Wink</p>
				</div>
			</div>
			<p>Read all of our <a href="reviews">Reviews</a> or check out our <a href="https://facebook.com/maid2shinephe" target="_blank" rel="noopener">Facebook</a>.</p>
		</div>
	</div>
	<div class="color contact">
		<div class="container">
			<h2>Contact Us</h2>
			<form method="POST" action="message.php" name="contactform" id="cForm">
			    <div class="flex flexSm">
				    <div class="half">
						<label for="fname">First name</label>
						<input type="text" class="form-control" id="fname" name="fname" autocomplete="Name" placeholder="First Name" pattern="[A-Za-z' -]*" required>
						<div class="valid-feedback">Looks good!</div>
				    </div>
				    <div class="half">
				    	<label for="lname">Last name</label>
				    	<input type="text" class="form-control" id="lname" name="lname" autocomplete="family-name" placeholder="Last Name" pattern="[A-Za-z' -]*" required>
				    	<div class="valid-feedback">Looks good!</div>
				    </div>
				</div>
				<div class="flex flexSm">
				    <div class="half">
				        <label for="email">Email</label>
				        <input type="email" class="form-control" id="email" name="email" autocomplete="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
				        <div class="invalid-feedback">Please enter a valid email address.</div>
			    	</div>
				    <div class="half">
				        <label for="phone">Phone</label>
				        <input type="tel" class="form-control" id="phone" name="phone" autocomplete="tel" placeholder="Phone" pattern="[0-9' ()-]*">
				        <div class="invalid-feedback">Please enter a valid phone number.</div>
			    	</div>
				</div>
				<div class="flex flexSm">
					<div class="full">
				    	<label for="text">Message</label>
				    	<textarea class="form-control" id="text" name="text" rows="7" placeholder="Your Message" required></textarea>
				    	<div class="invalid-feedback">Please write us a message.</div>
				    </div>
				</div>
				<div class="flex flexSm">
					<div class="full center">
						<button type="submit" name="submit" class="cta">Send It Off</button>
					</div>
				</div>
			</form>
		</div>
	</div>

	<?php include 'footer.html'; ?>
	
	<!-- <script type="text/javascript" src="siema.min.js"></script>

	<script>
		const mySiema = new Siema({
			selector: '.siema',
			duration: 500,
			easing: 'ease-out',
			draggable: true,
			multipleDrag: true,
			threshold: 20,
			loop: true,
			rtl: false,
			onInit: () => {},
			onChange: () => {},
		});

		setInterval(() => mySiema.next(), 5000);
		document.querySelector('.prev').addEventListener('click', () => mySiema.prev());
		document.querySelector('.next').addEventListener('click', () => mySiema.next());
	</script> -->

</body>
</html>