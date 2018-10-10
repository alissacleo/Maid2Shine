<!DOCTYPE html>
<html lang="en-AU">
<head itemscope itemtype="http://schema.org/WebSite">

	<meta name="description" content="Get a quote from Maid2Shine of Port Hedland Western Australia for you domestic or commercial cleaning needs including strip and seal, steam clean, window cleaning, blind cleaning, acid washes, oven cleaning, gardening, and high pressure washing">

	<?php include 'head.html'; ?>

	<title>Get a Quote from Maid 2 Shine | Port Hedland Western Australia</title>

	<link rel="canonical" href="" itemprop="url">

	<style>
	.nodisplay {
		display: none !important;
	}
</style>

</head>
<body>

<?php include 'header.html'; ?>

	<div class="container">
		<h1>Maid 2 Shine - Get a Quote</h1>
		<h2>Let us take a bite out of your grime</h2>
		<p>Contact us to get a quote for your cleaning needs</p>

		<form method="POST" action="getaquote.php" name="quoteform" id="qForm">				
				<div class="alert">
					<?php if(isset($_GET["message"]) && $_GET["message"] === "sent") {echo "<div class='success'>Message Sent Successfully</div>";}; if(isset($_GET["message"]) && $_GET["message"] === "notsent"){echo "<div class='failure'>Mr Form is taking a holiday - Send an email directly to admin@maid2shine.com.au</div>";}?>
				</div>
			    <div class="flex flexSm">
				    <div class="half">
						<label for="fname">Name</label>
						<input type="text" class="form-control" id="name" name="name" autocomplete="name" placeholder="Name" pattern="[A-Za-z' -]*" required>
						<div class="valid-feedback">Looks good!</div>
				    </div>
				    <div class="half">
				        <label for="email">Email</label>
				        <input type="email" class="form-control" id="email" name="email" autocomplete="Email" placeholder="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
				        <div class="invalid-feedback">Please enter a valid email address.</div>
			    	</div>
				</div>
				<div class="flex flexSm">
				    <div class="half">
				        <label for="phone">Phone</label>
				        <input type="tel" class="form-control" id="phone" name="phone" autocomplete="tel" placeholder="Phone" pattern="[0-9' ()-]*">
				        <div class="invalid-feedback">Please enter a valid phone number.</div>
			    	</div>
			    	<div class="half">
				    	<label for="size">Address</label>
				        <input type="text" id="size" name="size" pattern="[\w\s.#';,-]*" required>
				        <div class="invalid-feedback">Please select desired frequency.</div>
			    	</div>
				</div>
				<div class="flex flexSm">
				    <div class="half">
				        <label for="service">Service</label>
				        <select class="form-control" id="service" name="service" required>
				        	<option value="">Choose a Service</option>
				        	<option value="house clean">House Cleaning</option>
				        	<option value="vacate">Vacate Cleaning</option>
				        	<option value="carpet">Carpet Cleaning</option>
				        	<option value="lounge">Lounge Cleaning</option>
				        	<option value="commercial">Commercial/Office Cleaning</option>
				        	<option value="yard">Yard and Garden</option>
				        	<option value="other">Other</option>
				        </select>
				        <div class="invalid-feedback">Please select a service.</div>
			    	</div>
				    <div class="half">
			    	</div>
			    </div>
				<div class="flex flexSm nodisplay" id="freqBox">
				    <div class="half">
				        <label for="freq">Frequency</label>
				        <select class="form-control" id="freq" name="freq">
				        	<option value="">Choose a Frequency</option>
				        	<option value="once">Once</option>
				        	<option value="quarterly">Quarterly</option>
				        	<option value="monthly">Monthly</option>
				        	<option value="fortnightly">Fortnightly</option>
				        	<option value="weekly">Weekly</option>
				        	<option value="weekdays">Weekdays</option>
				        	<option value="daily">Daily</option>
				        </select>
				        <div class="invalid-feedback">Please select desired frequency.</div>
			    	</div>
				    <div class="half">
			    	</div>
			    </div>
				<div class="flex flexSm">
				    <div class="half nodisplay" id="size1Box">
				    	<label for="size1">How large is your space?</label>
				        <input type="text" id="size1" name="size1" pattern="[\w\s.#';,-]*" placeholder="How many rooms?">
				        <div class="invalid-feedback">Please select desired frequency.</div>
				    </div>
				    <div class="half nodisplay" id="size2Box">
				        <input type="text" id="size2" name="size2" pattern="[\w\s.#';,-]*" placeholder="How many seats?">
				        <div class="invalid-feedback">Please select desired frequency.</div>
				    </div>
				    <div class="half">
				    </div>
				</div>
				<div class="flex flexSm">
					<div class="full">
				    	<label for="text">Additional Information</label>
				    	<textarea class="form-control" id="text" name="text" rows="7"></textarea>
				    	<div class="invalid-feedback">Please write us a message.</div>
				    </div>
				</div>
				<div class="flex flexSm">
					<div class="full center">
						<button type="submit" name="submit" class="cta">Request Quote</button>
					</div>
				</div>
			</form>


		
	</div>

<script type="text/javascript">
		var service = document.getElementById('service');
		var freq = document.getElementById('freqBox');
		var size1 = document.getElementById('size1Box');
		var size2 = document.getElementById('size2Box');

		service.addEventListener('change',function() {
			if (service.value == 'vacate' || service.value == 'lounge' || service.value == 'carpet' || service.value == "") {
				freq.classList.add('nodisplay');
			} else {
				freq.classList.remove('nodisplay');
			}
			if (service.value == 'house clean' || service.value == 'vacate' || service.value == 'carpet' || service.value == 'commercial') {
				size1.classList.remove('nodisplay');
				size2.classList.add('nodisplay');
			} else if (service.value == 'lounge') {
				size1.classList.add('nodisplay');
				size2.classList.remove('nodisplay');
			} else {
				size1.classList.add('nodisplay');
				size2.classList.add('nodisplay');
			}
		});
</script>
	<?php include 'footer.html'; ?>

</body>
</html>