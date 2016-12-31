<?php
ini_set( 'error_reporting', E_ALL );
ini_set( 'display_errors', true );

include("head.php");
?>
<body>
	<?php
	include("track.php");
	?>
	<div class="load-screen">
			<div class="tm-loader"><div class="spinner"></div></div>
	</div>

	<div class="project-container">

	<?php
		include "nav.php";

		
	?>
		<div class="content" style="background-color: #81add2; background-image: url('img/kasa/illustration.png'); background-size: cover; background-position: center;">



			<div class="chunk" style="color: white;">
				<h1 class="portHead1">Kasa<br><div class="divider-line"></div></h3>
				<h4 class="portTag"><span style="color: white; border: 1px solid white;">UX</span> <span style="color: white; border: 1px solid white;">2016</span></h4>
				<h2 class="portHead2">Automate daily routines<br>for smart home users  </h2>
				
				<p style="color: white;"><br><Br>TP-LINK Kasa is a smart home ecosystem. The automation feature that I designed aims to provide a simple and intuitive configuration process for its users.<br><br>
				</p>
			</div>
		</div>
		<div class="content"  style="background-color: #EBF1F3;">
			<div class="chunk">
				<h3 class="portHead3">Understanding how automation <br> is currently being done</h3><br>
				<p>In order to get a thorough understanding of current home automation apps, I looked into some major smart-home competitors as well as some user feedback to get a good sense of where to start.</p>

				<p>All of our competitors have some forms of automation. However, the approach is very different. For instance, IFTTT only allows users to choose from pre-made automation rules. In contrast, the home app (by Matthias Hochgatter) really brings out the full potential of automation rules and allows a very large range of automation possibilities.</p>
				<img id="competitive" src="img/kasa/competitive.png"/><br>
			</div>
			
		</div>
		<div class="content">
			<div class="chunk">
				<h3 class="portHead3">What did our competitors teach us?</h3>
				<br>
				<p>Based on research previously done by TP-LINK as well as my own research above, I summarized and distilled the information from the research and came up with the core components of a automation rule: trigger, condition, and action. </p>
				<br>
				<img id="rule" src="img/kasa/rule.png"/>
			</div>
		</div>
		<div class="content" style="background-color: #e3e3f6;">
			<div class="chunk"  id="pin1">
				<h3 class="portHead3">What do the users want?</h3><br>
				<p>The user review from Apple appstore as well as the Google playstore gave me a lot of insight into what the users wanted for the application. I used the saturate and group method by Stanford d-School to generate some insights for guiding our design.</p>
				<img id="quotes" src="img/kasa/quotes.png"/><br>
				<img id="pain" src="img/kasa/pain.png"/>
			</div>
		</div>
		<div class="content" style="background-color: #eee; background-image: url(img/kasa/sectionbg.jpg); background-repeat: no-repeat;">
			<br><Br><h3 class="portHead3 white">Improving the current solution <br>based on the user's need</h3><br><br>
			<div class="solution-container">
				<div class="solution">
					<p>The user review from Apple appstore as well as the Google playstore gave me a lot of insight into what the users wanted for the application. </p><br>
					<img src="img/kasa/ver1.jpg"/>
					
				</div>
				<div class="solution">
					<p>The user review from Apple appstore as well as the Google playstore gave me a lot of insight into what the users wanted for the application. </p><br>
					<img src="img/kasa/ver2.jpg"/>
					
				</div>
				<div class="solution">
					<p>The user review from Apple appstore as well as the Google playstore gave me a lot of insight into what the users wanted for the application. </p><br>
					<img src="img/kasa/ver3.jpg"/>
					
				</div>
			</div>
			<div class="chunk">
			
				
					
					
				
				
				
				<br><br><h3 class="portHead3">Confirming the solution with users</h3><br>
				<p>
				After the first iteration of wireframe, I conducted a usability test with 6 users. The usability test provided me with good insights into my first iteration of design: I wrongly strived for minimal steps of interaction in order to create a frustration-less experience. Consequently, too much information was squeezed into only a few pages and the overload of information and available actions confused the user. Moreover, I found that user prefer a "action -> trigger -> condition" process. I also found that the automation feature is something that the user would not frequently need to configure: once it's set up, it does not need intervention until the user need to change it or create a new rule. 
				<img id="notes" src="img/kasa/notes.jpg"/>
				<h4 class="portHead4">Refining and prototyping</h4>
				<p>Based on the result from the usability test, I refined my design and instead putting the focus on making the process of setting up a rule intuitive with thorough guidance.</p>
				<img id="wireframe" src="img/kasa/wireframe.png"/>
				</p>
			</div>
		</div>
		<div class="content detail">
				<br><h3 class="portHead3">Bringing out the details</h3><br><br>
				<div class="chunk">
					<video class="anim" width="700" autoplay loop>
						<source src="img/kasa/anim1.mp4" type="video/mp4">
							Your browser does not support the video tag.
					</video>
					<p>After wireframing, I came up with some high-fidelity prototypes. I used natural language and fill-in-the-blank style instructions in order to give users ideas of what they are setting up and what the function would actually be like in words that they understand. Because the process is rather confusing and requires logic, I made it very easy for users to go back and correct any mistakes they made.</p>
					
				</div>
				
				
				<div class="chunk">
					<video class="anim" width="700" autoplay loop>
						<source src="img/kasa/anim2.mp4" type="video/mp4">
							Your browser does not support the video tag.
					</video>
					<p>I also made sure whatever they have already set up is always visible to them in order to help them diagnose any errors as well as progressing further in the steps.</p>
					
				</div>
				
				
				
				<div class="chunk">
					<video class="anim" width="700" autoplay loop>
						<source src="img/kasa/anim3.mp4" type="video/mp4">
							Your browser does not support the video tag.
					</video>
					<p>Although I aim to provide maximum flexibility, for some more nuissance details, I chose to only provide users with visible increments of options: for instance, setting up the brightness of a lightbulb at 0%, 25%, 50%, 75% and 100%. This provides convenience to both the user and the programmer.</p>
					
				</div>
				
				
				<br><br>
			
		</div>
	</div>


	

	<?php
		include('foot.php');
	 ?>
	 <script type="text/javascript" src="js/KasaScMa.js"></script>
</body>
</html>

<?php
