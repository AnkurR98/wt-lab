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
    unset($heads, "RNDNO");
    
    echo "<table style=\"width:100%\">
    <tr>
        <th>USN</th>
        <th>NAME</th> 
        <th>COLLEGE</th>
        <th>BRANCH</th>
        <th>CONTACT</th>
        <th>EMAIL</th>
    </tr>";

    for($i = 0; $i < count($students); $i++)    {     
            echo
            "<tr>
                <td>".$students[$i]['USN']."</td>
                <td>".$students[$i]['NAME']."</td> 
                <td>".$students[$i]['COLLEGE']."</td>
                <td>".$students[$i]['BRANCH']."</td>
                <td>".$students[$i]['CONTACT']."</td>
                <td>".$students[$i]['EMAIL']."</td>
            </tr>";
            

        
    }

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