<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width,initial-scale=1"/>
	<title>Calor Latente</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
        <script>
	function calc_total() 
		{
			var tM = parseFloat(document.getElementById("cm").value);
			var tC = parseFloat(document.getElementById("cc").value);
			var tq = parseFloat(document.getElementById("cQ").value);
			var tR = document.getElementById("cr").value;
			if (tR === "Q (Calor transferido)") {
				respq = tM * tC;
				document.getElementById("cQ").value = respq;
			}
			if (tR === "m (massa)") {
				respm = tq / tC ;
				document.getElementById("cm").value = respm;
			}
			if (tR === "L (calor latente)") {
				respc = tq / tM;
				document.getElementById("cc").value = respc;
			}
		}
        </script>
</head>
<body>
<div id="olá">
<header id="cab">
	<h1>Calor Latente</h1>
	<h2>Aqui você achará as formulas básicas para calcular Calor Latente</h2>
	<p style="font-weight: 900;">Aqui não serão dadas expçicações de como utilizar as fórmulas, apenas uma forma prática de utiliza-las, (Pense que isso é como uma calculadora). Logo é nescessário conhecimento prévio sobre as matérias</p>
	Q = Calor transferido<br>
	m = massa<br>
	L = calor latente<br>
</header>
<form method="post" id="fContato" action="mailto:contato@cursoemvideo.com" oninput="calc_total();">
	<fieldset><legend>Qual fator a ser descoberto</legend>
	<p><label for="cini">Qual você quer saber? </label><select type="txt" name="tr" id="cr"/></p>
	<option>Q (Calor transferido)</option>
	<option>m (massa)</option>
	<option>L (calor latente)</option>
	</select>
	</fieldset>
	
	<fieldset id="tranferencia"><legend>Conta (Unidades do Brasil):</legend>
		<p><label for="cQ">Q:</label> <input type="text" name="tQ" id="cQ"/>cal</p>
		<p><label for="cm">m:</label> <input type="number" name="tm" id="cm"/>g</p>
		<p><label for="cc">L:</label> <input type="number" name="tc" id="cc"/>cal/g.C</p>
	</fieldset>
    <footer id="top">
	<p>Copyright &copy; 2024 - by Mateus E. Barbosa<br>
        "Redes sociais são para os fracos"<br>
        &emsp; &emsp; Barbosa, Mateus 2024<p>
    </footer>
</form>
</body>
</html>
