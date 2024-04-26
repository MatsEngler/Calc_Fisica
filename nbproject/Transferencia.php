<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width,initial-scale=1"/>
	<title>Transferencia de Calor</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
        <script>
	function calc_total() 
		{
			var tIni = parseFloat(document.getElementById("cini").value);
			var tFin = parseFloat(document.getElementById("cfin").value);
			var tM = parseFloat(document.getElementById("cm").value);
			var tC = parseFloat(document.getElementById("cc").value);
			var tq = parseFloat(document.getElementById("cQ").value);
			var tR = document.getElementById("cr").value;
			if (tR === "Q (Calor transferido)") {
				respq = tM * tC * (tFin - tIni);
				document.getElementById("cQ").value = respq;
			}
			if (tR === "m (massa)") {
				respm = tq /  (tC * (tFin - tIni));
				document.getElementById("cm").value = respm;
			}
			if (tR === "c (calor específico)") {
				respc = tq / (tM * (tFin - tIni));
				document.getElementById("cc").value = respc;
			}
			if (tR === "Tini (temperatura inicial)") {
				respi = tq /  (tC * tM) - tFin;
				document.getElementById("cini").value = -respi;
			}
			if (tR === "Tfin (temperatura final)") {
				respf = tq /  (tC * tM) + tIni;
				document.getElementById("cfin").value = respf;
			}
		}
        </script>
</head>
<body>
<div id="olá">
<header id="cab">
	<h1>Transferência de Calor</h1>
	<h2>Aqui você achará as formulas básicas para calcular a tranferencia de Calor, (E de quebra a massa, calor específico e &Delta;T)</h2>
	<p style="font-weight: 900;">Aqui não serão dadas expçicações de como utilizar as fórmulas, apenas uma forma prática de utiliza-las, (Pense que isso é como uma calculadora). Logo é nescessário conhecimento prévio sobre as matérias</p>
	Q = Calor transferido<br>
	m = massa<br>
	c = calor específico<br>
	&Delta;t = Variação de temperatura<br>
</header>
<form method="post" id="fContato" action="mailto:contato@cursoemvideo.com" oninput="calc_total();">
	<fieldset><legend>Qual fator a ser descoberto</legend>
	<p><label for="cini">Qual você quer saber? </label><select type="txt" name="tr" id="cr"/></p>
	<option>Q (Calor transferido)</option>
	<option>m (massa)</option>
	<option>c (calor específico)</option>
	<option>Tini (temperatura inicial)</option>
	<option>Tfin (temperatura final)</option>
	</select>
	</fieldset>
	
	<fieldset id="tranferencia"><legend>Conta (Unidades do Brasil):</legend>
		<p><label for="cQ">Q:</label> <input type="text" name="tQ" id="cQ"/>calorias</p>
		<p><label for="cm">m:</label> <input type="number" name="tm" id="cm"/>Kg</p>
		<p><label for="cc">c:</label> <input type="number" name="tc" id="cc"/>c/kg.C</p>
		<p><label for="cini">Temperatura Inicial:</label> <input type="number" name="tini" id="cini"/>graus °C</p>
		<p><label for="cfin">Temperatura Final:</label> <input type="number" name="tfin" id="cfin"/>graus °C</p>
	</fieldset>
    <footer id="top">
	<p>Copyright &copy; 2024 - by Mateus E. Barbosa<br>
        "Redes sociais são para os fracos"<br>
        &emsp; &emsp; Barbosa, Mateus 2024<p>
    </footer>
</form>
</body>
</html>