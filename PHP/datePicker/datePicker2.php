<!DOCTYPE html>
<html>
<head>
    <title>Bootstrap datepicket demo</title>
    <link   	rel="stylesheet"			href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css"    	>
    
    <script    								src="https://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <script 	type='text/javascript' 		src='//code.jquery.com/jquery-1.8.3.js'    ></script>
    
    
    
    <link 		rel="stylesheet"		href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker3.min.css"	>
    
    <script type='text/javascript'    	src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.min.js"></script>



    
    <script type='text/javascript'>
    

    jQuery(function ($)
    {
    	 $('.input-group.date').datepicker({
             
		 	prevText:"Tháng trước",
            nextText:"Tháng sau",
            dateFormat:"dd/mm/yy",
            dayNamesMin: [ "Thứ 2", "Thứ 3", "Thứ 4", "Thứ 5", "Thứ 6", "Thứ 7", "Chủ nhật" ],
            duration: "slow"
         }); 
    });
    
    </script>
    
    
</head>



<body>
	<div class="container">
	
		<h1>Bootstrap datepicker</h1>
		
		<div class="input-group date">
			
			<input type="text" class="form-control">
			
			<span class="input-group-addon"> <i class="glyphicon glyphicon-calendar"></i></span>
		</div>
	</div>
</body>



</html>


