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
			<div class="chunk">
				<h3 class="portHead3">Designing a usable interface</h3><Br>
				<h4 class="portHead4">First iteration and usability test</h4>
				<p>
				In the first iteration of design, I made two mistakes that were later revealed in the usability test. I wrongly strived for minimal steps of interaction in order to create a frustration-less experience. Consequently, too much information was squeezed into only a few pages and the overload of information and available actions confused the user. The other mistake was to combine triggers and conditions together as "if" statements, allowing the user to set multiple triggers. It resulted in something like "if my light is on, and if I am home, turn on the coffee machine". However, this caused lack of clarity: does it mean "if my light is on, and I came home", or "if my lights are turned on when I am at home". <br>
				<img id="notes" src="img/kasa/notes.jpg"/><br></p>
			</div>
			<div class="chunk">
				<h4 class="portHead4">Usability test proved me wrong</h4>
				<p>After completing the wireframe, I conducted a usability test with 6 users, whose result proved my previous emphasis wrong. I found that<br><br>
				1) most users indeed feel the need of using this feature, but<br>
				2) cannot think of a very complicated case when asked about how they would use this feature, and<br>
				3) most users do not understand the meaning of the industry-specific words without explanation.<br>

				</p>
			</div>
			<div class="chunk">
				<h4 class="portHead4">Second iteration: Logical and intuitive</h4>
				<p>I revisited the persona and the use case for this function. I realize the mistake I made: this is a function that a user would only use once to set up. Once set up, it will keep working in the background. The user will at some point forget about it unless they want to set up another new rule. Therefore, using a "simple" set up procedure without explanation or guide-through might make the process very confusing: the user only looks at the set up interface and the language every, let's say, three months. By the time the user has to do it again, he might already forgot what should be done.<br><br>
				After realizing my mistake and the opportunity, I changed the focus of my second iteration to emphasize the logic and intuitivity of the procedure. And the application by Vivint gave me inspiration of using natural language to guide the user through the somewhat convoluted setup process. 
				</p>

			</div>


		</div>
	</div>




	<?php
		include('foot.php');
	 ?>
</body>
</html>

<?php
