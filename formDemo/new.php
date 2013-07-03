<!--php code for fetching data from form using get method-->
<!DOCTYPE html>
<html>
	<body><table align="centre" border=1>
		<tr>
		<td><?php echo "first name is ".$_GET["fname"] ; ?> <br></tr>
		<tr>
		<td><?php echo "last name is ".$_GET["lname"] ; ?> <br></tr>
		<tr>
		<td><?php echo "sex is ".$_GET["sex"] ; ?> <br></tr>
		<tr>
		<td><?php
  			$language = $_GET['languages'];
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
      					echo($language[$i] . " ");
   				 }
 			 }
		?><br></tr>
		<tr><td>
		<?php echo "Address is ".$_GET["address"] ; ?></tr>
		<tr><td>
		<?php echo "city is ".$_GET["city"] ; ?></tr>
		</table>
		<hr><pre>
		<h3> using print_r function</h3>
		<?php print_r($_GET);  ?><br></pre>
	</body>
</html>

