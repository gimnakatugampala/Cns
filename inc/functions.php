<?php 
	// All functions are used to position the rows of the contents and the side nav bar

	//for this to be successful the div of row should be in the html page

	//the about component with side nav bar
	function component_about(){
		$about = "
				<div class=\"col-md-3\" style=\"background-color: #dedef8;\">
			
			     <!-- Here will be the user infomation-->

		      </div><!-- col-md-3 -->
				



				";
		echo $about;		
	}

	//The content with a heading of the subject
	function component_head($subname,$img_content,$sub_lesson,$lesson,$unit_no,$link){

		$head = "

			<!--The Head content with the heading-->
		<div class=\"col-md-2\">
			 <h3 class=\"text-success\">$subname</h3>
		        <form>
		 		 <div class=\"card shadow\">
					<div>
					<img src=\"$img_content\" width=100%; height=50%;>
					</div>
						<div class=\"card-body text-center\">
							<h4><span>$sub_lesson</span></h4>
							<h5><span>$lesson</span></h5>
							<h6><span>$unit_no</span></h6>
							<button class=\"btn btn-warning\"><a href=\"$link\" target=\"_blank\">TAKE LESSON</a></button>
					  </div><!-- card-body -->
						</div><!-- card shadow -->
		            		</div><!-- col-md-2 -->



		      	";



		echo $head;	
	}

	//The content to all the contents

	function component($img_row_content,$sub_row_lesson,$lesson_row,$unit_row_no,$link_row){
		$element = "


			<!--All  contents-->
		<div class=\"col-md-2\">
			 	<div style=\"margin-top: 20%;\"></div>
		        <form>
		 		 <div class=\"card shadow\">
					<div>
					<img src=\"$img_row_content\" width=100%; height=50%;>
					</div>
						<div class=\"card-body text-center\">
						<h4><span>$sub_row_lesson</span></h4>
						<h5><span>$lesson_row</span></h5>
						<h6><span>$unit_row_no</span></h6>
						<button class=\"btn btn-warning\"><a href=\"$link_row\" target=\"_blank\">TAKE LESSON</a></button>
					  </div><!-- card-body -->
				</div><!-- card shadow -->
		    </div><!-- col-md-2 -->


		      ";



		echo $element;
	}

	

	//this is  a blank colum on the side blank 

	function component_blank(){
		$blank = "

	     			
	     	
		<div class=\"col-md-3\" style=\"background-color: #dedef8;\">
			
			<!-- This will be a blank column-->

		</div><!-- col-md-3 -->



				";
				echo $blank;
	}


	function component_pagination($link_first,$link_second,$link_third,$link_fourth,$link_fifth,$link_sixth){
		$page = "


				<div class=\"row\">
		 <div class=\"col-md-3\" style=\"background-color: #dedef8;\">
			
			<!-- Here will be the user infomation-->

		   </div><!-- col-md-3 -->
			<div class=\"col-md-6\" >
		   	<div class=\"pagination\">
		   		<ul class=\"pagination\" style=\"margin-left: 50%;margin-top: 20px;\">
		   			<li><button class=\"btn-lg\"><a href=\"$link_first\">1</a></button></li>
		   			<li><button class=\"btn-lg\"><a href=\"$link_second\">2</a></button></li>
		   			<li><button class=\"btn-lg\"><a href=\"$link_third\">3</a></button></li>
		   			<li><button class=\"btn-lg\"><a href=\"$link_fourth\">4</a></button></li>
		   			<li><button class=\"btn-lg\"><a href=\"$link_fifth\">5</a></button></li>
		   			<li><button class=\"btn-lg\"><a href=\"$link_sixth\">6</a></button></li>
		   		</ul>
		   	</div><!-- pagination -->
		   </div><!-- col-md-6 -->
		   </div><!--row-->



				";


		echo $page;
	}

	//Displaying the panel list of FAQs

	function faq_list($main_panel,$dis_panel){
		$faq = "<div class=\"list-group\">
					  <li class=\"list-group-item active\">$main_panel</li>
					  <li class=\"list-group-item\"><p>$dis_panel</p></li>
					  
					</div><!----list-group-->


					";
		echo $faq;			

	}


	function references(){

		$ref = "

				<div class=\"container\">
	     			 <div class=\"jumbotron\">
	     			  <h1>Physics</h1>
	     			  <p>Download all the Physics references</p>
	     			  <p><a  href =\"references/references-phy.txt\"class=\"btn btn-primary btn-lg\" download>Download</a> </p> </div> <!--jumbotron-->
	     			</div><!--container-->


				";

		echo $ref;		

	}

		function is_email($email)
	{
		return(preg_match("/^[-_.[:alnum:]]+@((([[:alnum:]]|[[:alnum:]][[:alnum:]-]*[[:alnum:]])\.)+(ad|ae|aero|af|ag|ai|al|am|an|ao|aq|ar|arpa|as|at|au|aw|az|ba|bb|bd|be|bf|bg|bh|bi|biz|bj|bm|bn|bo|br|bs|bt|bv|bw|by|bz|ca|cc|cd|cf|cg|ch|ci|ck|cl|cm|cn|co|com|coop|cr|cs|cu|cv|cx|cy|cz|de|dj|dk|dm|do|dz|ec|edu|ee|eg|eh|er|es|et|eu|fi|fj|fk|fm|fo|fr|ga|gb|gd|ge|gf|gh|gi|gl|gm|gn|gov|gp|gq|gr|gs|gt|gu|gw|gy|hk|hm|hn|hr|ht|hu|id|ie|il|in|info|int|io|iq|ir|is|it|jm|jo|jp|ke|kg|kh|ki|km|kn|kp|kr|kw|ky|kz|la|lb|lc|li|lk|lr|ls|lt|lu|lv|ly|ma|mc|md|mg|mh|mil|mk|ml|mm|mn|mo|mp|mq|mr|ms|mt|mu|museum|mv|mw|mx|my|mz|na|name|nc|ne|net|nf|ng|ni|nl|no|np|nr|nt|nu|nz|om|org|pa|pe|pf|pg|ph|pk|pl|pm|pn|pr|pro|ps|pt|pw|py|qa|re|ro|ru|rw|sa|sb|sc|sd|se|sg|sh|si|sj|sk|sl|sm|sn|so|sr|st|su|sv|sy|sz|tc|td|tf|tg|th|tj|tk|tm|tn|to|tp|tr|tt|tv|tw|tz|ua|ug|uk|um|us|uy|uz|va|vc|ve|vg|vi|vn|vu|wf|ws|ye|yt|yu|za|zm|zw)$|(([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5])\.){3}([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5]))$/i" ,$email));
	}



	


	



 ?>