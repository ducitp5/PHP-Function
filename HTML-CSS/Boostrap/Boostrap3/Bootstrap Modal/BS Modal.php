<!DOCTYPE html>
<html lang="en">
<head>

    <title>Bootstrap Example</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="../public/css/bootstrap.min.css">

 	<script src="../public/js/jquery.js"></script> 
 	
  	<script src="../public/js/bootstrap.min.js"></script>	           <!-- prerequire jquery.js -->
	
	
</head>


<body>

	<div class="container">

		<h2>Basic Modal Example</h2>

		<button type="button" 			class="btn btn-info btn-lg" 	data-toggle="modal"		data-target="#myModal">		
		
			Open Modal
		
		</button>


		<!-- .modal || fade ==> hide the modal -->
		
		<div class="modal fade" id="myModal" role="dialog">
		
			<div class="modal-dialog">

				<!-- Modal content-->
		
				<div class="modal-content">
		
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">here</button>
						<h4 class="modal-title">Modal Header</h4>
					</div>
		
					<div class="modal-body">
						<p>Some text in the modal.</p>
					</div>
		
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
		
				</div>

			</div>
		</div>

	</div>

</body>
</html>
