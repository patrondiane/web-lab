<!DOCTYPE html>
<html>
    <head>
        <title>Notre première instruction : echo</title>
        <meta charset="utf-8" />
    </head>
    <body>

    	<form action="webCalculator.php" method="get">
    		Num1 : <input type="number" name="num1">
    		<br>
    		Num2 : <input type="number" name="num2">
    		<input type="submit">
    	</form>

        <?php
        $num1 = $_GET["num1"];
        $num2 = $_GET["num2"];
		

		echo $num1 + $num2;

		echo $num1 - $num2;
	
		echo $num1 / $num2;
		
		echo $num1 % $num2;

		if($num1 == 0 && $num1 / $num2){
			echo "0";
		}
		elseif($num2 == 0 && $num1 / $num2){
			echo "Incorrect or incomplete data";
		}
		
		
		
        ?>
    </body>
</html>