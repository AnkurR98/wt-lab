<?php error_reporting(E_ALL & ~E_NOTICE);
    $conn = mysqli_connect("localhost", "root", "admin", "playground");
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
    //unset($heads, "RNDNO");
    echo "<center>";
    echo "<u><h3>Unsorted table of students :- </h3></u>";
    printTables($students);

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

    echo "<br><br><u><h3>Sorted table of students :- </h3></u>";
    printTables($students);
    echo "</center>";


    function printTables($arrayvar) {
        echo "<table border=2px;>
            <tr>
                <th>USN</th>
                <th>NAME</th> 
                <th>COLLEGE</th>
                <th>BRANCH</th>
                <th>CONTACT</th>
                <th>EMAIL</th>
            </tr>";

        for($i = 0; $i < count($arrayvar); $i++)    {     
                echo "<tr>
                    <td>".$arrayvar[$i]['USN']."</td>
                    <td>".$arrayvar[$i]['NAME']."</td> 
                    <td>".$arrayvar[$i]['COLLEGE']."</td>
                    <td>".$arrayvar[$i]['BRANCH']."</td>
                    <td>".$arrayvar[$i]['CONTACT']."</td>
                    <td>".$arrayvar[$i]['EMAIL']."</td>
                    </tr>";
        }
        echo "</table>";
    }
?> 