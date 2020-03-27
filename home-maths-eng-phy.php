<?php include_once('inc/functions.php'); ?>
<?php include_once('inc/top-header.php'); ?>
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
			<div class="row">
				<!--The About user column on the nav bar-->
			<?php component_about(); ?>

			<!--The name of the subject and one content-->
		  <?php component_head("Physics","img/content_images/Mechanics/units_dimensions.jpg","Units and Dimensions","Mechanics","Unit 1","subj-files/physics/und.html"); ?>

			<?php component("img/content_images/Mechanics/Leniar motion.jpg","Linear Motion and Projectile","Mechanics","Unit 2","subj-files/physics/linear-motion.html");

				  component("img/content_images/Mechanics/Equilibrium.jpg","Equillibrium of Forces","Mechanics","Unit 3","subj-files/physics/equillibrium-forces.html");

				  component("img/content_images/Mechanics/Center of Gravity.jpg","Center of Gravity","Mechanics","Unit 4","subj-files/physics/center-of-gravity.html");


				 ?>

		
		</div><!-- row of the about function which is included /row-->
	         
	     </nav><!--Navigation bar of the side bar-->

	     <section><!--section 1 of the 2nd row-->
	     	
	     	<!-- The nav bar of all the attributes with all the panel  -->
	     		<div class="row">
		     	<?php include_once('inc/side-nav.php'); //this is the navgation side bar?>

		     <!--The form content of 2nd row starts from here-->

		    <?php component("img/content_images/Mechanics/Newtons law.jpg","Newton's Law & Momentum","Mechanics","Unit 5","subj-files/physics/newton-law.html");

		    	  component("img/content_images/Mechanics/Friction.jpg","Frictional Force","Mechanics","Unit 6","subj-files/physics/friction.html");

		    	  component("img/content_images/Mechanics/work And Energy.jpg","Work,Power and Energy","Mechanics","Unit 7","subj-files/physics/work.html");

		    	  component("img/content_images/Mechanics/Rotational Motion.jpg"," Rotational Motion","Mechanics","Unit 8","subj-files/physics/rotational-motion.html");

		    	  ?>

		
	         </div><!-- row -->
	     </section>


	     <section><!--section 2 of the 3rd row-->
	     	<div class="row">
	     	<?php component_blank(); ?>

			<?php component("img/content_images/Mechanics/Circular Motion.jpg","Circular Motion","Mechanics","Unit 9","subj-files/physics/circular-motion.html");

				  component("img/content_images/Mechanics/Hydrostatics.jpg","Hydrostatics of Fuild","Mechanics","Unit 10","subj-files/physics/hydrosatatics.html");

				  component("img/content_images/Mechanics/Hydrodynamics.jpg","Hydrodynamics ","Mechanics","Unit 11","subj-files/physics/hydrodynamics.html");

				  component("img/content_images/Waves/simple harmonic.jpg","Simple Harmonic ","Waves","Unit 1","subj-files/physics/simple-harmonic.html");

				 ?>


		 </div><!--row-->

	     </section>

	     <section>
	     	<div class="row">
	     		<?php component_blank(); ?>
	     		<?php component("img/content_images/Waves/propertise of waves.jpg","Propertise of Waves ","Waves","Unit 2","subj-files/physics/propertise-waves.html");

	     			  component("img/content_images/Waves/Transeverse waves.jpg","Transverse Waves ","Waves","Unit 3","subj-files/physics/transverse-waves.html");

	     			  component("img/content_images/Waves/Velocity of sound.jpg","Velocity of Sound","Waves","Unit 4","subj-files/physics/velocity-sound.html");

	     			  component("img/content_images/Waves/Longitudinal waves.jpg","Longitudinal Waves ","Waves","Unit 5","subj-files/physics/longitudal-waves.html");
	     				 ?>
	     	</div>


	     </section>

	     <section>
	     	
	     	<div class="row">
	     		<?php component_blank(); ?>
	     		<?php component("img/content_images/Waves/Doppler effect.jpg","Doppler's  Effect ","Waves","Unit 6","subj-files/physics/doppler-effect.html");

	     			  component("img/content_images/Waves/Intensity of sound.jpg","Intensity of Sound ","Waves","Unit 7","subj-files/physics/intensity-sound.html");

	     			  component("img/content_images/Waves/Electromagnetic waves.jpg","Electromagnetic Waves","Waves","Unit 8","subj-files/physics/electro-waves.html");

	     			  component("img/content_images/Waves/Reflection of light.jpg","Refraction of Light","Waves","Unit 9","subj-files/physics/refraction-light.html");
	     				 ?>
	     	</div>

	     </section>

	      <section>
	     	
	     	<div class="row">
	     		<?php component_blank(); ?>
	     		<?php component("img/content_images/Waves/Refraction of Prisms.jpg","Refraction of Prisms","Waves","Unit 10","subj-files/physics/refraction-prisms.html");

	     			  component("img/content_images/Waves/Refraction of lenses.jpg","Refraction of Lenses","Waves","Unit 11","subj-files/physics/refraction-lenses.html");

	     			  component("img/content_images/Waves/Defects of the eye.jpg","Defects of Vision ","Waves","Unit 12","subj-files/physics/defection-o-vision.html");

	     			  component("img/content_images/Waves/optical instruments.jpg","Optical Instruments","Waves","Unit 13","subj-files/physics/optical-instruments.html");
	     				 ?>
	     	</div>

	     </section>

	      <section>
	     	
	     	<div class="row">
	     		<?php component_blank(); ?>
	     		<?php component("img/content_images/heat/Thermometry.jpg","Thermometry of Heat","Heat","Unit 1","subj-files/physics/thermometry-o-heat.html");

	     			  component("img/content_images/heat/Solid Expansion.jpg","Exapansion of Solid","Heat","Unit 2","subj-files/physics/expansion-o-solid.html");

	     			  component("img/content_images/heat/Expansion of liquids.jpg","Expansion of Liquids","Heat","Unit 3","subj-files/physics/expansion-o-liquids.html");

	     			  component("img/content_images/heat/Expansion of gas.jpg","Expansion of Gases","Heat","Unit 4","subj-files/physics/expansion-o-gases.html");
	     				 ?>
	     	</div>

	     </section>


	      <section>
	     	
	     	<div class="row">
	     		<?php component_blank(); ?>
	     		<?php component("img/content_images/heat/Calorimeter.jpg","Calorimetry of Heat","Heat","Unit 5","subj-files/physics/calorimetery-o-heat.html");

	     			  component("img/content_images/heat/Thermodynamics.jpg","Thermodynamics","Heat","Unit 6","subj-files/physics/thermodynamics.html");

	     			  component("img/content_images/heat/Hydrometry.jpg","Hydrometry of Heat","Heat","Unit 7","subj-files/physics/hydrometery.html");

	     			  component("img/content_images/heat/conductivity.jpg","Conductivity of Heat","Heat","Unit 8","subj-files/physics/conductivity-o-heat.html");
	     				 ?>
	     	</div>

	     </section>

	      <section>
	     	
	     	<div class="row">
	     		<?php component_blank(); ?>
	     		<?php component("img/content_images/heat/convection.jpg","Convection of Heat","Heat","Unit 9","subj-files/physics/convection.html");

	     			  component("img/content_images/Fields/Gravitational Fields.jpg","Gravitational Feilds","Feilds","Unit 1","subj-files/physics/gravitational-field.html");

	     			  component("img/content_images/Fields/Electrostatic Filds.jpg","Electrostatic Fields","Feilds","Unit 2","subj-files/physics/electrostatic-field.html");

	     			  component("img/content_images/Fields/Magnetic Fields.jpg","Magnetic Fields","Fields","Unit 3","subj-files/physics/magnetic-field.html");
	     				 ?>
	     	</div>

	     </section>

	      <section>
	     	
	     	<div class="row">
	     		<?php component_blank(); ?>
	     		<?php component("img/content_images/Elecrticity/Electricity.jpg","Current Electricity","Electricity","Unit 1","subj-files/physics/current-electricity.html");

	     			  component("img/content_images/Elecrticity/Electricity.jpg","Energy & Power D.C","Electricity","Unit 2","subj-files/physics/electricity-2.html");

	     			  component("img/content_images/Elecrticity/Electricity.jpg","Electro-Motive-Force","Electricity","Unit 3","subj-files/physics/electricity-3.html");

	     			  component("img/content_images/Elecrticity/Electricity.jpg","Kirchoff's Law(Rule)","Electricity","Unit 4","subj-files/physics/electricity-4.html");
	     				 ?>
	     	</div>

	     </section>

	      <section>
	     	
	     	<div class="row">
	     		<?php component_blank(); ?>
	     		<?php component("img/content_images/Elecrticity/Electricity.jpg"," Measuring Instrument","Electricity","Unit 5","subj-files/physics/electricity-5.html");

	     			  component("img/content_images/Elecrticity/Electricity.jpg","ElectroMagnetic Induction","Electricity","Unit 6","subj-files/physics/electricity-6.html");

	     			  component("img/content_images/Properties of matter/Elasticity.jpg","Elasticity","Propertise of Matter","Unit 1","subj-files/physics/elasticity.html");

	     			  component("img/content_images/Properties of matter/Surfacetension.jpg","Surface Tension","Prop of Matter","Unit 2","subj-files/physics/surface-tension.html");
	     				 ?>
	     	</div>

	     </section>

	      <section>
	     	
	     	<div class="row">
	     		<?php component_blank(); ?>
	     		<?php component("img/content_images/Properties of matter/Viscosity.jpg","Viscosity","Propertise of Matter","Unit 3","subj-files/physics/viscosity.html");
	     			  component("img/content_images/Matter and radiation/Radiation.jpg","Radiation","Matter & Radiation","Unit 1","subj-files/physics/radiation.html");

	     			  // component("img/tittle-icon.jpg","Viscosity","Propertise Of Matter","Unit 2","give.php");

	     			  // component("img/tittle-icon.jpg","Surface Tension","Prope. Of Matter","Unit 3","give.php");
	     				 ?>
	     	</div>

	     </section>






	     <main>
	     	<?php component_pagination("home-bio-eng-phy.php","home-bio-eng-chem.php","home-bio-eng-bio.php","home-maths-eng-phy.php","home-maths-eng-phy.php","home-maths-eng-cmaths.php");?>

	     </main>
	     	
	     	
		

	<?php include_once('inc/footer.php'); ?>



    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>
