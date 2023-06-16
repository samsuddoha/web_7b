<?php

	$age=array(18, 19, 20, 21, 20, 23, 24, 18, 25);
	$sum=0;
	function isPrime($a){
		for($i=2;$i<$a/2;$i++)
		{
			if($a%$i==0)
				return 0;
		}
		return 1;
	}
	foreach($age as $x)
	{
		if(isPrime($x))
			$sum=$sum+$x;
	}
	echo "Sum of all ages those are prime: ".$sum;


?>