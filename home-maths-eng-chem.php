<?php include_once('inc/functions.php'); ?>
<?php include_once('inc/top-header.php'); ?>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Physical Science | English Medium | ClicknStudy.lk</title>
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
	  <!-- Designing the header of the  page -->

	 	<?php include_once('inc/header.php'); ?>

	  <!-- The side nav bar  all the nav links-->

	 <nav>
		<!-- The About Row with the 4 contents -->	
			<div class="row"><!--The row  div should be added before the about content and the rest of 						the contents are added -->

				<!--The About user column on the nav bar-->
			<?php component_about(); ?>

			<!--The name of the subject and one content-->
		  <?php component_head("Chemistry","img/content_images/chemistry/atomix structure.jpg","Atomic Structure P.1","General Chemistry","Unit 1","subj-files/chemistry/atomic-structure-p1.html"); ?>

			<?php component("img/content_images/chemistry/atomix structure.jpg","Atomic Structure P.2","General Chemistry","Unit 1","subj-files/chemistry/atomic-structure-p2.html");

				  component("img/content_images/chemistry/bonding & structure.jpg","Bonding & Structure","General Chemistry","Unit 2","subj-files/chemistry/bonding-structure.html");

				  component("img/content_images/chemistry/calculations.jpg","Chemical Calculations","Physical Chemistry","Unit 3","give.php");


				 ?>

		
		</div><!-- row of the about function which is included /row-->
	         
	     </nav><!--Navigation bar of the side bar-->

	     <section><!--section 1 of the 2nd row-->
	     	
	     	<!-- The nav bar of all the attributes with all the panel  -->
	     		<div class="row">
		     	<?php include_once('inc/side-nav.php'); //this is the navgation side bar?>

		     <!--The form content of 2nd row starts from here-->

		    <?php component("img/content_images/chemistry/Gas laws.jpg","Gas Laws","Physical Chemistry","Unit 4","subj-files/chemistry/gas-law.html");

		    	  component("img/content_images/chemistry/energertics.jpg","Energertics","Physical Chemistry","Unit 5","subj-files/chemistry/energertics.html");

		    	  component("img/content_images/chemistry/s block.jpg","S-Block ","Inorganic Chemistry","Unit 6","subj-files/chemistry/s-block.html");
		    	  component("img/content_images/chemistry/P block.jpg","P-Block","Inorganic Chemistry","Unit 6","subj-files/chemistry/p-block.html");

		    	  ?>

		
	         </div><!-- row -->
	     </section>


	     <section><!--section 2 of the 3rd row-->
	     	<div class="row">
	     	<?php component_blank(); ?>

			<?php //component("img/content_images/chemistry/D block.jpg","D-Block","Inorganic Chemistry","Unit 6","subj-files/chemistry/d-block");
				  // component("img/tittle-icon.jpg","Organic ","Organic Chemistry","Unit 7","give.php");
				  // component("img/tittle-icon.jpg","Industrial","Indust. & Envir. Chemistry","Unit 8","give.php");
				  // component("img/tittle-icon.jpg","Environmental","Indust. & Envir. Chemistry","Unit 8","give.php");

				 ?>


		 </div><!--row-->

	     </section>

	     <section>
	     	<div class="row">
	     		<?php component_blank(); ?>
	     		<?php //component("img/tittle-icon.jpg","Equillibrium","Physical Chemistry","Unit 9","give.php");
	     			  // component("img/tittle-icon.jpg","Chemical Kinetics","Physical Chem.","Unit 10","give.php");
	     				 ?>
	     	</div>

	     </section>

	     <main>
	     	<!--The pagination of the web page-->
			<?php component_pagination("home-bio-eng-phy.php","home-bio-eng-chem.php","home-bio-eng-bio.php","home-maths-eng-phy.php","home-maths-eng-phy.php","home-maths-eng-cmaths.php");?>

	     </main>
	     	
		

	<?php include_once('inc/footer.php'); ?>



    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>
