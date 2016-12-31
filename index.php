<?php
include("head.php");
?>
	<body>
		<?php
		include("track.php");
		?>
		<div class="load-screen">
		    <div class="tm-loader"><div class="spinner"></div></div>
		</div>

		<div id="container">

			<nav>
				<div class="divider">
				</div>
				<ul>
					<a href="#home"><img id="logo_small" src="img/logo_small.png"/></a>
					<li class="navItem"><a href="#home">Home</a></li>
					<li class="navItem"><a href="#portfolio">Portfolio</a></li>
					<li class="navItem"><a href="#about">About</a></li>
					<li class="navItem"><a href="#contact">Contact</a></li>
				</ul>
			</nav>

			<div class="section-container">
				<div class="section" id="home">
					<img class="hero-1" src="img/logo.png"/>
				</div>


					<div id="wave">
					</div>

				<div id="portfolio" class="section">

					<div id="Container" class="portfolio-container">
							<div class="pgrid">
								<a class="gallery" href="mend.php">
									
									<img src="img/portfolio/mend.png"/>
									<div><h3>Mend</h3>
									<p>Make psychotherapy <br>more efficient</p>
									</div></a>

							</div>
							
							<div class="pgrid">
								<a class="gallery" href="kasa.php">
									<img src="img/portfolio/kasa.png"/>
									<div><h3>TP-LINK Kasa</h3>
									<p>Automate daily routines <br>for smart home users</p>
									</div></a>
							</div>
							
							<div class="pgrid">
								<a class="gallery" href="http://www.dribbble.com/colinchen" target="_blank">
									<img src="img/portfolio/dribbble.png"/>
									<div><h3>UI Design</h3>
									<p>Dribbble UI design <Br> portfolio</p>
									
								</div></a>
							</div>
							
							
							<div class="pgrid">
								<div><a class="gallery" href="mira.php">
									<img src="img/portfolio/mira.png"/>
									<div><h3>Mira</h3>
									<p>Your personal <Br> skincare expert</p>
									</div></a></div>
							</div>
							
					


					</div>

				<div id="floatContent">

				</div>
				<div id="about">
					<div class="about-container">
						<img src="img/wave_long.png" />
						<div class="about-content container">
							<div id="fadeBox">
									<img id="portrait" src="img/portrait.png"/>
									<p class="aboutText1"><span>Empathy. Feasibility. Simplicity.</span><br>I am a second-year Master's student at the University of Michigan studying Human-Computer Interaction. I value simplicity, feasibility and creativity in my work. Aside from being a UX designer, I am a classical musician. I play the piano and the violin.
									<span class="resume"><a href="Chen_Resume.pdf" target="_blank">View Resume</a></span>
									</p>

							</div>

						</div>
						<div id="fadeTrigger">
						</div>
						<div id="contact">
							<p class="contact-container"><img src="img/logo_gray.png"/><br>
								cchent [at] umich.edu<br>
								②06 · 307 · 1269<br><br>
								<a href="http://www.dribbble.com/colinchen" target="_blank"><i class="fa fa-dribbble" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;
								<a href="https://www.linkedin.com/in/colintychen" target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;
								<a href="https://www.github.com/colczr" target="_blank"><i class="fa fa-github" style="font-size: 2.6rem;" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;
								<a href="https://www.medium.com/@colczr" target="_blank"><i class="fa fa-medium" style="font-size: 2.2rem;" aria-hidden="true"></i></a>
							</p>

						</div>
					</div>

				</div>




				</div>




			</div>
		</div>




		<script type="text/javascript" src="js/lib/highlight.pack.js"></script>
		<script type="text/javascript" src="js/lib/modernizr.custom.min.js"></script>
		<script type="text/javascript" src="js/lib/velocity.min.js"></script>
		<script type="text/javascript" src="js/lib/greensock/TweenMax.min.js"></script>

		<script type="text/javascript" src="scrollmagic/uncompressed/ScrollMagic.js"></script>
		<script type="text/javascript" src="scrollmagic/uncompressed/plugins/animation.gsap.js"></script>
		<script type="text/javascript" src="scrollmagic/uncompressed/plugins/animation.velocity.js"></script>
		<script type="text/javascript" src="scrollmagic/uncompressed/plugins/debug.addIndicators.js"></script>
		<script type="text/javascript" src="js/libs/jquery.smooth-scroll.js"></script>

		<script type="text/javascript" src="js/three.min.js"></script>
		<script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
		<script type="text/javascript" src="js/renderers/Projector.js"></script>
		<script type="text/javascript" src="js/renderers/CanvasRenderer.js"></script>
		<script type="text/javascript" src="js/libs/stats.min.js"></script>
		<script type="text/javascript" src="js/obj/Bird.js"></script>
		<script type="text/javascript" src="js/canvas.js"></script>
		<script type="text/javascript" src="js/mainScMa.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
	</body>
</html>
