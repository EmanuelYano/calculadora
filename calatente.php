<!DOCTYPE html>
<html>
		<?php include 'menu.php' ?>
		<title>Calor Latente</title>
	<body>
		<div class="box-resolution">
			<h1>Calor Latente</h1>
			<legend style="margin-top: 6.5%; margin-left: 4%">Selecione quais valores você possui</legend>
				<form action="calatente.php" method="POST">
					<script>
						function mostra_QeM()
						{
						document.getElementById('l1').style.display="block";
						document.getElementById('l2').style.display="none";
						document.getElementById('l3').style.display="none";
						}
						function mostra_QeL()
						{
						document.getElementById('l1').style.display="none";
						document.getElementById('l2').style.display="block";
						document.getElementById('l3').style.display="none";
						}
						function mostra_MeL()
						{
						document.getElementById('l1').style.display="none";
						document.getElementById('l2').style.display="none";
						document.getElementById('l3').style.display="block";
						}
					</script>
					<input type="radio" name="cl1" value="l1" onclick="mostra_QeM()" class="radio">
					<label>Quantidade de calor e massa do corpo.</label>

					<input type="radio" name="cl1" value="l2" onclick="mostra_QeL()" class="radio">
					<label>Quantidade de calor e calor latente.</label>

					<input type="radio" name="cl1" value="l3" onclick="mostra_MeL()" class="radio">
					<label>Massa do corpo e calor latente.</label>
					
					<form method="POST">
						<label id="l1" for="QeM" style="display:none">
							<legend>Digite os valores abaixo.</legend>							
								<input type="text" name="f1" placeholder="Quantidade de calor" id="QeM" class="input-cl"> 
								<input type="text" name="f2" placeholder="Massa do corpo" id="QeM" class="input-cl">			
								<input type="submit" value="Calcular" class="but-five">						
						</label>
					</form>
					<form method="POST">
						<label id="l2" for="QeL" style="display:none">
							<legend>Digite os valores abaixo.</legend>							
								<input type="text" name="f1" placeholder="Quantidade de calor" id="QeL" class="input-cl">
								<input type="text" name="f2" placeholder="Calor latente" id="QeL" class="input-cl">				
								<input type="submit" value="Calcular" class="but-five">
						</label>	
					</form>
					<form method="POST">
						<label id="l3" for="MeL" style="display:none">
							<legend>Digite os valores abaixo.</legend>							
								<input type="text" name="f1" placeholder="Massa do corpo" id="MeL" class="input-cl">
								<input type="text" name="f2" placeholder="Calor latente" id="MeL" class="input-cl">			
								<input type="submit" value="Calcular" class="but-five">
						</label>
					</form>
				</form>
			<div class="num-2">
				<p style="position: relative;top: -40px; font-size: 30px;">Resultado</p>
				<?php include 'server/formula.server.php'  ?>
			</div>
		</div>
	</body>
</html>