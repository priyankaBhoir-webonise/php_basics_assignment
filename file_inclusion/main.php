<!-- main file from which inclues other files-->
<html>
<body>
	<?php	
			echo '- This is main file <br />';
			include 'first.php';				//include first file 
			echo '- back to main file <br />';
			include 'second.php' ;  			//include second file
			echo '- back to main file <br />';
			echo '- end of main file<br/>' ;  
	?>
</body>
</html>
	
