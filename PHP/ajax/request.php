<!DOCTYPE html>
<html>
<head>
    <script		src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <script>
        $(document).ready(function(){

            $("input").keyup(function(){

                var txt = $("input").val();

                $.post(				//$(selector).post( URL , data , function(data , status , xhr) , dataType )

                    "ajax_gethint.php?q=" +txt		, 		// <=> url = "ajax_gethint.php?q=" +txt

                    function(resulttt){			//  function(data , status , xhr)

                    	$("span").html(resulttt);
            		}
        		);
          	});
        });
    </script>
</head>
<body>

	<p>Start typing a name in the input field below:</p>
	
	
	First name:		<input type="text">


	<p>		Suggestions --: <span></span>	</p>
	
</body>
</html>