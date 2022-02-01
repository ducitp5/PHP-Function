<?php



class CountryStateCity
{
    private $ds;
    
    function __construct()
    {
        require_once __DIR__ . './../lib/DataSource.php';
        
        $this->ds       =        new DataSource();
    }
    
    
    public function getAllCountry()
    {
        $query      =    "SELECT    *    FROM       country";
        
        $result     =    $this->ds->select($query);
        
        return           $result;
    }
    

    public function getStateByCountrId($countryId)
    {
        $query          =    "SELECT        *
                              FROM          states
                              WHERE         country_id   =   " .$countryId ;

        $result         =    $this->ds->select($query);       
        
        return               $result;
    }

    
    public function getCityByStateId($stateId)
    {
        $query          =    "SELECT        * 
                              FROM          city 
                              WHERE         state_id    =    " .$stateId;
        
        $result         =    $this->ds->select($query);
        
        return               $result;
    }
}