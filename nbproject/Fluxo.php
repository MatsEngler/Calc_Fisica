<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width,initial-scale=1"/>
	<title>Fluxo de Calor</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
        <script>
	function calc_total() 
		{
			var tIni = parseFloat(document.getElementById("cini").value);
			var tFin = parseFloat(document.getElementById("cfin").value);
			var tM = parseFloat(document.getElementById("cm").value);
			var tq = parseFloat(document.getElementById("cQ").value);
			var tR = document.getElementById("cr").value;
			if (tR === "Q (Calor transferido)") {
				respq = tM* (tFin - tIni);
				document.getElementById("cQ").value = respq;
			}
			if (tR === "Φ (Fluxo de Calor)") {
				respm = tq / tFin - tIni;
				document.getElementById("cm").value = respm;
			}
			if (tR === "Tini (tempo inicial)") {
				respi = tq / tM - tFin;
				document.getElementById("cini").value = -respi;
			}
			if (tR === "Tfin (tempo final)") {
				respf = tq / tM + tIni;
				document.getElementById("cfin").value = respf;
			}
		}
        </script>
</head>
<body>
<div id="olá">
<header id="cab">
	<h1>Fluxo de Calor</h1>
	<h2>Aqui você achará as formulas básicas para calcular Fluxo de Calor</h2>
	<p style="font-weight: 900;">Aqui não serão dadas expçicações de como utilizar as fórmulas, apenas uma forma prática de utiliza-las, (Pense que isso é como uma calculadora). Logo é nescessário conhecimento prévio sobre as matérias</p>
	Φ = Fluxo de Calor<br>
        Q = Calor transferido<br>
	&Delta;t = Variação de temperatura<br>
</header>
<form method="post" id="fContato" action="mailto:contato@cursoemvideo.com" oninput="calc_total();">
	<fieldset><legend>Qual fator a ser descoberto</legend>
	<p><label for="cini">Qual você quer saber? </label><select type="txt" name="tr" id="cr"/></p>
        <option>Φ (Fluxo de Calor)</option>
	<option>Q (Calor transferido)</option>
	<option>Tini (tempo inicial)</option>
	<option>Tfin (tempo final)</option>
	</select>
	</fieldset>
	
	<fieldset id="tranferencia"><legend>Conta (Unidades do Brasil):</legend>
		<p><label for="cQ">Q:</label> <input type="text" name="tQ" id="cQ"/>calorias</p>
		<p><label for="cm">Φ:</label> <input type="number" name="tm" id="cm"/>Kg</p>
		<p><label for="cini">Tempo Inicial:</label> <input type="number" name="tini" id="cini"/>graus °C</p>
		<p><label for="cfin">Tempo Final:</label> <input type="number" name="tfin" id="cfin"/>graus °C</p>
	</fieldset>
    <footer id="top">
	<p>Copyright &copy; 2024 - by Mateus E. Barbosa<br>
        "Redes sociais são para os fracos"<br>
        &emsp; &emsp; Barbosa, Mateus 2024<p>
    </footer>
</form>
</body>
</html>