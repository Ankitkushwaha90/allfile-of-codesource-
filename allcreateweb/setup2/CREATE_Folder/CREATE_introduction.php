<!DOCTYPE html>
<html>
<head>

	<title>CreateCode</title>
	<link rel="stylesheet" type="text/css" href="../@Manage_files/scroller.css">
	<link rel="stylesheet" type="text/css" href="../@Manage_files/shadbox.css">
	<link rel="stylesheet" type="text/css" href="../@Manage_files/topmenu.css">
	<link rel="stylesheet" type="text/css" href="../@Manage_files/style1.css">
	<link rel="stylesheet" type="text/css" href="../@Manage_files/style_a.css">
	<link rel="stylesheet" type="text/css" href="../@Manage_files/style_b.css">
	<link rel="stylesheet" type="text/css" href="../@Manage_files/style_c.css">
	<link rel="stylesheet" type="text/css" href="../@Manage_files/style_d.css">
	<link rel="stylesheet" type="text/css" href="../@Manage_files/style_e.css">
    <script src="../@Manage_files/jquery-3.5.1.min.js"></script>
    <script src="../@Manage_files/a076d05399.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="Keywords" content="HTML,CSS,JavaScript,SQL,PHP,jQuery,XML,DOM,Bootstrap,Python,Java,Web development,W3C,tutorials,programming,training,learning,quiz,primer,lessons,references,examples,exercises,source code,colors,demos,tips">
	<meta name="Description" content="Well organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java and XML.">
	<script>
		$(document).ready(function(){

			
			$('#moreidid').click(function(){
				$('ul').toggle();
			});
		});
	</script>
	<script>

		$(document).ready(function(){

			
			$('#menuid').click(function(){
				$('#maindivdiv1').toggle('#menudivv');
			});
		});
	</script>

	<script>
		$(document).ready(function(){
		  $("#myInput").on("keyup", function() {
		    var value = $(this).val().toLowerCase();
		    $(".dropdown-menu li").filter(function() {
		      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
		    });
		  });
		});
	</script>

	<script>
		$(document).ready(function(){
			$('input').mouseenter(function(){
				$('mydivid').toggle('already');
			});
			$('input').mouseleave(function(){
				$('mydivid').toggle('dddiv');
			});
		});
	</script>
	<style>

		.addrm{
			display: none;
		}
		.already{
			position: absolute;
			padding-top: 20px;
			display: show;
		}
		.dddiv{
			display: none;
		}
	</style>
	<style>

		#morecss{
			display: block;
		}

		#menudivv{
			visibility: show;
		}
		#intro{
			visibility: hidden;
		}
		#soso{
			display: show;
		}

	</style>
	<script>

		$(document).ready(function(){

			
			$('#closevin').click(function(){
				$('#klsfj').toggle('#intro');
			});
		});
	</script>

	<script>

		$(document).ready(function(){

			
			$('#idhome').click(function(){
				$('#klsfj').toggle('show');
			});
		});
	</script>
</head>
<body>

		
	<header>
		<p class="text1">CreateCode</p>
	</header>
	<nav>

		<div class="btn">

			<div class="homediv">
				<i id="idhome" class="fa fa-home" aria-hidden="true"></i>
			</div>

			<i class="fas fa-bars fa-2x"  id="menuid"></i>

			<div class="menu"  id="moreidid">
				<a href="#">More <i class="fa fa-chevron-circle-down" aria-hidden="true"></i></a>
			</div>

			<div class="searchh" class="search-box">
				<input class="search-txt" type="text" name=""  placeholder="Type to search-box"><a class="search-btn" href="#"><i class="fas fa-search"></i></a>
			</div>

				
		</div>


		<ul id="useid">
			<li><a href="../HTML_Folder/HTML_introduction.php">HTML</a></li>
			<li><a href="../CSS_Folder/CSS_introduction.php">CSS</a></li>
			<li class="active"><a href="../CREATE_Folder/CREATE_introduction.php">CreateWeb</a></li>
			<li><a href="../PYTHON_Folder/PYTHON_introduction.php">Python</a></li>
			<li><a href="../JAVASCRIPT_Folder/JAVASCRIPT_introduction.php">Javacript</a></li>
			<li><a href="../PHP_Folder/PHP_introduction.php">PHP</a></li>
		</ul>

		<?php

					include'../@Manage_files/topmenu.php';


		?>

		
	</nav>

	<div class="maincss">


		<div id="maindivdiv1" class="maindiv1 card example-1 scrollbar-ripe-malinka">


				<?php

					include'file_php/HTML.php';


				?>

		</div>



		<div class="maindiv2">

			<div class="submaindiv">
				<div class="submaindiv1">


				</div>
				
				<div class="submaindiv2">


					
				</div>
				
			</div>

			<div  class="submaindiv3">


				<?php

					include'../@Manage_files/footerconction.php';


				?>

					
			</div>

			
		</div>

</body>
</html>