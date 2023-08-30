<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

   	<link rel="stylesheet" href="../public3/css/bootstrap.min.css">

 	<script src="../public3/js/jquery.js"></script> 
  	<script src="../public3/js/bootstrap.min.js"></script>
   	
    	
</head>



<body>

	<div class="container">

		<h2>Simple Collapsible</h2>
		
		<p>Click on the button to toggle between showing and hiding content.</p>
		
		<button type="button" class="btn btn-info" 
		
				data-toggle="collapse"			data-target="#demo">
				
			Simple collapsible
		
		</button>
		
			
		<div id="demo" class="collapse">I am here		</div>
	</div>

	<div class="container">
	
		<h2>Collapse in</h2>
	
		<button type="button" 			class="btn btn-info" 
		
			data-toggle="collapse"		data-target="#demo2">
			
			Collapse in
		</button>
		
		<div id="demo2" class="collapse in">
			class = collapse in
		</div>
	</div>

	<div class="container">
		<h2>Collapsing</h2>
		<button type="button" 			class="btn btn-lg btn-info collapsed"
				data-toggle="collapse" 	data-target="#demo3">
				
			Collapsing
		</button>

		<style>
            .collapsing {                                                           /* predefined in bootstrap */
            	background-color: yellow;
            }
        </style>

		<div id="demo3" class="collapse">The .collapsing class is added when
			the transition starts, and removed when it is finished. In this
			example, the collapsible content gets a yellow background for those
			seconds it takes to show the content. The background color is removed
			when the transition has ended.</div>
	</div>


</body>
</html>
