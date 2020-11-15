<?php
	$n=0;
	for($i=1;$i<=50;$i++){
		$j=$i;
		$prima=0;
		while($j>0 && $prima<=2){
			if($i%$j==0){
				$prima++;
			}
			$j--;
		}
		if($prima==2){
			$prima_number[$n]=$i;
			$n++;
		}
	}
	echo "Bilangan Prima dari 1- 50 : [$prima_number[0]";
	for($i=1;$i<$n;$i++){
		echo ", $prima_number[$i]";
	}
	echo "]";
?>