<!DOCTYPE html>
<html lang="pt-br">
	<?php include 'head.php' ?>
	<?php include 'menu.php' ?>
	<title>Calculadora</title>
	<body>
		<div class="box-resolution">
			<h1>Calculadora</h1>			
				<div class="box-cal">
					<form method="POST" action="index.php">
						<input type="text" name="n1">
						<div class="box-radio">
							<input type="radio" name="op" value="soma">
							<label>+</label>
							<input type="radio" name="op" value="sub">
							<label>-</label>
							<input type="radio" name="op" value="div">
							<label>/</label>
							<input type="radio" name="op" value="mult">
							<label>*</label>
						</div>
						<input type="text" name="n2">	

						<input type="submit" value="Calcular" style="position: relative; left:25%;">
					</form>
				</div>
				<div>
					
					<div class="num">
						<p style="position: relative;left: 50%;top: -100px; font-size: 30px;">Resultado</p>
						<p style="background-color: grey; width:70%; border-radius: 10px 10px 10px; margin-top: 10%; margin-left: 5%; text-align: center; font-size: 20px;"><?php include 'server/server.php'; ?></p>
					</div>						
				</div>
					
		</div>		
	</body>
</html>