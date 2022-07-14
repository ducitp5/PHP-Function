<?php



class DataSource
{
    const       HOST              =    'localhost';

    const       USERNAME          =    'root';

    const       PASSWORD          =    '';

    const       DATABASENAME      =    'phpsamples';

    private     $conn;

    
    function __construct()
    {
        $this->conn     =    $this->getConnection();
    }

 
    public function getConnection()
    {
        $conn = new mysqli( self::HOST  ,  self::USERNAME  ,  self::PASSWORD  ,  self::DATABASENAME);
        
        if (mysqli_connect_errno()) {
            
            trigger_error("Problem with connecting to database.");
        }
        
        $conn       ->set_charset("utf8");
        
        return      $conn;
    }

    
    public function select($query)
    {        
        
        $result     =    $this->conn->query($query);        
     
        
        return           $result;
    }

}