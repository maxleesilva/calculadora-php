<meta charset="utf-8">
	<form action="if.php" method="get">
 
            Primeiro numero: 
            <input name="num1" type="text" /> 
            <br /> <br /> 
             
            Segundo numero: 
            <input name="num2" type="text" /> 
            <br /> <br /> 
             
            Operacao:  
            <select name="operacao">
				<option value="soma"> + </option>
				<option value="subtracao"> - </option>
				<option value="multiplicacao"> * </option>
				<option value="divisao"> / </option>
            <br /> <br /> 
             
            <input type="submit" value="submeter" />     
            <br /> <br /> 
             
        </form>
	<?php 
		$x = @$_REQUEST["num1"];
		$y = @$_REQUEST["num2"];
		$op = @$_REQUEST["operacao"];
		if($op=="soma")
		$z = $x + $y;
		elseif($op=="subtracao")
		$z = $x - $y;
		elseif($op=="multiplicacao")
		$z = $x*$y;
		else
		$z = $x/$y;
		echo "O resultado é: $z";
	?>