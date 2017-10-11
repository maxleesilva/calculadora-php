<meta charset="utf-8">
<style>
    div#calculadora {
    text-align: center;
	width: 190px;
	background-color: grey;
	box-shadow: 0px 0px 10px black;
	padding: 10px;
    }
</style>

	
    <div id="calculadora">
    <form action="calculo.php" method="get">
    
            <h1>Vamos Calcular!</h1>
            <h3>Primeiro número: 
                <input name="num1" type="int" /></h3> 
            <h3>Segundo número: 
                <input name="num2" type="int" /></h3> 
             
            <h4>Operação:
            <select name="operacao">
				<option value="soma"> + </option>
				<option value="subtracao"> - </option>
				<option value="multiplicacao"> * </option>
				<option value="divisao"> / </option>
            </select></h4> 
            <input type="submit" value="Calcular" />     
            <br/>
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
		@$z = $x/$y;
		echo "<h4>O resultado é: $z</h4>";
	?>
    </div>