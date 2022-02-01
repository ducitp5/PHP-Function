
<form id="form_1" action="" method="post">

    <input type="submit" name="submit_1" value="Submit 1" />		<br>

    <input type="submit" name="submit_2" value="Submit 2" />
</form>


<form id="form_2" action="" method="post">

    <input type="submit" name="submit_3" value="Submit 3" />
</form>

<?php

    if($_SERVER["REQUEST_METHOD"] == "POST"){
     
        if( isset($_POST['submit_1']) ) {
        
            echo 'text 1';
        
        }
        else if( isset($_POST['submit_2']) ) {
        
            echo 'text 2';
        
        }
        else if( isset($_POST['submit_3']) ) {
            
            echo 'text 3';
            
        }
    }

?>
