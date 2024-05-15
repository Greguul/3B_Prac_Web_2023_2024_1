<?php

if(isset($_COOKIE['visit_count'])) {
    $visit_count = $_COOKIE['visit_count'];
    $visit_count++; 
} else {
    $visit_count = 1; 
}


setcookie('visit_count', $visit_count, time() + (86400 * 30), "/"); 


if($visit_count >= 10) {
    echo "Witaj! To Twoja 10. wizyta na tej stronie!";
    
} else {
    echo "Witaj! To Twoja $visit_count. wizyta na tej stronie!";
}

?>

