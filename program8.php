<!DOCTYPE html>
<html>
<head>
	<?php $result = 0 ?>
	<?php error_reporting(E_ALL & ~E_NOTICE); ?>
	<title>Simple Calculator</title>
</head>
<body>
	<?php
		if($_SERVER['REQUEST_METHOD'] == 'POST')	{
			if(is_numeric($_POST['fnum']) && is_numeric($_POST['snum']))	{
			//echo "Hi";
				switch ($_POST['ops']) {
					case '+':
						# code...
						$result = $_POST['fnum'] + $_POST['snum'];
						//echo $result;
						break;
					case '-':
						# code...
						$result = $_POST['fnum'] - $_POST['snum'];
						break;
					case '*':
						# code...
						$result = $_POST['fnum'] * $_POST['snum'];
						break;
					case '/':
						# code...
						$result = $_POST['snum'] == 0 ? 'Divide by zero error' : $_POST['fnum'] / $_POST['snum'];
						//echo $result;
						break;

					// default:
					// 	# code...
					// 	break;
				}
			}
			else { ?>
				<script> alert("Enter valid numbers in fields"); </script>
			<?php }
		}
	 ?>
	 <center>
	 	<h2><u>SIMPLE CALCULATOR</u></h2>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" style="margin-top: 6%">
		<h4>First number:</h4> <input type='number' name='fnum' value='<?php if(isset($_POST['fnum'])) echo $_POST['fnum'] ?>'><br><br>
		<h4>Second number:</h4> <input type='number' name='snum' value="<?php if(isset($_POST['fnum'])) echo $_POST['snum'] ?>"><br><br>
		<h4>Operation:</h4> 
				  <input type='submit' name='ops' value='+'>
				  <input type='submit' name='ops' value='-'>
				  <input type='submit' name='ops' value='*'>
				  <input type='submit' name='ops' value='/'><br><br>
 		<h4>Output:</h4> <input type='text' name='result' readonly="true" value="<?php echo $result?>"><br><br>

 		<input type='button' value='Clear' onclick="window.location.reload();">
 	</form>
 </center>

 	<script>
	    if ( window.history.replaceState ) {
	        window.history.replaceState( null, null, window.location.href );
	    }
	</script>

</body>
</html>