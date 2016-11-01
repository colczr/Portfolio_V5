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
		<div class="content" style="background-color: #555;">
			<!-- <div class="caption-bg-gray">
			</div> -->
				<!-- <div class="caption-bg" style="background-image: url(img/bg4.png);">

				</div> -->

			<div class="caption">
			</div>

			<div class="chunk">
				<h1 class="portHead1 aaa">Mend<br><div class="divider-line"></div></h3>
				<h4 class="portTag"><span>UX</span> <span>UI</span> <span>2016</span></h4>
				<h2 class="portHead2 white">Help psychotherapists <br>understand their patients</h2>

				<p class="aaa">Mend is a health app that aims to improve communication between patients with mental conditions and their therapist and health provider. Mend provides daily logs for the patient to record their mood, diary and a variety of measures to share with the therapist. The therapist can customize the content for the patient and utilize the data collected from the patient to better customize the therapy as well as discovering problems in an efficient manner.
				</p>
			</div>
		</div>
		<div class="content bg-light-gray">
			<div class="chunk">
				<h3 class="portHead3">Understanding the industry as an insider</h3><br>
				<p>I have a B.S. in psychology and worked 3 years at a psychology clinic as a project coordinator and clinical data coordinator. I had a lot of experience observing therapy session and client-therapist interaction. <br><br>
				As individual therapy sessions are typically 1 hour each week, it is extremely hard for the therapist to effectively monitor the client's real-tiem treatment progress outside the therapy throughout the week as well as make use of the assessment materials used without first collecting and analyzing them. My interview with 6 therapists and 10 clients confirmed my previous observation.<img id="pie_chart" src="img/mend/pie_chart.png"/></p>
			</div>
		</div>	
		<div class="content">
			<div class="chunk">
				<h3 class="portHead3">Choosing and Organizing the right content</h3><br>
				<p>Thperapists and clients are not typically a tech-savvy population. Therefore, it is important to emphasize the logical and intuitive organization of the content.The therapist's role is more complicated compared to the client. I summarized and divided their main tasks into client management - managing clients and their homework; homework management - managing existing and new homework in their library; report - keeping track of treatment progress; emergency center - monitoring clients and receive notification if their condition becomes unstable; and settings. 
				<img id="info_arch" src="img/mend/info_arch.png"/></p>
				<p style="padding-top: 90rem;">Compared to the therapist, the client's role is rather simple. Therefore, I made sure to only include esssential functions so they are not overwhelmed. Clients can keep track of their homework, look at their progress report and have access to emergency information.</p>
			</div>
		</div>
		<div class="content">
			<div class="chunk">
				<h3 class="portHead3">Choosing and Organizing the right content</h3><br>
				<p>something</p>
			</div>
		</div>
			


		</div>
	</div>




	<?php
		include('foot.php');
	 ?>
</body>
</html>

<?php
