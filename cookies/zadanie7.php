<?php

if(isset($_COOKIE['visit_count'])) {
    $visit_count = $_COOKIE['visit_count'];
} else {
    $visit_count = 0; 
}
if(!isset($_COOKIE['last_visit'])) {

    setcookie('last_visit', time(), time() + (30), "/");
    
    $visit_count++;
    
    setcookie('visit_count', $visit_count, time() + (86400 * 30), "/");
}

echo "Liczba odwiedzin: " . $visit_count;
?>
