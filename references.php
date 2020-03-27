<?php include_once('inc/functions.php'); ?>
<?php include_once('inc/top-header.php'); ?><!--Top- header bar with all the tittle-->
    <link rel="stylesheet" href="css/style.css">
    <title> References | ClicknStudy.lk</title>
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
	     				<h1 class="text-center "><b>References</b></h1>
	     			</div><!--jumbotron-->

	     			<!--The function of the download of the  subject reference-->

	     			<?php references(); 

	     			?>


	     			<div style="margin-bottom: 50px;"></div>
	     			
	     		</div><!--container-->
	     	</div><!-- col-md-7 -->

		 </div><!--row-->

	     </section>

	     <?php include_once('inc/footer.php'); ?>
