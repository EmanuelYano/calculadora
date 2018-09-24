<!DOCTYPE html>
<html>
		<?php include 'menu.php' ?>
		<title>Calor Específico</title>
	<body>
		<div class="">
			<div class=" ">
				<div class="">
					<div class="box-resolution">
						<h1>Calor Específico</h1>
						<legend style="margin-top: 6.5%; margin-left: 4%">Selecione qual opção você deseja</legend>
								<script >
									function mostra_Q() {
										document.getElementById('l1').style.display="block";
										document.getElementById('l2').style.display="none";
										document.getElementById('l3').style.display="none";
										document.getElementById('l4').style.display="none";
										document.getElementById('l5').style.display="none";
									}
									function mostra_Q2() {
										document.getElementById('l1').style.display="none";
										document.getElementById('l2').style.display="block";
										document.getElementById('l3').style.display="none";
										document.getElementById('l4').style.display="none";
										document.getElementById('l5').style.display="none";
									}
									function mostra_Q3() {
										document.getElementById('l1').style.display="none";
										document.getElementById('l2').style.display="none";
										document.getElementById('l3').style.display="block";
										document.getElementById('l4').style.display="none";
										document.getElementById('l5').style.display="none";
									}
									function mostra_Q4() {
										document.getElementById('l1').style.display="none";
										document.getElementById('l2').style.display="none";
										document.getElementById('l3').style.display="none";
										document.getElementById('l4').style.display="block";
										document.getElementById('l5').style.display="none";
									}
									function mostra_Q5() {
										document.getElementById('l1').style.display="none";
										document.getElementById('l2').style.display="none";
										document.getElementById('l3').style.display="none";
										document.getElementById('l4').style.display="none";
										document.getElementById('l5').style.display="block";
									}																	
								</script>
								<input type="radio" name="ce1" value="l1" onclick="mostra_Q()" class="radio">
								<label>Calcular a quantidade de calor sensível</label>
								<input type="radio" name="ce1" value="l2" onclick="mostra_Q2()" class="radio">
								<label>Calcular o calor específico</label><br />
								<input type="radio" name="ce1" value="l3" onclick="mostra_Q3()" class="radio">
								<label>Calcular a massa de um corpo</label>
								<input type="radio" name="ce1" value="l4" onclick="mostra_Q4()" class="radio">
								<label>Calcular a temperatura inicial</label><br />
								<input type="radio" name="ce1" value="l5" onclick="mostra_Q5()" class="radio">
								<label>Calcular a temperatura final</label>
								
								<form method="POST" action="caespecifico.php">
									<label id="l1" for="Q" style="display:none">
										<legend>Digite os valores abaixo</legend>
											<input type="text" name="g1" placeholder="Massa do corpo" id="Q" class="input-ce">
											<input type="text" name="g2" placeholder="Calor sensível" id="Q" class="input-ce">
											<input type="text" name="g3" placeholder="Temperatura inicial" id="Q" class="input-ce">
											<input type="text" name="g3_1" placeholder="Temperatura final" id="Q" class="input-ce">
											<button type="submit" class="but-four" name="ce1" value="l1"> Calcular </button>
									</label>
								</form>
								<form method="POST" action="caespecifico.php">
									<label id="l2" for="Q2" style="display:none">
										<legend>Digite os valores abaixo</legend>
											<input type="text" name="g1" placeholder="Q de calor específico" id="Q2" class="input-ce">
											<input type="text" name="g2" placeholder="Massa do corpo" id="Q2" class="input-ce">
											<input type="text" name="g3" placeholder="Temperatura inicial" id="Q2" class="input-ce">
											<input type="text" name="g3_1" placeholder="Temperatura final" id="Q2" class="input-ce">
											<button type="submit" class="but-four" name="ce1" value="l2"> Calcular </button>
									</label>
								</form>
								<form method="POST" action="caespecifico.php">
									<label id="l3" for="Q3" style="display:none">
										<legend>Digite os valores abaixo</legend>
											<input type="text" name="g1" placeholder="Q de calor específico" id="Q3" class="input-ce">
											<input type="text" name="g2" placeholder="Calor sensível" id="Q3" class="input-ce">
											<input type="text" name="g3" placeholder="Temperatura inicial" id="Q3" class="input-ce">
											<input type="text" name="g3_1" placeholder="Temperatura final" id="Q3" class="input-ce">
											<button type="submit" class="but-four" name="ce1" value="l3"> Calcular </button>
									</label>
								</form>
								<!---<label id="l0" style="display:none">
									<input type="radio" name="t" value="z" onclick="mostra_Q5()" class="radio">
									Temperatura final
								</label>
								<label id="l00" style="display:none">
									<input type="radio" name="t" value="z1" onclick="mostra_Q6()" class="radio" >
									Temperatura inicial
								</label>---->
								<form method="POST" action="caespecifico.php">									
									<label id="l4" for="Q4" style="display:none">
										<legend>Digite os valores abaixo</legend>
											<input type="text" name="g1" placeholder="Q de calor específico" id="Q4" class="input-ce">
											<input type="text" name="g2" placeholder="Calor sensível" id="Q4" class="input-ce">
											<input type="text" name="g3" placeholder="Massa do corpo" id="Q4" class="input-ce">
											<input type="text" name="g3_1" placeholder="Temperatura final" id="Q4" class="input-ce">
											<button type="submit" class="but-four" name="ce1" value="l4"> Calcular</button>						
									</label>
								</form>
								<form method="POST" action="caespecifico.php">									
									<label id="l5" for="Q5" style="display:none">
										<legend>Digite os valores abaixo</legend>
											<input type="text" name="g1" placeholder="Q de calor específico" id="Q5" class="input-ce">
											<input type="text" name="g2" placeholder="Calor sensível" id="Q5" class="input-ce">
											<input type="text" name="g3" placeholder="Massa do corpo" id="Q5" class="input-ce">
											<input type="text" name="g3_1" placeholder="Temperatura inicial" id="Q5" class="input-ce">
											<button type="submit" class="but-four" name="ce1" value="l5"> Calcular</button>						
									</label>
								</form>
						<div class="num-3">
							<p style="position: relative;top: -40px; font-size: 30px;">Resultado</p>
							<?php include 'server/espcf.server.php'  ?>
						</div>
					</div>
				</div>
			</div>
		</div>	
	</body>
</html>