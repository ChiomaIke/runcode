<html>

<body>

<h3>Grade corner</h3>

<?php
function scoreToGrade($score){
	if ($score <39){
	echo "F";
	}
	elseif ($score <49){
	echo "E";
	}
	elseif ($score <59){
	echo "D";
	}
	elseif ($score <69){
	echo "C";
	}
	elseif ($score <79){
	echo "B";
	}
	else echo "A";
}

scoreToGrade(50); //returns D

?>
</body>
</html>
