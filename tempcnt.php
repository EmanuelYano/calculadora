<!DOCTYPE html>
<html>
	<?php include 'head.php' ?>
	<?php include 'menu.php' ?>
	<title>Conversão de numeros</title>
	<body>
		<div class="box-resolution">
			<h1>Temperatura</h1>
			<form method="POST">
				<div style="position: absolute; top: 10%; left: 4%;">
					<legend>Selecione a temperatura que deseja obter</legend>
						<label>
							<input type="radio" name="nt" value="f" >
						Fahreinheit
						</label>
						<label>
							<input type="radio" name="nt" value="c" style="margin-left: 8px;">
						Celsius</label><br/>
				</div>
					<div style="position: absolute; top: 34%; left: 20%;">
						<input type="text" name="t" class="input-tmp" placeholder="Digite a temperatura">
						<input type="submit" value="Calcular">	
					</div><br/>
			
			</form>
			<div class="num-1">
				<p style="position: relative; top:-38px; font-size:30px;">Resultado</p>
				<?php include 'server/cvt.server.php'  ?>
			</div>
		<div/>
	</body>		
</html>