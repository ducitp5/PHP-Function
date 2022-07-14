<?php
    $connect    =    mysqli_connect("localhost" , "root" , "" , "company");
       
    
    $query          =    "select * from items;";
    
    
    $queryResult     =    mysqli_query($connect , $query);
?>
<html>

<head>

	<title>Export MySQL data to Excel in PHP</title>

    <link href="../css/bootstrap.min.css" rel="stylesheet"/>
    <script    	src="../css/bootstrap.min.js"></script>
    <script    	src="../css/jquery.min.js"></script>
</head>


<body>
	<div class="container">

		<br /> <br /> <br />

		<div class="table-responsive">

			<h2 align="center">Export MySQL data to Excel in PHP</h2>

			<br />
<?php

    
    
    
    echo    "<table  class='table table-bordered'>

                <tr>";
    
    $i = 0;
    
    while($i   <   mysqli_num_fields($queryResult))
    {
        $meta    =   mysqli_fetch_field($queryResult);
        
        echo "<th>".$meta->name."</th>";
        
        $i++;
    } 
    
    echo        "</tr>";
    
    while ($queryRow   =   $queryResult->fetch_row()) {
        
        echo "<tr>";
        
        for($i = 0; $i < $queryResult->field_count; $i++){
        
            echo "<td>$queryRow[$i]</td>";
        }
        
        echo "</tr>";
    }
    echo "</table>";
    
?>
			
			
			<br />
			
			<form method="post" action="export.php">
				<input type="submit" name="export" class="btn btn-success"		value="Export" />
			</form>
		</div>

		
		<br><br>
		
		

		
	</div>
</body>
</html>