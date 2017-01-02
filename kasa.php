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
		<div class="content bg-light-gray" style="padding-top: 0;background-color: #EBF1F3;">
			<img src="img/kasa/title.png" style="width: 100vw;"/>
			<div class="chunk">
				<h3 class="portHead3">How did our competitors approach automation?</h3><br>
				<p>In order to get a thorough understanding of current home automation apps, I looked into some major smart-home competitors as well as some user feedback to get a good sense of where to start.All of our competitors have some forms of automation. However, the approach is very different.</p>
				<img id="competitive" src="img/kasa/competitive.png"/><br>
			</div>
		
		</div>
		<div class="content" style="background-color: #e3e3f6;">
			<div class="chunk"  id="pin1">
				<h3 class="portHead3">What do the users want?</h3><br>
				<p>The user review from Apple appstore as well as the Google playstore gave me a lot of insight into what the users wanted for the application, and pointed some directions to the design.</p>
				<img id="quotes" src="img/kasa/quotes.png"/><br>
				<img id="pain" src="img/kasa/pain.png"/>
			</div>
		</div>
		<div class="content">
			<div class="chunk">
				<h3 class="portHead3">Summarizing the findings</h3>
				<br>
				<p>Based on research previously done by TP-LINK as well as my own research above, I summarized and distilled the information from the research and came up with the core components of a automation rule: trigger, condition, and action. </p>
				<br>
				<img id="rule" src="img/kasa/rule.png"/>
			</div>
		</div>
		
		<div class="content" style="background-color: #fafafa; ">
			<br><Br><h3 class="portHead3">Designing and adjusting based on user's feedback</h3><br><br>
			<div class="solution-container">
				<div class="solution">
					<p><span>Iteration 1</span>Making the set-up process easy and limiting the complexity.</p><br>
					<img src="img/kasa/ver1.jpg"/>
					
				</div>
				<div class="solution">
					<p><span>Iteration 2</span>Experimenting with bringing out potential for complex interaction.</p><br>
					<img src="img/kasa/ver2.jpg"/>
					
				</div>
				<div class="solution">
					<p><span>Final Iteration</span>Combining easy and intuitive set-up process with complex interaction. </p><br>
					<img src="img/kasa/ver3.jpg"/>
					
				</div>
			</div>

		</div>
		<div class="content" style="height: 50rem; background-image: url(img/kasa/middle.png); background-size: cover; background-position: center;">
		</div>
		<div class="content" style="background-color: #d5e9f9;">
			<div id="steps-container">
				<img src="img/kasa/steps.png" width="960px" style="position: absolute;"/>
					<video class="steps" width="210" autoplay loop style="margin-left: 20px;">
						<source src="img/kasa/step1.mp4" type="video/mp4">
							Your browser does not support the video tag.
					</video>
					<video class="steps" width="210" autoplay loop style="margin-left: 40px;">
						<source src="img/kasa/step2.mp4" type="video/mp4">
							Your browser does not support the video tag.
					</video>
					<video class="steps" width="210" autoplay loop style="margin-left: 180px;">
						<source src="img/kasa/step3.mp4" type="video/mp4">
							Your browser does not support the video tag.
					</video>
			</div>		
		</div>
	</div>
		<div class="content detail">
				<br><h3 class="portHead3">Bringing out the details</h3><br><br>
				<div class="chunk">
					<video class="anim" width="700" autoplay loop>
						<source src="img/kasa/anim1.mp4" type="video/mp4">
							Your browser does not support the video tag.
					</video>
					<p>I used natural language and fill-in-the-blank style instructions in order to give users ideas of what they are setting up and what the function would actually be like in words that they understand. Because the process is rather confusing and requires logic, I made it very easy for users to go back and correct any mistakes they made.</p>
					
				</div>
				<hr>
				
				<div class="chunk">
					
					<p>I also made sure whatever they have already set up is always visible to them in order to help them diagnose any errors as well as progressing further in the steps.</p>
					<video class="anim" width="700" autoplay loop style="position: relative; right: -10px;">
						<source src="img/kasa/anim2.mp4" type="video/mp4">
							Your browser does not support the video tag.
					</video>
					
				</div>
				<hr>
				
				
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
