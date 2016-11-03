<?php
ini_set( 'error_reporting', E_ALL );
ini_set( 'display_errors', true );
include("authentication.php");

include("head.php");
?>
<body>
	<div class="load-screen">
			<div class="tm-loader"><div class="spinner"></div></div>
	</div>

	<div class="project-container">

	<?php
		include "nav.php";

		
	?>
		<div class="content">



			<div class="chunk">
				<h1 class="portHead1">Kasa<br><div class="divider-line"></div></h3>
				<h4 class="portTag"><span>UX</span> <span>2016</span></h4>
				<h2 class="portHead2">Automate daily routines<br>for smart home users  </h2>
				
				<p>Kasa is a smart home ecosystem developed by TP-Link Research America, where I interned during summer 2016. Kasa ecosystem includes an app that provides integrated control as well as a multitude of smart home devices. Kasa smart plug is the best-selling and highest rated product on Amazon smart plug category, and the Kasa app has also maintained a 4.5+ rating on both Google Play store and Apple appstore. 
				</p>
			</div>
		</div>
		<div class="content"  style="background-color: #EBF1F3;">
			<div class="chunk">
				<h3 class="portHead3">Understanding the current market of <br>home automation</h3><br>
				<p>In order to get a thorough understanding of current home automation apps, I looked into some major smart-home competitors as well as some user feedback to get a good sense of where to start.</p>
				<h4 class="portHead4">What did our competitors do?</h4>
				<p>All of our competitors have some forms of automation. However, the approach is very different. IFTTT chose a very simplistic and direct approach by only allowing users to choose from pre-made automation rules. At the same time, home app (by Matthias Hochgatter) really brings out the full potential of automation rules and allows a very large range of automation possibilities.</p>
				<img id="competitive" src="img/kasa/competitive.png"/><br>
			</div>
			<div class="chunk"  id="pin1">
				<h4 class="portHead4">Looking from the user's perspectives</h4>
				<p>The user review from Apple appstore as well as the Google playstore gave me a lot of insight into what the users wanted for the application. I used the saturate and group method by Stanford d-School to generate some insights for guiding our design.</p>
				<img id="quotes" src="img/kasa/quotes.png"/><br>
				<img id="pain" src="img/kasa/pain.png"/>
			</div>
		</div>
		<div class="content">
			<div class="chunk">
				<h3 class="portHead3">Untangling the logic behind <br> automation rules</h3>
				<br>
				<h4 class="portHead4">The core components of automation rules</h4>
				<p>Based on research previously done by TP-LINK as well as my own research above, I summarized and distilled the information from the research and came up with the core components of a automation rule: trigger, condition, and action. </p>
				<br>
				<img id="rule" src="img/kasa/rule.png"/><br><br>
				<h4 class="portHead4">Differentiating triggers and conditions</h4>
				<p>It is important to distinguish triggers from conditions in order to construct automation rules that are unambiguous and clear to both the user and the machine. Trigger is an event at a specific point in time that causes the automation rule to work. Condition is a situation that lasts for a certain period and can be tested true or false to stop or continue this rule towards the eventual action. The biggest difference is that condition by itself cannot cause any action to happen: turn on the light when I am "at" home makes no sense in a strict sense because being at home can be for 10 minutes or 3 hours, yet turning on the light is an action that happens at a specific point in time. Hence it is not clear at which point during this 10 minutes or 3 hours such action should happen. Based on research and discussions with the design team, I decided to separate triggers and conditions in the design.</p>
				<br><br>

			</div>
		</div>
		<div class="content" style="background-color: #efefef;">
			<div class="chunk">
				<h3 class="portHead3">Designing a usable interaction flow</h3><br>
				<h4 class="portHead4">Wireframe and usability test</h4>
				<p>
				After the first iteration of wireframe, I conducted a usability test with 6 users. The usability test provided me with good insights into my first iteration of design: I wrongly strived for minimal steps of interaction in order to create a frustration-less experience. Consequently, too much information was squeezed into only a few pages and the overload of information and available actions confused the user. Moreover, I found that user prefer a "action -> trigger -> condition" process. I also found that the automation feature is something that the user would not frequently need to configure: once it's set up, it does not need intervention until the user need to change it or create a new rule. 
				<img id="notes" src="img/kasa/notes.jpg"/>
				<h4 class="portHead4">Refining and prototyping</h4>
				<p>Based on the result from the usability test, I refined my design and instead putting the focus on making the process of setting up a rule intuitive with thorough guidance.</p>
				<img id="wireframe" src="img/kasa/wireframe.png"/>
				</p>
			</div>
		</div>
		<div class="content">
				<div class="chunk">
					<h3 class="portHead3">Bringing out the details</h3><br><br>
					<p>After wireframing, I came up with some high-fidelity prototypes. I used natural language and fill-in-the-blank style instructions in order to give users ideas of what they are setting up and what the function would actually be like in words that they understand. Because the process is rather confusing and requires logic, I made it very easy for users to go back and correct any mistakes they made.</p>
				</div>
				
				<video class="anim" width="700" autoplay loop>
					<source src="img/kasa/anim1.mp4" type="video/mp4">
						Your browser does not support the video tag.
				</video>
				<div class="chunk">
					<p>I also made sure whatever they have already set up is always visible to them in order to help them diagnose any errors as well as progressing further in the steps.</p>
				</div>
				
				<video class="anim" width="700" autoplay loop>
					<source src="img/kasa/anim2.mp4" type="video/mp4">
						Your browser does not support the video tag.
				</video>
				
				<div class="chunk">
					<p>Although I aim to provide maximum flexibility, for some more nuissance details, I chose to only provide users with visible increments of options: for instance, setting up the brightness of a lightbulb at 0%, 25%, 50%, 75% and 100%. This provides convenience to both the user and the programmer.</p>
				</div>
				
				<video class="anim" width="700" autoplay loop>
					<source src="img/kasa/anim3.mp4" type="video/mp4">
						Your browser does not support the video tag.
				</video>
				<br><br>
			
		</div>
	</div>




	<?php
		include('foot.php');
	 ?>
</body>
</html>

<?php
