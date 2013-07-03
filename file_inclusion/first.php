
	 <?php 
		$a=10 ;
		echo "- - This is first file <br /> - - a=$a <br />";	// acessing global varibles
		include 'first_1.php' ;				//include first_1 file
		echo '- - back to first file<br/> ';
		include 'first_2.php' ;				//include first_2 file 
		echo '- - back to first file<br />';
	 	echo '- - end of first file <br />';
	?>

