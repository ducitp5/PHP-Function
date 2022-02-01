<?php

    // export.php

    $connect = mysqli_connect("localhost", "root", "", "company");
    
    $output = '';
    
    if (isset($_POST["export"])) {
        
        $query      =    "SELECT * FROM items";
        
        $result     =    mysqli_query($connect , $query);
        
        $output     =   '';
        
        
        if (mysqli_num_rows($result)  >  0) {
        
            $output .= '
       
                <table class="table" bordered="1">  
                    <tr>';
            $i = 0;
            
            while($i   <   mysqli_num_fields($result))
            {
                $meta        =   mysqli_fetch_field($result);
                
                $output     .=   "<th>".$meta->name."</th>";
                
                $i++;
            } 
            $output .=   '

                    </tr>';
            
            
            
            while ($row = mysqli_fetch_array($result)) {
                
                $output .= '
        
                    <tr>';
                
                for($i = 0; $i < $result->field_count; $i++){
                    
                    $output .='<td>'.$row[$i].'</td>';
                }
                        
                $output .=  '

                    </tr>';
            }
            
            $output .= '</table>';
            
            header('Content-Type: application/xls');
            header('Content-Disposition: attachment ; filename=download3.xls');
            
            echo $output;
        }
    }
