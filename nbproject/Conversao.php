<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Conversão de Unidades de Medida: Temperatura</title>
        <meta name="viewport" content="width=device-width,initial-scale=1"/>
        <link href="style.css" rel="stylesheet" type="text/css"/>
        <script>
	function calcular() {
        var tei = document.getElementById("cei").value;
        var tef = document.getElementById("cef").value;
        var valor1 = parseFloat(document.getElementById('valor1').value);
        if (tei === "Celsius (°C)" && tef === "Kelvin (K)") {
        var resck = valor1 + 273.15;
        document.getElementById('res').value = resck;
        }
        else if (tei === "Celsius (°C)" && tef === "Fahrenheit (°F)") {
        var rescf = (valor1 * 1.8) + 32;
        document.getElementById('res').value = rescf;
        }
        else if (tei === "Kelvin (K)" && tef === "Fahrenheit (°F)") {
        var reskf = (valor1 - 273.15) * 1.8 + 32;
        document.getElementById('res').value = reskf;
        }
        else if (tei === "Kelvin (K)" && tef === "Celsius (°C)") {
        var resck = valor1 - 273.15;
        document.getElementById('res').value = resck;
        }
        else if (tei === "Fahrenheit (°F)" && tef === "Celsius (°C)"){
        var resck = (valor1 - 32) / 1.8;
        document.getElementById('res').value = resck;
        }
        else if (tei === "Fahrenheit (°F)" && tef === "Kelvin (K)") {
        var resck = (valor1 - 32) / 1.8 + 273.15;
        document.getElementById('res').value = resck;
        }
    }
        </script>
    </head>
    <body>
        <div id="olá">
        <header id="cab">
        <h1>Conversão de Unidades de Medida: Temperatura</h1>
        <h2>Aqui será feita a Conversão entre: Celsius (°C), Kelvin (K) e Fahrenheit (°F)</h2>
        <p style="font-weight: 900;">Aqui não serão dadas expçicações de como utilizar as fórmulas, apenas uma forma prática de utiliza-las, (Pense que isso é como uma calculadora). Logo é nescessário conhecimento prévio sobre as matérias</p>
        </header>
        <form method="post" id="fContato" action="mailto:contato@cursoemvideo.com" oninput="calcular();"/>
        <fieldset><legend>Quais as escalas?</legend>
            <p><label for="cei">Qual a escala Inicial? </label><select type="text" name="tei" id="cei" /></p>
            <option>Celsius (°C)</option>
            <option>Kelvin (K)</option>
            <option>Fahrenheit (°F)</option>
            </select>
            <p><label for="cei">Qual a escala Final? </label><select type="text" name="tef" id="cef" /></p>
            <option>Celsius (°C)</option>
            <option>Kelvin (K)</option>
            <option>Fahrenheit (°F)</option>
            </select>
        </fieldset>
        <fieldset><legend>Conversão (AMÉM!)</legend>
        <p><label for="valor1">Unidade Inicial:</label><input type="text" name="valor1" id="valor1" /></p>
        <p><label for="res">Unidade Final:</label><input type="text" name="res" id="res" /></p>
        </fieldset>
    <footer id="top">
	<p>Copyright &copy; 2024 - by Mateus E. Barbosa<br>
        "Redes sociais são para os fracos"<br>
        &emsp; &emsp; Barbosa, Mateus 2024<p>
    </footer>
</html>