<?php include_once('inc/functions.php'); ?>
<?php include_once('inc/top-header.php'); ?>
    
    <link rel="stylesheet" href="css/style.css">
    <title>Biological Science | English Medium | ClicknStudy.lk</title>
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
	  <!-- Designing the header of the maths page -->

	 	<?php include_once('inc/header.php'); ?>

	  <!-- The side nav bar  all the nav links-->

		<nav>
		<!-- The About Row with the 4 contents -->	
			<div class="row">
				<!--The About user column on the nav bar-->
			<?php component_about(); ?>

			<!--The name of the subject and one content-->

			<!--The coming soon bar-->
 	
		  

				 

		
		</div><!-- row of the about function which is included /row-->
	         
	     </nav><!--Navigation bar of the side bar-->

	     <!--The coming soon bar-->
 	<?php include_once('inc/soonpanel.php'); ?>

	     <section><!--section 1 of the 2nd row-->
	     	
	     	<!-- The nav bar of all the attributes with all the panel  -->
	     		<div class="row">
		     	<?php include_once('inc/side-nav.php'); //this is the navgation side bar?>

		     <!--The form content of 2nd row starts from here-->

		    <!--Contents should be here-->

		
	         </div><!-- row -->
	     </section>


	     <section><!--section 2 of the 3rd row-->
	     	<div class="row">
	     	<?php component_blank(); ?>

			<!--Contents should be here-->

		 </div><!--row-->

	     </section>

	     <section>
	     	<div class="row">
	     		<?php component_blank(); ?>
	     		<!--Contents should be here-->
	     	</div>

	     </section>

	     	

		   <?php component_pagination("home-bio-eng-phy.php","home-bio-eng-chem.php","home-bio-eng-bio.php","home-maths-eng-phy.php","home-maths-eng-phy.php","home-maths-eng-cmaths.php");?>
		  	
	      

	     </main>

	     <!--Pagination will be here-->

		

	<?php include_once('inc/footer.php'); ?>



    <script type="text/javascript" src="js/bootstrap.min.js"></script>

</body>
</html>