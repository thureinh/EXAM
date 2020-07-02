<?php
	
	function increaseChar($dd = 'A00', $time = 10)
	{
		for ($i=0; $i < $time; $i++) { 
			echo $dd++ . "\n";
		}
	}
	increaseChar();
?>