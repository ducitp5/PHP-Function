<?php
    $connect    =    mysqli_connect("localhost" , "root" , "" , "company");
    
    $sql        =    "SELECT    *    FROM items";
    
    $result     =    mysqli_query($connect , $sql);
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

			<table class="table table-bordered">
				 <tr>  
                    <th>ID</th>  
                    <th>Name</th>  
                    <th>Type</th>  
                    <th>Brand</th>
                    <th>Price</th>
            	</tr>
<?php
    
    while ($row = mysqli_fetch_array($result)) {
    
        echo '  

            <tr>  
                <td>' . $row["id"] . '</td>  
                <td>' . $row["name"] . '</td>  
                <td>' . $row["type"] . '</td>  
                <td>' . $row["brand"] . '</td>  
                <td>' . $row["price"] . '</td>
            </tr>  
        ';
    }
    ?>
    </table>
			<br />
			<form method="post" action="export.php">
				<input type="submit" name="export" class="btn btn-success"		value="Export" />
			</form>
		</div>
	</div>
</body>
</html>