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
			
		<!-- <div class="content" style="background-color: #555; background-image: url('img/mend/title.jpg'); background-size: cover; background-position: center;">
		

			<div class="caption">
			</div>

			<div class="chunk">
				<h1 class="portHead1 aaa">Mend<br><div class="divider-line"></div></h3>
				<h4 class="portTag"><span>UX</span> <span>UI</span> <span>2016</span></h4>
				<h2 class="portHead2 white">Make psychotherapy more efficient</h2>
				<br><br>
				<p style="color:white; width: 55rem; margin: auto;">Mend provides daily logs for the patient to record their mood, diary and a variety of measures to share with the therapist, so that the therapist can provide a more tailored treatment.
				</p>
				<br>
			</div>
		</div> -->
		<div class="content bg-light-gray" style="padding-top: 0;">
			<img src="img/mend/title.jpg" style="width: 100vw;"/>
			<div class="chunk">
				
				<h3 class="portHead3">Inefficiency in the 98% of time outside therapy</h3>
				<img class="chart" src="img/mend/chart1.png"/>
				<p>In a typical psychological treatment, clients spend 2% of time with the therapist and 98% of time on their own, it is extremely hard for the therapist to effectively monitor the client's real-time treatment progress outside the therapy. My interview with 6 therapists and 10 clients confirmed my observation.
				</p>
				<img class="chart" src="img/mend/quote.png" style="width: 100rem; margin-left: -15rem;"/>
			</div>
		</div>	
		<div class="content">
			<div style="width: 105rem; margin: auto;"><br><br>
				<p style="width: 37rem; display: inline-block; vertical-align: middle; padding-right: 2rem;">
					<span style="display: block; font-size: 2.5rem; font-family: Martel Sans; font-weight: 800; letter-spacing: -0.15rem;">What if...we make the time outside of the therapy useful?</span> <br>The client can update the therapist daily and the therapist can efficiently use the information to adjust the therapy accordingly.</p>
				<img class="right" src="img/mend/storyboard.png"/><br><br><br>
			</div>
		</div>
		<div class="content" style="background-color: #efefef;">
			<div class="chunk">
				<h3 class="portHead3">And design an app that <br>works for both therapist and client</h3><br>
				<p>The therapist's role is more complicated compared to the client. I summarized their main tasks and designed the essential functions. 
				<img id="info_arch" src="img/mend/info_arch.png"/></p>
				
				<p style="padding-top: 90rem; padding-bottom: 10rem;">For the client, I only include essential functions so they are not overwhelmed. Clients can keep track of their homework, look at their progress report and have access to emergency information.</p>
			</div>
		</div>
		<div class="content" style="background-color: #75afef; padding-bottom: 0; margin-bottom: 0;">
				<img src="img/mend/middle.png" style="display: block;width: 105rem; margin: auto;"/>
		</div>
		<div class="content">
			<div style="width: 115rem; margin: auto;"><br><br>
				<p class="left-paragraph">
					<img class="therapist-thumbnail" src="img/mend/therapist.png"/>
					Now Kelly can manage her clients easily. She can assign them homework, check whether they have completed their homework and set up automatic reminders for her clients to complete their homework on time.</p>
					<video class="right" width="600" autoplay loop style="padding-left: 5rem;">
						<source src="img/mend/client.mp4" type="video/mp4">
							Your browser does not support the video tag.
					</video><br><br><br><hr>
			</div>
			
			<div style="width: 115rem; margin: auto;"><br><br>
				<p class="left-paragraph">
					<img class="therapist-thumbnail" src="img/mend/therapist.png"/>
					Kelly can also easily add new assessments to her library, or if she cannot find any, build a new one. Mend also uses a reward system to incentivize the user: if you create a new measure and make it public, then you can use one for free.</p>
					<video class="right" width="600" autoplay loop style="padding-left: 5rem;">
						<source src="img/mend/library.mp4" type="video/mp4">
							Your browser does not support the video tag.
					</video><br><br><br><hr>
			</div>
			
			<div style="width: 115rem; margin: auto;"><br><br>
				<p class="left-paragraph">
					<img class="therapist-thumbnail" src="img/mend/therapist.png"/>
					Kelly can also look at reports of her clients in real time whenever she wants to check in on a client. Mend automatically flags dangerous signals in assessments as well as dangerous keywords in text-entry assessments so Kelly can quickly know where to pay attention first.</p>
					<img class="right" src="img/mend/report.png" style="padding-left: 5rem;"/><br><br><br>
			</div>
		</div>
		
		<div class="content" style="background-color: #efefef;"><br>
			<h3 class="portHead3">The fine details matter</h3>
			<div class="chunk">
				<h4 class="portHead4">Make content location consistent</h4>
				<p>Our users are mainly therapists. Based on my interview, most of the therapist are still stuck in the pen-and-paper era. Therefore, it is important to make navigation within the app easy. I designed the content to follow some application layouts that they are familiar with (such as word's top function bars), so they never have to worry about where to find certain content.</p>
			</div>
			<img class="structure" src="img/mend/structure.png"/>
			<div class="chunk">
				<h4 class="portHead4">Make important information readily available</h4>
				<p>The client page displays the most important information that defines the usefulness of Mend at first glance: whether the user has been sticking to the treatment. It organizes information in the most intuitive manner for the therapist.</p>
			</div>
			<img class="structure" src="img/mend/structure2.png"/>
			<img class="structure" src="img/mend/structure3.png"/>
			<div class="chunk">
				<h4 class="portHead4">Considering what's special about the user population</h4>
				<p>Homework in psychotherapy are very standardized as most of the measures are validated through countless studies and cannot be modified. Therefore, creating a library that consists the pre-made homework can save a lot of the time for the therapist. When finding homework, as therapists know their measures very well, and there are rarely measures with the same name, it is only necessary to display to them essential information to identify the measures that they need.</p>
				<img class="structure" src="img/mend/structure4.png"/>
			</div>
			
		</div>
		
			


	</div>




	<?php
		include('foot.php');
	 ?>
</body>
</html>

<?php
