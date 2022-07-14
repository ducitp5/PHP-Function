
<link rel="stylesheet" href="../CSS/morris.css">

<script src="../CSS/jquery.min.js"></script>
<script src="../CSS/raphael-min.js"></script>
<script src="../CSS/morris.min.js"></script>




<div id="chart" style="height: 350px;">day la chart chua load</div>




<?php 
    //index.php
    
    $connect        =    mysqli_connect("localhost"  , "root"  , ""  , "company");
    
    $query          =    "SELECT        *       

                          FROM       account";
    
    
    $result         =    mysqli_query(  $connect  ,  $query  );
    
    $chart_data     =    '[';
    
    while ($row     =    mysqli_fetch_array($result) )
    {
        $chart_data     .=   "  {     year        :'"     .$row["year"]."', 
                                      profit      :"      .$row["profit"].", 
                                      purchase    :"      .$row["purchase"].", 
                                      sale        :"      .$row["sale"]."
                                }, ";
    }
    
    $chart_data     =    substr($chart_data  , 0  , -2);

    $chart_data    .=   ']'
                                          
//    $chart_data     =   5;
?>


	
<script>

//	var chartt		=		 [ <?php  /* $chart_data;  */ ?>  ]   ;

	var chartt		=		 <?=  $chart_data  ?>    ;

 	alert( JSON.stringify(chartt , null , 4));
	
	console.log('chatt is : ' + typeof chartt );

	console.log('chatt is : ' + JSON.stringify(chartt , null , 4));
 
	
	Morris.Line({

        element 	:	 'chart',
        
        data		:	  <?=   $chart_data;  ?>  ,

        xkey		:	'year',

        ykeys		:	['profit'  ,  'purchase'  ,  'sale'],

        labels		:	['Profit'  ,  'Purchase'  ,  'Sale'],

        hideHover	:	'auto',

        stacked		:	true
    });
    
</script>