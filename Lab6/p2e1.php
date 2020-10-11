<!DOCTYPE html>
<html>
<head>
	<title>Lab6 - Part2 - Exercise 1</title>
</head>
<body>
	<a href="index.html">Back</a>

	<table border="1">
		<tr>
			<th>Code</th>
			<th>Result (initial x = 4)</th>
			<?php $x = 4; ?>
		</tr>
		<tr>
			<td>x = x + 1</td>
			<td><?php print $x = $x + 1; ?></td>
		</tr>
		<tr>
			<td>x += 1</td>
			<td><?php print $x += 1; ?></td>
		</tr>
		<tr>
			<td>x++</td>
			<td><?php $x++; /* for postincrement value should incremented and then printed */ print $x; ?></td>
		</tr>
		<tr>
			<td>++x</td>
			<td><?php print ++$x; ?></td>
		</tr>
	</table>
</body>
</html>