<!-- arrays-->
<html>
	<head>
		<title> test</title>
	</head>
	<body> <pre>
		    <?php 				
			$array = array(									// assosiative arrays
   				 "fname" => "priyanka",
    				"lname" => "bhoir",
				);
			echo "<br>printing array";
			print_r($array);									//using print_r function
			echo " <br />printing using  foreach<br>";
			foreach( $array  as $key => $value )					// using for each
			{
				echo " $key => $value <br /> ";
			}
			
			$multi_array=array( 1, 2, 3, 4, array(1,2,3,4));			// multidimentional array
			$multi_array2=array(array(11,22,33,44) ,array(55,"yags",true,5.5,66,77,88));
			echo 'Array with same data type<br />';
			var_dump($multi_array);
			echo "Array with different different data types <br />";
			var_dump($multi_array2);
		?>
</pre>
</body>
</html>
