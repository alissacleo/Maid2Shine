<div class="color contact include">
		<div class="container">
			<h2>Contact Us</h2>
			<form method="POST" action="message.php" name="contactform" id="cForm">				
				<div class="alert">
					<?php if(isset($_GET["message"]) && $_GET["message"] === "sent") {echo "<div class='success'>Message Sent Successfully</div>";}; if(isset($_GET["message"]) && $_GET["message"] === "notsent"){echo "<div class='failure'>Mr Form is taking a holiday - Send an email directly to admin@maid2shine.com.au</div>";}?>
				</div>
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