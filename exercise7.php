<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Exercise 7</title>
</head>
<body>

	<?php
echo "<table border='1'><br />";


for ($row = 0; $row < 7; $row++) {
   echo "<tr>";

   for ($col = 1; $col <= 7; $col++) {
        echo "<td>", ($col + ($row * 7)), "</td>";
   }

   echo "</tr>";
}

echo "</table>";
?>

</body>
</html>