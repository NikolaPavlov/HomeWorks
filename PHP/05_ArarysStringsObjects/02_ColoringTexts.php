<!-- Problem 2. Coloring Texts
Write a PHP program TextColorer.php that takes a text from a
textfield, colors each character according to its ASCII value
and prints the result. If the ASCII value of a character is odd,
the character should be printed in blue. If it’s even, it should
be printed in red.  -->

<html>
	<head>
		<meta charset="UTF-8">
		<title>Coloring Text</title>
	</head>
	<body>
		<form action="" method="POST">
			<textarea name="txt" cols="30" rows="10"></textarea><br>
			<input type="submit" value="Color text">
		</form>
		<?php
			if (isset($_POST['txt'])) {
				$txt = $_POST['txt'];
				preg_match_all("/\S/", $txt, $matches);//check $txt for regex match and put result into $matches

				foreach ($matches[0] as $symbol) {
					if (ord($symbol) % 2 != 0) {
						echo "<span style='color: blue'>$symbol </span>";
					} else {
						echo "<span style='color: red'>$symbol </span>";
					}
				}
			}
		?>
	</body>
</html>