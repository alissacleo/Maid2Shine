<div id="footer">
	<div class="container">
		<div class="flex flexMd">
			<div class="four nomargin nopadding">
				<img src="images/cleaner.png" alt="Maid 2 Shine Cleaner"/>
			</div>
			<div class="three vcard">
				<img src="images/logo.jpg" class="logo nodisplay">
				<ul>
					<li class="org nopadding"><p class="title">Maid 2 Shine</p></li>
					<li class="fn nodisplay">Lisa Rose</li>
					<li><a href="tel:0419957189" class="tel">0419957189</a></li>
					<li><a href="mailto:admin@maid2shine.com.au" class="email">admin@maid2shine.com.au</a></li>
					<li class="adr">
						<a href="https://maps.google.com/maps?" target="_blank" rel="noopener">
							<span class="street">20 Murrena</span><br/>
							<span class="locality">Wedgefield</span>, 
							<abbr title="Western Australia" class="region">WA</abbr> 
							<span class="postal-code">6721</span>
							<span class="country-name nodisplay">Australia</span>
						</a>
					</li>
				</ul>
			</div>
			<div class="two">
				<p class="title">Links</p>
				<ul>
					<li><a href="services.php">Services</a></li>
					<li><a href="reviews.php">Reviews</a></li>
					<li><a href="contact.php">Contact</a></li>
				</ul>
			</div>
			<div class="one">
				<!-- <p class="title">Links</p>
				<ul>
					<li><a href="">Link</a></li>
					<li><a href="">Link</a></li>
					<li><a href="">Link</a></li>
					<li><a href="">Link</a></li>
				</ul> -->
			</div>
			<div class="two">
				<p class="title">Connect</p>
				<div>
					<a href="https://www.facebook.com/maid2shinephe" alt="Maid 2 Shine on Facebook" target="_blank" rel="noopener" title="Facebook">
						<span class="nodisplay">Maid2Shine Facebook</span>
						<svg class="icon icon-facebook"><use xlink:href="icons/symbol-defs.svg#icon-facebook"></use></svg>
					</a>
					<a href="mailto:admin@maid2shine.com.au" alt="Maid 2 Shine Email" target="_blank" title="Email">
						<span class="nodisplay">Email Maid2Shine</span>
						<svg class="icon icon-envelop"><use xlink:href="icons/symbol-defs.svg#icon-envelop"></use></svg>
					</a>
				</div>
				<!-- <div>
					<a href="https://instagram.com/" alt="Business on Instagram" target="_blank">
						<svg class="icon icon-instagram"><use xlink:href="icons/symbol-defs.svg#icon-instagram"></use></svg>
					</a>
				</div>
				<div>
					<a href="https://www.twitter.com/" alt="Business on Twitter" target="_blank">
						<svg class="icon icon-twitter"><use xlink:href="icons/symbol-defs.svg#icon-twitter"></use></svg>
					</a>
				</div> -->
			</div>
		</div>
	</div>
</div>
<div id="copyright" class="center">
	Designed by <a href="https://rivitdesign.com" target="_blank" rel="noopener">Rivit Design</a> | &copy; <?php echo date("Y"); ?>
</div>


<!-- Check for most recent slim mini jquery -->
<script  src="//code.jquery.com/jquery-3.3.1.slim.min.js"  integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E=" crossorigin="anonymous"></script>

<script defer type="text/javascript" src="icons/svgxuse.min.js"></script>

<script>
	var navBtn = document.querySelector('button.navbar-toggler');
	navBtn.addEventListener('click',function() {
		document.querySelector('div.navbar-collapse').classList.toggle("open");
	});
</script>