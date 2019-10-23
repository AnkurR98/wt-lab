<?php error_reporting(E_ALL & ~E_NOTICE);
    $conn = mysqli_connect("localhost", "root", "root123", "succ");
    // if (mysqli_connect_errno())   {
    //     echo "Failed to connect to MySQL: " . mysqli_connect_error();
    // }
    $query = "SELECT * FROM students";
    $students = array();
    $result = mysqli_query($conn, $query);
    while($row = $result->fetch_assoc())    {
        //print_r($row);
        array_push($students, $row);
    }

    $heads = array_keys($students[0]);
    unset($heads, "RNDNO");
    

    for($i = 0; $i < count($students); $i++)    {     
        print_r($students[$i]);
        echo "<br>";
    }
    echo "<br><br>";

    for($i = 0; $i < count($students); $i++)    {
        $min = $i;

        for($j = $i + 1; $j < count($students); $j++)   {
            if(substr($students[$j]["USN"], 7) < substr($students[$min]["USN"], 7))
                $min = $j;
        }

        $temp = $students[$i];
        $students[$i] = $students[$min];
        $students[$min] = $temp;
    }

    for($i = 0; $i < count($students); $i++)    {
        unset($students[$i]["RNDNO"]);    
        print_r($students[$i]);
        echo "<br>";
    }
?>