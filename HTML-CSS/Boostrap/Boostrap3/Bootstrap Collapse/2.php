<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

 	<link rel="stylesheet" href="../public/css/bootstrap.min.css">

 	<script src="../public/js/jquery.js"></script> 
  	<script src="../public/js/bootstrap.min.js"></script>
  	
</head>



<body>

	<div class="container">

		<h2>Collapse</h2>

		<p>
			<strong>Note:</strong> The <strong>data-parent</strong> attribute
			makes sure that all collapsible elements under the specified parent
			will be closed when one of the collapsible item is shown.
		</p>
		

		<div class="panel-group" id="accordion">
		
		
			<div class="panel panel-default">
		
				<div class="panel-heading">
				
					<h4 class="panel-title">
					
						<a data-toggle="collapse" 	data-parent="#accordion"		href="#collapse1">
							
							Collapsible Group 1
						</a>
					</h4>
				</div>
		
				<div id="collapse1" class="panel-collapse collapse in">
					
					<div class="panel-body">
					
						body 1
					</div>
				</div>
			</div>
			
		
		
			<div class="panel panel-default">
			
				<div class="panel-heading">
			
					<h4 class="panel-title">
			
						<a data-toggle="collapse" 	data-parent="#accordion"	href="#collapse2">
						
							Collapsible Group 2
						</a>
					</h4>
				</div>
				
				<div id="collapse2" class="panel-collapse collapse">
					
					<div class="panel-body">
						Body 2
					</div>
				</div>
			</div>
			
			
			<div class="panel panel-default">
			
				<div class="panel-heading">
			
					<h4 class="panel-title">
			
						<a 	data-toggle="collapse" 	data-parent="#accordion"	href="#collapse3">
						
							Collapsible Group 3
						</a>
						
					</h4>
				</div>
			
				<div id="collapse3" class="panel-collapse collapse">
					
					<div class="panel-body">
						Body 3
					</div>
				</div>
			</div>
		</div>
	</div>

</body>
</html>
