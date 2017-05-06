<!DOCTYPE html>

<html lang="en">
<head>
<meta charset-"utf-8">
<title>Jacob's Temperature Calculator</title>
<style type="text/css">
body {
		background: white;
		color: green;
		font-family: Tahoma, Geneva, sans-serif;
		font-size: large;
		padding: 10px;
}
h1 {
		font-size: 24pt;
		font-style: normal;
		font-weight: bolder;
		font-variant: small-caps;
}
</style>
</head>

<body>
<h1>Jacob's Temperature Calculator</h1>

<?php
$temp = $_GET['temp'];
$celsius_temp = 5 * ($temp - 32) / 9.0;
$kelvin_temp = $celsius_temp + 273;
printf("The following temperatures are equivalent");
echo "<p>Fahrenheit: $temp";
echo "<br>Celsius: $celsius_temp";
echo "<br>Kelvin: $kelvin_temp</p>";
?>
</br>
<input type="button" onclick="location.href='index.html';" value="Return to the Home Page" />
<input type="button" onclick="location.href='temp.html';" value="Return to Temperature Calculator" />
<input type="button" onclick="location.href='weight.html';" value="Go to the Weight Calculator" />
<input type="button" onclick="location.href='reg.html';" value="Go to the Regular Calculator" />
</body>
</html>
