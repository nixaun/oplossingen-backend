<?php
	function __autoload($class){
		include 'classes/'.$class.'-class.php';
	}

	$num = 150;
	$unit = 100;

	$calculate = new calculate($num, $unit);
?>

<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<style>
			td{
				padding: 10px;
				border: 2px solid black;
			}
			td:last-child{
				text-align: right;
			}
		</style>
	</head>
	<body>
		<table>
			<caption>How is <?= $num ?> in comparison to <?= $unit ?>: </caption>
			<tr>
				<td>Relative</td>
				<td><?= $calculate->relative ?></td>
			</tr>
			<tr>
				<td>Percentual</td>
				<td><?= $calculate->hundred ?>%</td>
			</tr>
			<tr>
				<td>Nominal</td>
				<td><?= $calculate->nominal ?></td>
			</tr>
		</table>
	</body>
</html>
