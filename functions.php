<?php

// sanitise user inputs from contact form
function sanitise($data) 
{
    $clean_data = strip_tags($data);
    $clean_data = stripslashes($clean_data);
    $clean_data = htmlspecialchars($clean_data);
    return $clean_data;
}

?>