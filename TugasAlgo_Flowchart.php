<!DOCTYPE html>
<html>
<head>
	<title>Test 1</title>
</head>
<body>
	<h1>Welcome</h1>
	<?php
	//palindrome
		$word = 'MaLAm';
		$words = strtolower($word);
		if ($words == strrev($words) ) {
			echo 'Palindrome';
		}else{
			echo 'Bukan Palindrome';
		}

		echo '<hr>';
		
		//reverse
		$sntnce = 'Bagaskara is Human';
		$arr = explode(' ',$sntnce);
		$reverse = array_reverse($arr);
		$implode = implode(' ',$reverse);
		// echo implode(' ',$reverse);
		echo $implode;

		echo '<hr>';

		//coba palindrome reverse
		$ps1 = 'Malam Malam';
		$ps2 = strtolower($ps1);
		$ex = explode(' ',$ps2);
		$rev = array_reverse($ex);
		$im = implode(' ',$rev);
		if ($ps2 == $im) {
			echo 't';
		}else {
			echo 'f';
		}
		?>
</body>
</html>