<?php
    error_reporting(E_ALL & ~E_NOTICE);

    $patterns = explode(" ", "/xas$/ /^k.*s$/i /^m.*s$/i /a$/");
    $states = explode(" ", "Mississipi Alabama Texas Massachusetts Kansas");

    $statesList = array();

    for($i = 0; $i < count($patterns); $i++)    {    
        $tempstate = preg_grep($patterns[$i], $states);
        sort($tempstate);
        array_push($statesList, $tempstate[0]);
    }

    print_r($statesList);

?>