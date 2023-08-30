<!DOCTYPE html>
<html lang="en">

<head>
  	<title>Bootstrap Example</title>
  	
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">

  	<link rel="stylesheet" href="../public/css/bootstrap.min.css">

 	<script src="../public/js/jquery.js"></script> 
  	<script src="../public/js/bootstrap.min.js"></script>

</head>


<body>

	<div class="container">

		<h2>Dynamic Tabs</h2>
		
		
		<ul class="nav nav-tabs">
		
			<li class="active"><a data-toggle="tab" href="#home">Home</a></li>
			
			<li><a data-toggle="tab" href="#menu1">Menu 1</a></li>
			<li><a data-toggle="tab" href="#menu2">Menu 2</a></li>
			<li><a data-toggle="tab" href="#menu3">Menu 3</a></li>
		</ul>


		<div class="tab-content">

			<div id="home"  class="tab-pane fade in active">		<h3>HOME</h3>			</div>

			<div id="menu1" class="tab-pane fade">					<h3>Menu 1</h3>			</div>

			<div id="menu2" class="tab-pane fade ">					<h3>Menu 2</h3>			</div>

			<div id="menu3" class="tab-pane fade">					<h3>Menu 3</h3>			</div>
		</div>
		
		
		<h2>Dynamic Tabs</h2>
		
		
		<ul class="nav nav-tabs">
			<li><a data-toggle="tab" href="#home2">					Home</a></li>
			
			<li><a data-toggle="tab" href="#menu21">				Menu 1</a></li>
			<li class="active"><a data-toggle="tab" href="#menu22">	Menu 2</a></li>
			<li><a data-toggle="tab" href="#menu23">				Menu 3</a></li>
		</ul>


		<div class="tab-content">

			<div id="home2"  class="tab-pane fade ">				<h3>HOME 2</h3>			</div>

			<div id="menu21" class="tab-pane fade in active">		<h3>Menu 1</h3>			</div>

			<div id="menu22" class="tab-pane fade">					<h3>Menu 2</h3>			</div>

			<div id="menu23" class="tab-pane fade">					<h3>Menu 3</h3>			</div>
		</div>
	</div>

</body>
</html>
