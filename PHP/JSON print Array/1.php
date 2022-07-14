<?php

    // Declare the array
    
    $courses = array(
    
        "Module-1" => "HTML",
        "Module-2" => "JavaScript",
        "Module-3" => "CSS3",
        "Module-4" => "PHP"
    );
    
    // Print the array in a simple JSON format
    
    echo json_encode($courses);
?>