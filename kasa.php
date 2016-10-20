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
				
				<p>Kasa is a smart home ecosystem developed by TP-Link Research America, where I interned during summer 2016. Kasa ecosystem includes an app that provides integrated control as well as a multitude of smart home devices. The smart home aims to provide a new way of interacting with traditional home devices and automation is an essential part of providing a convenient and care-free experience for the users, to make the home actually smart.
				</p>

				<h4 class="portHead4">The "dumbness" of a smart home</h3>
				<p>The smart home is rather "dumb" in its current stage: most of the companies define a "smart" device basically as using a phone app to control some features on a traditional device. Nevertheless, some companies realized the important role of automation in a smart home: if my lightbulb turns up automatically after sunset when I'm at home, or if all the lights in my house turn off with my bedroom light after 11, then that is something smart and takes away some of my frustrations of repeating my brainless but necessary daily routines.</p>

				<h3 class="portHead3">How to improve existing <br>home automation apps</h3>
				<h4 class="portHead4">Limited use cases of current apps</h4>
				<p>I researched a few applications that offer either smart home automation or a broader sense of everyday automation. The most notable logic-based automation app might be IFTTT. However, it is fairly inflexible and allows very little customizability. Its logic also proves to be very simple and one-dimensional. A lot of the reviews from the appstore complained about IFTTT not being customizable. In terms of apps specifically for home automation, major companies brands like Samsung Smart Things or Philips Hue provide very simple automations such as a timer for devices. In a few other smaller apps that I researched, such as Home app by Matthias Hochgatterer, which is used by a lot of smart home review videos and articles, is highly praised for its home automation routines, such as turning on the heater when you leave work. Even though somewhat limited and convoluted, the users and reviews praised it for its flexibility and customizability.
				<br><br>insert comparative analysis table for apps.<br><br>
				In summary, the simple apps like Hue and Smarthings give little <i>flexibility</i>, however, even with an app like Home, although more powerful, it's complicated to set up and still does not give users that many choices.</p>

				<h3 class="portHead3">The iteration process</h3>
				<br>
				<p>The research offered me insight into how apps take on the process of creating a "routine" or a "rule" for the house.I laid out the essential structure of a smarthome "rule" summarized from my research. It contains three parts:
				<br><br>
					 when (trigger) happens, if (condition), then (action).
				<br><br>
				The triggers and conditions differ in the fact that triggers is a point in time where something happens (When I arrive home), but condition is a fact that can be tested true or false over period of time (If I am at home). Both triggers and conditions can be time-based, presence-based, or device-based.
				<br><br>
				insert table of examples for both.
				<br><br>
				I reviewed the use cases and previous user research done by TP-LINK. Our users are all fairly tech-savvy and most of them have more than one smart-home appliance at home. 15,000 out of the 18,000 people who owned a smart device from us also have an Amazon Echo at home. Based on the previous research, I summarized the information I have and created a persona:
				<br><br>
				<h4 class="portHead4">First iteration: customizable and simple</h4>
				<p>
				The persona's familiarity with smart home and his tech-savvy-ness pointed me to a design direction: it should be very customizable yet simple. I want to make the users feel they can do a lot with very few steps so they would want to actually create these routines. I produced the first iteration of wireframe according to the emphasis obtained from previous research.</p>

				<h4 class="portHead4">Usability test proved me wrong</h4>
				<p>After completing the wireframe, I conducted a usability test with 6 users, whose result proved my previous emphasis wrong. I found that<br><br>
				1) most users indeed feel the need of using this feature, but<br>
				2) cannot think of a very complicated case when asked about how they would use this feature, and<br>
				3) most users do not understand the meaning of the industry-specific words without explanation.<br>

				</p>


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
