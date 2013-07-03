<!-- this is php which fetches data at post request-->
<!DOCTYPE html>
<html>
	<body><table align="centre" border=1>
		<tr>
		<td><?php echo "first name is ".$_POST["fname"] ; ?> <br></tr>
		<tr>
		<td><?php echo "last name is ".$_POST["lname"] ; ?> <br></tr>
		<tr>
		<td><?php echo "sex is ".$_POST["sex"] ; ?> <br></tr>
		<tr>
		<td><?php
  			$language = $_POST['languages'];
 			 if(empty($language))
		 	 {
   				 echo("You didn't select any languages.");
 			 }
  			else
  			{
   				 $N = count($language);
 
    				echo("You selected $N language(s): ");
    				for($i=0; $i < $N; $i++)
    				{
      					echo($language[$i] . ", ");
   				 }
 			 }
			?><br></tr>
		<tr>
		<td><?php
  			$city = $_POST['city'];
 			 if(empty($city))
		 	 {
   				 echo("You didn't select any city");
 			 }
  			else
  			{
   				 $N = count($city);
 
    				echo("You selected $N city(s): ");
    				for($i=0; $i < $N; $i++)
    				{
      					echo($city[$i] . " ");
   				 }
 			 }
	?><br></tr>
		</table>
		<hr><pre>
		<h3> using print_r function</h3>
		<?php print_r($_POST);  ?><br>
		</pre>
	</body>
</html>

