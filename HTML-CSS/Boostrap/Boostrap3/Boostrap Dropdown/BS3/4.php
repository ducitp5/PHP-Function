<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

	
  	<link rel="stylesheet" href="../../public3/css/bootstrap.min.css">

 	<script src="../../public3/js/jquery.js"></script> 
  	<script src="../../public3/js/bootstrap.min.js"></script>
  	
  	
</head>
<body>

<div class="container">
  <h2>Dropdowns</h2>
  <p>The .active class adds a blue background color to the active link.</p>
  <p>The .disabled class disables a dropdown item (grey text color).</p>
  <div class="dropdown">
    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Tutorials
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="#">Normal</a></li>
      <li class="disabled"><a href="#">Disabled</a></li>
      <li class="active"><a href="#">Active</a></li>
      <li><a href="#">Normal</a></li>
    </ul>
  </div>
</div>



<div class="container">
  <h2>Dropdowns</h2>
  <p>The .dropup class makes the dropdown menu expand upwards instead of downwards:</p>
  <div class="dropup">
    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Dropup Example
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="#">HTML</a></li>
      <li><a href="#">CSS</a></li>
      <li><a href="#">JavaScript</a></li>
      <li class="divider"></li>
      <li><a href="#">About Us</a></li>
    </ul>
  </div>
</div>

</body>
</html>

