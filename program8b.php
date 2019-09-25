<html>
<body>
<?php error_reporting(E_ALL & ~E_NOTICE);

    if($_SERVER['REQUEST_METHOD'] == 'POST')    {
        $mat1 = $_POST['Matrix1'];
        $mat2 = $_POST['Matrix2'];
        echo $mat1.$mat2."<br>";
        switch($_POST['choice'])    {
            case 'A': $nrow = $mat1[0];
                      $ncol = $mat2[2];
                      echo $ncol;
                      $elements = substr($mat1, 4);
                      echo $elements;
                      $elements = explode(" ", $elements);
                      $matrix1 = array();
                      $k = 0;
                      for($i = 0; $i < $nrow; $i++) {
                          $row = array();
                          for($j = 0; $j < $ncol; $j++) {
                              echo "Element ".$elements[k]." \n";
                              $row[] = $elements[$k++];
                          }
                          print_r($row);
                          $matrix[] = $row;
                      }
                      print_r($matrix1[0][0]);
        }
    }


    ?>
    
<form name="MatForm" id="MatForm" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    Select Matrix operation: <select name="choice" id="select">
                                <option value="A">Matrix Transpose</option>
                                <option value="B">Matrix Addition</option>
                                <option value="C">Matrix Multiplication</option>
                             </select><br><br>
    Input Matrix 1: <textarea name="Matrix1" cols="50" rows="10" required placeholder="Write size seperated by space in first row. Then, input matrix 1 adding spaces between elements of same row and CR between two rows"></textarea><br><br>
    Input Matrix 2: <textarea name="Matrix2" id="Mat2" cols="50" rows="10" placeholder="Write size seperated by space in first row. Then, input matrix 2 adding spaces between elements of same row and CR between two rows"></textarea><br><br><br>
    <input type="button" value="Compute" onclick="matValidate()">
</form>

<script>
    function matValidate()  {
        if(document.getElementById("select").value != "A")    {
            if(document.forms["MatForm"]["Matrix2"].value == "")    {
                alert("Enter 2nd matrix before continuing");
                return false;
            }
            document.getElementById("MatForm").submit();
        }
        document.getElementById("MatForm").submit();
    }
</script>


</body>
</html>