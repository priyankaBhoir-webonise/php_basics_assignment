<html>
	<head>
		<title> test</title>
	</head>
	<body> <pre>
		<?php 
			
			$a=10;
			$b=2;
			function byref(&$a)				// pass by reference
			{	
				$b=&$a;
				$b=$b+10;
				
			}
			function byvalue($b)			// pass by value
			{	
				$b=$b+10;
				
			}
			echo "<br> before reference function value of a:$a<br>";
			byref($a);
			echo "after reference function value of a:$a<br>";

			echo "<br> before reference function value of b:$b<br>";
			byvalue($b);
			echo "after reference function value of b:$b<br>";
		?>
	</pre>
</body>
</html>
