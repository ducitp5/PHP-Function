<?php
    
    namespace Phppot;
    
    require_once                 __DIR__ . '/../Model/CountryStateCity.php';
    
    if (! empty($_POST["country_id"])) {
        
        $countryId              =    $_POST["country_id"];
        
        
        
        $countryStateCity       =    new CountryStateCity();
        
        $stateResult            =    $countryStateCity      ->getStateByCountrId( $countryId );
?>
    <option value="">Select State</option>

<?php

        foreach ($stateResult as $state) {
?>
    <option value="<?php echo $state["id"]; ?>"><?php echo $state["name"]; ?></option>
<?php
        }
    }
?>