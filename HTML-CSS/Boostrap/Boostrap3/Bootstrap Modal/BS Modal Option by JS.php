<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="../public/css/bootstrap.min.css">

 	<script src="../public/js/jquery.js">			</script> 
  	<script src="../public/js/bootstrap.min.js">	</script>


</head>
<body>

	<div class="container">
	
		<h2>Modal Options</h2>
	
		<p>The backdrop option specifies whether the modal should have a dark
			overlay (the background color of the current page) or not.</p>
			
			
		<!-- Trigger the modal with a button -->
	
	
		<button type="button" 	class="btn btn-info btn-md"		id="myBtn">
		
			Modal with Overlay (backdrop:true)
		</button>
	
	
		<button type="button" 	class="btn btn-info btn-md" 	id="myBtn2">
		
			Modal without Overlay (backdrop:false)
		</button>
		
		
		<button type="button" 	class="btn btn-info btn-md" 	id="myBtn3">
		
			Modal with backdrop:"static"
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
		
						<button type="button" class="close" data-dismiss="modal">�</button>
		
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

				<div class="modal-content">

					<div class="modal-header">

						<button type="button" class="close" data-dismiss="modal">�</button>

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



	<script>

    	$(document).ready(function(){

        	$("#myBtn").click(function(){

                $("#myModal").modal({backdrop: true});
          	});

            $("#myBtn2").click(function(){

                $("#myModal2").modal({backdrop: false});
          	});

            $("#myBtn3").click(function(){

                $("#myModal3").modal({backdrop: "static"});
          	});
        });
        
    </script>

</body>
</html>
