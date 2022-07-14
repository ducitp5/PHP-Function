<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>jQuery UI Slider - Range slider</title>
    
    <link rel="stylesheet"
    	href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"> 
    	

    
<!--     <script src="https://code.jquery.com/jquery-1.12.4.js"></script> -->
    
    <script src="../PHP/CSS/jquery.min.js"></script>
    
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    
    
	<script src="../PHP/CSS/simple.money.format.js"></script>

    
    
    <script>
    
        $( function() {
            
            $( "#slider-range" ).slider({
                
                range	:	 true,
                min		:	 0,
                max		:	 5000000,
                
                values	:	 [ 2000000   ,  3000000 ],
                
                slide	:	 function( event , ui ) {

                    $( "#displaytext" ).val( "$" + ui.values[ 0 ] + " +++ $" + ui.values[ 1 ] );
				}
        	});

            $( "#displaytext" )
            
            	.val(   $( "#slider-range" ).slider( "values" , 0 )
                    	
                      + " ----- " 

                      + $( "#slider-range" ).slider( "values" , 1 ) 
          		);
        });
        
    </script>
</head>


<body>

	<p>
		<label for="amount">Price range:</label> 
		
		<input 	type	="text"			id="displaytext" 	  readonly
		
				style	="border: 0;    color: red;   font-weight: bold;">
	</p>

	<div id="slider-range"></div>

<hr>
	<div id="wrapper">
		<section>
			<h2>With Span</h2>
			<span class="money">10000</span>
		</section>
		
		<section>
			<h2>With Span</h2>
			<span class="money">1hahaha koko 0000</span>
		</section>
		
		<section>
			<h2>With Input</h2>
			<input type="text" class="money" value="20000"/>
		</section>
	</div>

<script type="text/javascript">
		$('.money').simpleMoneyFormat();
	</script>

</body>
</html>