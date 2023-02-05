<?php
    $str = file_get_contents('http://maps.googleapis.com/maps/api/geocode/json?address=1600+Amphitheatre+Parkway+Mountain+View+CA&sensor=false');
    print_r($str);
?>
