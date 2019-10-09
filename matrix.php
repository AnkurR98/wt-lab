<html>
<style>
    h5 {
        margin-bottom: 6px;
    }
    p {
        width: 40px;
        margin: 0px;
        display: inline;
    }
</style>
</html>

<?php

    $a = array();
    $b = array();
    $k = 1;
    $l = 11;

    for($i = 0; $i < 3; $i++)   {
        $tempa = array();
        $tempb = array();
        for($j = 0; $j < 3; $j++)   {
            array_push($tempa, $k++);
            array_push($tempb, $l++);
        }
        // print_r($tempa);
        // print_r($tempb);
        // echo "<br><br>";
        array_push($a, $tempa);
        array_push($b, $tempb);
    }

    // print_r($a);
    // echo "<br><br>";
    // print_r($b);

    echo "<center><h1><u>MATRIX OPERATIONS</u></h1></center>";

    echo "<h5><u>MATRIX a : </u></h5>";
    for($i = 0; $i < 3; $i++)   {
        for($j = 0; $j < 3; $j++)
            echo $a[$i][$j]."\t";
        echo "<br>";
    }
    echo "<h5><u>MATRIX b : </u></h5>";
    for($i = 0; $i < 3; $i++)   {
        for($j = 0; $j < 3; $j++)
            echo $b[$i][$j]."\t";
        echo "<br>";
    }

    echo "<h5><u>TRANSPOSE OF a : </u></h5>";
    for($i = 0; $i < 3; $i++)   {
        for($j = 0; $j < 3; $j++)
            echo $a[$j][$i]."\t";
        echo "<br>";
    }

    echo "<h5><u>SUM OF MATRICES a AND b : </u></h5>";
    for($i = 0; $i < 3; $i++)   {
        for($j = 0; $j < 3; $j++)
            echo ($a[$i][$j] + $b[$i][$j])."\t";
        echo "<br>";
    }

    echo "<h5><u>PRODUCT OF MATRICES a AND b : </u></h5>";
    $c = $a;
    for($i = 0; $i < 3; $i++)   {
        for($j = 0; $j < 3; $j++)   {
            $c[$i][$j] = 0;
            for($m = 0; $m < 3; $m++)
                $c[$i][$j] += $a[$i][$m] * $b[$m][$j];
        }
    }
    // print_r($c);
    // echo "<br><br>";

    // $d = array();
    // for($i = 0; $i < 3; $i++)   {
    //     $tempd = array();
    //     for($j = 0; $j < 3; $j++)   {
    //         $sum = 0;
    //         for($m = 0; $m < 3; $m++)
    //             $sum += $a[$i][$m] * $b[$m][$j];
    //         array_push($tempd, $sum);
    //     }
    //     array_push($d, $tempd);
    // }
    // print_r($d);
    for($i = 0; $i < 3; $i++)   {
        for($j = 0; $j < 3; $j++)
            echo $c[$i][$j]."\t";
        echo "<br>";
    }