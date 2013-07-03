<!-- using global variables and local variables. as well as working with static variables-->
<html>
	<head>
		<title> test</title>
	</head>
	<body> <pre>
		<?php 
			
			$a='xyz';
			$b=2;
			
			function fun1() {
				
   				$name='webonise';
				
				echo "Local variable name: $name<br>";
				echo "varible a but still local variable : $a<br>";								// will not show anything
				global $a;
				echo "Global variable a: $a<br>";											// acesssing global variables using keyword
				echo "Global variable without using Global keyword : $GLOBALS[b] <br>";			// accessing global variables in the function using $GLOBALS 
			}
			function static_var() {						// using static variable
   				static $var=0;
				$var =$var +1;
				echo " Static var=$var <br>";
			}
			echo "<br>";
			echo "variable a outside function:$a <br>";
			echo "variable b outside function:$b <br>";
			echo "Calling function<br>";
			fun1();
			echo "<br> function for static variable";
			static_var();
			static_var();
			echo "<br>printing GLOBAL <br>";
			print_r($GLOBALS);
		?>
	</pre>
</body>
</html>
