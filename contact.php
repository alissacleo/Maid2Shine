<!DOCTYPE html>
<html lang="en-AU">
<head itemscope itemtype="http://schema.org/WebSite">

	<meta name="description" content="Maid 2 Shine is a full service cleaning company in Port Hedland Western Australia that offer residential, commercial, and vacate cleaning including carpet cleaning">

	<?php include 'head.html'; ?>

	<?php
		if($_GET['message']) {
			echo '<meta http-equiv="refresh" content="5;url=contact.php">';
		}
	?>
	
	<title>Maid 2 Shine Cleaning Solutions | Port Hedland Western Australia</title>

	<link rel="canonical" href="http://maid2shine.com.au/contact.php" itemprop="url">

</head>
<body>

<?php include 'header.html'; ?>

	<div class="container">
		<h1>Maid 2 Shine Cleaning Solutions</h1>
		<h2>Port Hedland Western Australia</h2>
		<h3 id="cForm">Contact Us</h3>
		
		<div class="flex flexMd">
			<div class="card third">
				<h3>Call</h3>
				<p>0419-957-189</p>
			</div>
			<div class="card third">
				<h3>Email</h3>
				<p>admin[at]maid2shine.com.au</p>
			</div>
			<div class="card third">
				<h3>Facebook</h3>
				<p><a href="https://facebook.com/maid2shinephe" target="_blank" rel="noopener">Maid2Shine Facebook</a></p>
			</div>
		</div>

	</div>

	
	<div class="color contact">
		<div class="container">
			<h2>Contact Us</h2>
			<div class="alert">
				<?php 
					if(isset($_GET["message"]) && $_GET["message"] === "sent") {
						echo "<div class='success'>Message Sent Successfully</div>";
					}
					if(isset($_GET["message"]) && $_GET["message"] === "notsent"){
						echo "<div class='failure'>Mr Form is taking a holiday - Send an email directly to admin@maid2shine.com.au</div>";
					} 
				?>
			</div>
			<form method="POST" action="message.php" name="contactform">				
			    <div class="flex flexSm">
				    <div class="half">
						<label for="fname">First name</label>
						<input type="text" class="form-control" id="fname" name="fname" placeholder="First Name" required>
						<div class="valid-feedback">Looks good!</div>
				    </div>
				    <div class="half">
				    	<label for="lname">Last name</label>
				    	<input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name" required>
				    	<div class="valid-feedback">Looks good!</div>
				    </div>
				</div>
				<div class="flex flexSm">
				    <div class="half">
				        <label for="email">Email</label>
				        <input type="email" class="form-control" id="email" name="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
				        <div class="invalid-feedback">Please enter a valid email address.</div>
			    	</div>
				    <div class="half">
				        <label for="phone">Phone</label>
				        <input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone" pattern="[0-9' ()-]*">
				        <div class="invalid-feedback">Please enter a valid phone number.</div>
			    	</div>
				</div>
				<div class="flex flexSm">
					<div class="full">
				    	<label for="text">Message</label>
				    	<textarea class="form-control" id="text" name="text" rows="7" placeholder="Your message" required></textarea>
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

	<?php include 'footer.php'; ?>
	


</body>
</html>