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
	
		<h2>Modal Options</h2>
		
		<p>The data-backdrop attribute specifies whether the modal should have </p>
		<p>	a dark overlay (the background color of the current page) or not.</p>
		
		
		<!-- Trigger the modal with a button -->
		
   <!-- <button type="button" 	class="btn btn-info btn-md"		                        id="myBtn">      with JS		 -->
		
		<button type="button" 	class="btn btn-info btn-md" 	data-toggle="modal"		data-target="#myModal" data-backdrop="true">
		
   <!--  $("#myBtn").click(function(){  $("#myModal").modal({backdrop: true});    	});-->
   
			Modal with Overlay (true)
		</button>
		
		
   <!-- <button type="button" 	class="btn btn-info btn-md" 	                        id="myBtn2">		 -->
   
		<button type="button" 	class="btn btn-info btn-md" 	data-toggle="modal"		data-target="#myModal2" data-backdrop="false">
		
			Modal without Overlay (false)
		</button>
		
		
		<button type="button" class="btn btn-info btn-md" data-toggle="modal"	data-target="#myModal3" data-backdrop="static">
		
			Modal with static backdrop
		</button>



		<!-- Modal 1 -->


		<div class="modal fade" id="myModal" role="dialog">

			<div class="modal-dialog">

				<!-- Modal content-->


				<div class="modal-content">
				
					<div class="modal-header">
				
						<button type="button" class="close" data-dismiss="modal">&times;</button>
				
						<h4 class="modal-title">Modal with Dark Overlay</h4>
					</div>
				
				
					<div class="modal-body">
				
						<p>This modal has a dark overlay.</p>
					</div>
				
					<div class="modal-footer">
				
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>

			</div>
		</div>


		<!-- Modal 2 -->


		<div class="modal fade" id="myModal2" role="dialog">

			<div class="modal-dialog">

				<!-- Modal content-->
				
				<div class="modal-content">
				
					<div class="modal-header">

						<button type="button" class="close" data-dismiss="modal">×</button>

						<h4 class="modal-title">Modal without Overlay</h4>
					</div>

					<div class="modal-body">
						<p>This modal has no overlay.</p>

						<p>
							<strong>Note:</strong> You cannot click outside of this modal to close it.
						</p>
					</div>
					
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>

			</div>
		</div>


		<!-- Modal 3 -->


		<div class="modal fade" id="myModal3" role="dialog">
			<div class="modal-dialog">

				<!-- Modal content-->
				<div class="modal-content">

					<div class="modal-header">

						<button type="button" class="close" data-dismiss="modal">×</button>

						<h4 class="modal-title">Static Backdrop</h4>
					</div>


					<div class="modal-body">

						<p>You cannot click outside of this modal to close it.</p>
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
