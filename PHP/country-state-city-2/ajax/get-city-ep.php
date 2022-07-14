<?php
    
    require_once __DIR__ . '/../Model/CountryStateCity.php';    
    
    $stateId                =    $_POST["state_id"];        
    
    $countryStateCity       =    new CountryStateCity();
    
    $cityResult             =    $countryStateCity  ->getCityByStateId( $stateId );
?>
    
    	<option>Select City</option>

<?php

    foreach ($cityResult as $city) {
?>
    	<option value="<?php echo $city["id"]; ?>">
    	
    		<?php echo $city["name"]; ?>
		
		</option>

<?php
        
    }
?>