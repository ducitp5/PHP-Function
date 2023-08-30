<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  
  	<link rel="stylesheet" href="../../public3/css/bootstrap.min.css">

 	<script src="../../public3/js/jquery.js"></script> 
  	<script src="../../public3/js/bootstrap.min.js"></script>

  
</head>
<body>

	<div class="container">
		<h2>Dropdowns</h2>
		<p>The .dropdown-header class is used to add headers inside the
			dropdown menu:</p>
		<div class="dropdown">
			<button class="btn btn-default dropdown-toggle" type="button"
				data-toggle="dropdown">
				Tutorials <span class="caret"></span>
			</button>
			<ul class="dropdown-menu">
				<li class="dropdown-header">Dropdown header 1</li>
				<li><a href="#">HTML</a></li>
				<li><a href="#">CSS</a></li>
				<li><a href="#">JavaScript</a></li>
				<li class="divider"></li>
				<li class="dropdown-header">Dropdown header 2</li>
				<li><a href="#">About Us</a></li>
			</ul>
		</div>
	</div>


	<div class="container">
		<div class="dropdown">
			<button class="btn btn-default dropdown-toggle" type="button"
				id="menu1" data-toggle="dropdown">
				Tutorials <span class="caret"></span>
			</button>
			<ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
				<li role="presentation"><a role="menuitem" href="#">HTML</a></li>
				<li role="presentation"><a role="menuitem" href="#">CSS</a></li>
				<li role="presentation"><a role="menuitem" href="#">JavaScript</a></li>
				<li role="presentation" class="divider"></li>
				<li role="presentation"><a role="menuitem" href="#">About Us</a></li>
			</ul>
		</div>
	</div>


</body>
</html>
