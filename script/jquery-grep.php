<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<title>jQuery.grep demo</title>
	
	<style>
        div {
        	color: blue;
        }
        
        p {
        	color: green;
        	margin: 0;
        }
        
        span {
        	color: red;
        }
    </style>
    
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
</head>


<body>

	<div></div>
	
	<p></p>
	
	<span></span>



	<script>
	
        var arr 	=	 [ 1, 9, 3, 8, 6, 1, 5, 9, 4, 7, 3, 8, 6, 9, 1 ];
        
        $( "div" ).text( arr.join( "--- " ) );

        
        arr 		=	 jQuery.grep(arr , function( n, i ) {
            
          	return 		 ( n !== 5 && i > 4 );
        });
        
        $( "p" ).text( arr.join( "--- " ) );


        
        arr 		=	 jQuery.grep(arr, function( a ) {

          	return 		 a !== 9;
        });
        
        $( "span" ).text( arr.join( "--- " ) );
	</script>

</body>
</html>