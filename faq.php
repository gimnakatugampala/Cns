<?php include_once('inc/functions.php'); ?>
<?php include_once('inc/top-header.php'); ?><!--Top- header bar with all the tittle-->
    <link rel="stylesheet" href="css/style.css">
    <title> Frequently Asked Questions | ClicknStudy.lk</title>
      <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-153095308-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-153095308-1');
</script>
</head>
<body>
	  <!-- Designing the header of the page -->

	 	<?php include_once('inc/header.php'); ?>

	 	<section>
	     	<div class="row">
	     		<div class="col-md-3" style="background-color: #dedef8;">
	     			<!--The gray blank side nav bar-->

	     	</div>

	     	<!--The contact form heading -->

	     	<div class="col-md-7" style="margin-top: 20px;">
	     		<div class="container">
	     			<div class="jumbotron alert-success">
	     				<h1 class="text-center "><b>Frequently Asked Questions ? </b></h1>
	     			</div><!--jumbotron-->

	     			<!--Designing the set of questions-->
	     			<?php faq_list("What is ClicknStudy.lk ?","ClicknStudy.lk or simply cns.lk is a learning website for Sri Lankan Students .Which includes all of the lessons /notes that For the Local Syllabus.");

	     				  faq_list("Where are the rest of the Subjects ?","One subject of the stream you choose is on one page and when you reach all the way to the bottom of the page you will see the numbering 1,2,3 click them to refer the next subjects."); //the function for the panel 

	     				  faq_list("Is there any sinhala medium Tutorials ?","We will upload the sinhala medium tutorials very soon."); //  go to the functions to get info

	     				   faq_list("Is Signin to ClicknStudy.lk Safe ?","Yes, no one can see your profile.");//go to the function and get info

	     			 ?>


	     			 <!--seperating the button with the panel list-->
	     			 <div style="margin-top: 20px;"></div>
	     			 <div class="container text-center">
	     			 	<button class="btn-lg"><a href="contact.php">Still Got Questions</a></button>
	     			 </div>

	     			

	     	

	     			<div style="margin-bottom: 50px;"></div>
	     			
	     		</div><!--container-->
	     	</div><!-- col-md-7 -->


	     				

	     			

		 </div><!--row-->

	     </section>

	     <?php include_once('inc/footer.php'); ?>
