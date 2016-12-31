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
		<div class="content" style="padding-top: 0;">
			<img src="img/mira/title.png" style="width: 100vw;"/>
			<div class="chunk">
				<h3 class="portHead3">Mira, your personal skincare expert</h3><br>
				<iframe style="display: block; padding: 3rem 0; margin-left: -2rem;" width="672" height="378" src="https://www.youtube.com/embed/FKEjRJH6RIs" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>	
		<div class="content" style="background-color: #edf5fc;">
			<div class="chunk">
				<h3 class="portHead3">Skincare can be hard</h3><br>
				<img src="img/mira/painpoints.png" width="1000px" style="display: block; margin-left: -15rem;"/>
				<br><p style="text-align: center;">We know skincare with traditional methods can be hard, so we wanted to design a product that can naturally integrate into our user's daily life and provide them with the feedback they need.</p>
			</div>
		</div>
		<div class="content" >
			<div style="width: 110rem; margin: auto;"><br><br>
				<p style="width: 37rem; display: inline-block; vertical-align: middle; padding-right: 7rem;">
					<span style="display: block; font-size: 2.5rem; font-family: Martel Sans; font-weight: 800; letter-spacing: -0.15rem;">So how do users take care of their skin now?</span> <br>We conducted diary studies in order to understand how the users currently take care of their skin.</p>
				<img class="right" src="img/mira/diary.jpg" style="margin: 0 auto"/><br><br><br>
			</div>
		</div>
		<div class="content bg-light-gray">
			<div style="width: 110rem; margin: auto;"><br><br>
				<img class="right" src="img/mira/enactment.jpg" style="margin: 0 auto"/>
				<p style="width: 37rem; display: inline-block; vertical-align: middle; padding-left: 7rem;">
					<span style="display: block; font-size: 2.5rem; font-family: Martel Sans; font-weight: 800; letter-spacing: -0.15rem;">And how can we integrate mira into the user's life?</span> <br>We used user enactments to see how users feel about our design.</p>
				<br><br><br>
			</div>
		</div>
		
		<div class="content" style="padding: 0; margin: 0;">
				<img src="img/mira/middle.png" style="width: 70rem; display: block; margin: auto; padding: 5rem 0;"/>
				<iframe style="display: block; margin: auto;" width="672" height="378" src="https://www.youtube.com/embed/r8vaixOmczM" frameborder="0" allowfullscreen></iframe>
				<br><br><br>
		</div>

		
		<div class="content" style="background-image: url(img/mira/features.png); height: 65rem; background-repeat: no-repeat; background-size: cover; background-position: center;"><br>
			
		</div>
		<div class="content" style="background-color: white;">
			<div class="chunk">
				<br>
				<h3 class="portHead3">Hardware concept</h3>
				<img src="img/mira/design.jpg" style="width: 70rem; display: block; margin: auto; padding-top: 2rem;"/>
				<br>
				
			</div>
		</div>
		
			


	</div>




	<?php
		include('foot.php');
	 ?>
</body>
</html>

<?php
