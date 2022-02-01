<?php

    $data_arr = array(
        
        'Robin Nixon' => 'Learning PHP, MySQL and JavaScript ',
        'Jon Duckett' => 'HTML & CSS: Design and Build Web Sites',
        'Rob Foster' => 'CodeIgniter 2 Cookbook'
    );
?>
<pre>

<?php
    echo json_encode($data_arr, JSON_PRETTY_PRINT);
?>

</pre>