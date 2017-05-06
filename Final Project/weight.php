<!DOCTYPE html>

<html lang="en">
<head>
<meta charset-"utf-8">
<title>Jacob's Weight Calculator</title>
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
<h1>Jacob's Weight Calculator</h1>

<?php
$weight = $_GET['weight'];
$kilograms_weight = $weight * 0.453592;
$ounces_weight = $weight / 16;
$milligrams_weight = $weight * 453592;
printf("The following weights are equivalent");
echo "<p>Pounds: $weight";
echo "</br>Ounces: $ounces_weight";
echo "</br>Milligrams: $milligrams_weight";
echo "</br>Kilograms: $kilograms_weight</p>";
?>
</br>
<input type="button" onclick="location.href='index.html';" value="Return to the Home Page" />
<input type="button" onclick="location.href='temp.html';" value="Go to the Temperature Calculator" />
<input type="button" onclick="location.href='weight.html';" value="Return to the Weight Calculator" />
<input type="button" onclick="location.href='reg.html';" value="Go to the Regular Calculator" />
</body>
</html>
