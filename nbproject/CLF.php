<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width,initial-scale=1"/>
	<title>Calor relacionado à Lei de Fourier</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
        <script>
	function calc_total() 
		{
			var tIni = parseFloat(document.getElementById("cini").value);
			var tFin = parseFloat(document.getElementById("cfin").value);
			var tM = parseFloat(document.getElementById("cm").value);
			var tC = parseFloat(document.getElementById("cc").value);
			var tq = parseFloat(document.getElementById("cQ").value);
                        var tl = parseFloat(document.getElementById("cl").value);
                        var ti = parseFloat(document.getElementById("ci").value);
                        var tf = parseFloat(document.getElementById("cf").value);
			var tR = document.getElementById("cr").value;
			if (tR === "Φ (Fluxo de Calor)") {
                            respq = [tM * tC * (tFin - tIni) * (tf - ti)] / tl;
                            document.getElementById("cQ").value = respq;
			}
			else if (tR === "k (Condutividade Térmica)") {
                            respm = tq /  (tC * (tFin - tIni) * (tf - ti)) * tl;
                            document.getElementById("cm").value = respm;
			}
			else if (tR === "A (Área)") {
                            respc = tq / ((tM * (tFin - tIni) * (tf - ti))) * tl;
                            document.getElementById("cc").value = respc;
			}
			else if (tR === "Temperatura inicial") {
                            respi = tq /  [(tC * tM) * (tf - ti) / tl] - tFin;
                            document.getElementById("cini").value = -respi;
			}
			else if (tR === "Temperatura final") {
                            respf = tq /  [(tC * tM) * (tf - ti) / tl] + tIni;
                            document.getElementById("cfin").value = respf;
			}
                        else if (tR === "l (Espessura da secção)") {
                            respl = [tC * tM * (tFin - tIni) * (tf - ti)] / tq;
                            document.getElementById("cl").value = respl;
                        }
                        else if (tR === "Tempo Inicial") {
                            respti = tq / [(tC * tM) * (tFin - tIni) / tl] - tf;
                            document.getElementById("ci").value = -respti;
                        }
                        else if (tR === "Tempo Final") {
                            resptf = tq / [(tC * tM) * (tFin - tIni) / tl] + ti;
                            document.getElementById("cf").value = resptf;
                        }
		}
        </script>
</head>
<body>
<div id="olá">
<header id="cab">
	<h1>Calor relacionado à Lei de Fourier</h1>
	<h2>Aqui você achará as formulas básicas para calcular Calor relacionado à Lei de Fourier</h2>
	<p style="font-weight: 900;">Aqui não serão dadas expçicações de como utilizar as fórmulas, apenas uma forma prática de utiliza-las, (Pense que isso é como uma calculadora). Logo é nescessário conhecimento prévio sobre as matérias</p>
	Φ = Fluxo de Calor<br>
	k = Condutividade Térmica<br>
	A = Área<br>
        l = Espessura da secção<br>
	&Delta;T = Variação de temperatura<br>
        &Delta;t = Variação de tempo
</header>
<form method="post" id="fContato" action="mailto:contato@cursoemvideo.com" oninput="calc_total();">
	<fieldset><legend>Qual fator a ser descoberto</legend>
	<p><label for="cini">Qual você quer saber? </label><select type="txt" name="tr" id="cr"/></p>
        <option>Φ (Fluxo de Calor)</option>
	<option>k (Condutividade Térmica)</option>
	<option>A (Área)</option>
        <option>l (Espessura da secção)</option>
	<option>Temperatura inicial</option>
	<option>Temperatura final</option>
        <option>Tempo Inicial</option>
        <option>Tempo Final</option>
	</select>
	</fieldset>
	
	<fieldset id="tranferencia"><legend>Conta (Unidades do Brasil):</legend>
                <p><label for="cQ">&Phi;:</label> <input type="text" name="tQ" id="cQ"/>W</p>
		<p><label for="cm">k:</label> <input type="number" name="tm" id="cm"/>W/m.°C</p>
		<p><label for="cc">A:</label> <input type="number" name="tc" id="cc"/>cm2</p>
                <p><label for="cl">l:</label> <input type="number" name="tl" id="cl"/>cm</p>
		<p><label for="cini">Temperatura Inicial:</label> <input type="number" name="tini" id="cini"/>graus °C</p>
		<p><label for="cfin">Temperatura Final:</label> <input type="number" name="tfin" id="cfin"/>graus °C</p>
                <p><label for="ci">Tempo Inicial:</label> <input type="number" name="ti" id="ci">s</p>
                <p><label for="cf">Tempo Final:</label> <input type="number" name="tf" id="cf">s</p>
	</fieldset>
    <footer id="top">
	<p>Copyright &copy; 2024 - by Mateus E. Barbosa<br>
        "Redes sociais são para os fracos"<br>
        &emsp; &emsp; Barbosa, Mateus 2024<p>
    </footer>
</form>
</body>
</html>