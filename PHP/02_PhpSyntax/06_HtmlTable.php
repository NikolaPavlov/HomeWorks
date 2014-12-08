<!DOCTYPE html>
<html>
	<head>
		<title>Table</title>
		<style type="text/css">
			#wrapper {
				width: 600px;
				margin: 0 auto;
			}
			table {
				border-collapse: collapse;
				font-size: 1.2rem;
			}
			td:nth-child(odd) {
				background-color: orange;
				padding: 5px;
			}
			td:nth-child(even) {
				text-align: right;
			}
		</style>
	</head>
	<body>
		<?php
			$input = array(
				'0' => array('Gosho', '0882-321-423', '24', 'Hadji Dimitar'),
				'1' => array('Pesho', '0884-888-888', '67', 'Suhata Reka'));
		?>
		<div id='wrapper'>
			<table>
				<tr>
					<td>Name</td>
					<td><?= $input['0'][0] ?></td>
				</tr>
				<tr>
					<td>Phone number</td>
					<td><?= $input['0'][1] ?></td>
				</tr>
				<tr>
					<td>Age</td>
					<td><?= $input['0'][2] ?></td>
				</tr>
				<tr>
					<td>Address</td>
					<td><?= $input['0'][3] ?></td>
				</tr>
			</table>
			<br>
			<br>
			<table>
				<tr>
					<td>Name</td>
					<td><?= $input['1'][0] ?></td>
				</tr>
				<tr>
					<td>Phone number</td>
					<td><?= $input['1'][1] ?></td>
				</tr>
				<tr>
					<td>Age</td>
					<td><?= $input['1'][2] ?></td>
				</tr>
				<tr>
					<td>Address</td>
					<td><?= $input['1'][3] ?></td>
				</tr>
			</table>
		</div>
	</body>
</html>