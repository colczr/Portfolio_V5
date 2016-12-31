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
			
		<!-- <div class="content" style="background-color: #555; background-image: url('img/mira/title.jpg'); background-size: cover; background-position: center;">
		

			<div class="caption">
			</div>

			<div class="chunk">
				<h1 class="portHead1 aaa">mira<br><div class="divider-line"></div></h3>
				<h4 class="portTag"><span>UX</span> <span>UI</span> <span>2016</span></h4>
				<h2 class="portHead2 white">Make psychotherapy more efficient</h2>
				<br><br>
				<p style="color:white; width: 55rem; margin: auto;">mira provides daily logs for the patient to record their mood, diary and a variety of measures to share with the therapist, so that the therapist can provide a more tailored treatment.
				</p>
				<br>
			</div>
		</div> -->
		<div class="content bg-light-gray" style="padding-top: 0;">
			<img src="img/mira/title.png" style="width: 100vw;"/>
			<div class="chunk">
				<h3 class="portHead3">Mira, your personal skincare expert</h3><br>
				<iframe style="display: block; padding: 3rem 0; margin-left: -2rem;" width="672" height="378" src="https://www.youtube.com/embed/FKEjRJH6RIs" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>	
		<div class="content" style="background-color: #efefef;">
			<div class="chunk">
				<h3 class="portHead3">Skincare can be hard</h3><br>
				<img src="img/mira/painpoints.png" width="1000px" style="display: block; margin-left: -15rem;"/>
				<p>
				</p>
			</div>
		</div>
		<div class="content">
			<div style="width: 110rem; margin: auto;"><br><br>
				<p style="width: 37rem; display: inline-block; vertical-align: middle; padding-right: 7rem;">
					<span style="display: block; font-size: 2.5rem; font-family: Martel Sans; font-weight: 800; letter-spacing: -0.15rem;">What if...we make the time outside of the therapy useful?</span> <br>The client can update the therapist daily and the therapist can efficiently use the information to adjust the therapy accordingly.</p>
				<img id="storyboard" src="img/mira/storyboard.png"/><br><br><br>
			</div>
		</div>
		<div class="content" style="background-color: #efefef;">
			<div class="chunk">
				<h3 class="portHead3">And design an app that <br>works for both therapist and client</h3><br>
				<p>The therapist's role is more complicated compared to the client. I summarized their main tasks and designed the essential functions. 
				<img id="info_arch" src="img/mira/info_arch.png"/></p>
				
				<p style="padding-top: 95rem;">For the client, I only include esssential functions so they are not overwhelmed. Clients can keep track of their homework, look at their progress report and have access to emergency information.</p>
			</div>
		</div>
		<div class="content" style="background-color: #75afef; padding-bottom: 0; margin-bottom: 0;">
				<img src="img/mira/middle.png" style="display: block;width: 105rem; margin: auto;"/>
		</div>

		<div class="content" style="background-color: white;">
			<div class="chunk">
				<br>
				<h3 class="portHead3">Assigning Homework</h3><br><br>
				<video class="anim" width="500" autoplay loop style="left: -100rem;">
					<source src="img/mira/mira1.mp4" type="video/mp4">
						Your browser does not support the video tag.
				</video>
				<br>
				
			</div>
		</div>
		<div class="content" style="background-color: #efefef;"><br>
			<h3 class="portHead3">The fine details matter</h3>
			<div class="chunk">
				<h4 class="portHead4">Make content location consistent</h4>
				<p>Our users are mainly therapists. Based on my interview, most of the therapist are still stuck in the pen-and-paper era. Therefore, it is important to make navigation within the app easy. I designed the content to follow some application layouts that they are familiar with  (such as word's top function bars), so they never have to worry about where to find certain content.</p>
			</div>
			<img id="structure" src="img/mira/structure.png"/>
			<div class="chunk">
				<h4 class="portHead4">Make important information readily available</h4>
				<p>The client page displays the most important information that defines the usefulness of mira at first glance: whether the user has been sticking to the treatment. It organizes information in the most intuitive manner for the therapist.</p>
			</div>
			<img id="structure" src="img/mira/structure2.png"/>
			<div class="chunk">
				<h4 class="portHead4">Considering what's special about the user population</h4>
				<p>Homework in psychotherapy are very standardized as most of the measures are validated through countless studies and cannot be modified. Therefore, creating a library that consists the pre-made homeworks can save a lot of the time for the therapist. When finding homeworks, as therapists know their measures very well, and there are rarely measures with the same name, it is only necessary to display to them essential information to identify the measures that they need.</p>
			</div>
			<img id="structure" src="img/mira/structure3.png"/>
		</div>
		
			


	</div>




	<?php
		include('foot.php');
	 ?>
</body>
</html>

<?php
