<!-- how to center html form -->
<html>
	<head>
		<meta charset="UTF-8">
		<title>FormData</title>
		<style>
			#wrapper{
				margin: 0 auto;
				width: 330px;
				border: 1px solid black;
			}
			form {
				padding: 5px;
				background-color: orange;
				display: inline-block;
				border: 2px solid black;
				box-shadow: 5px 5px 5px 5px;
			}
			.input{
				width: 290px;
				height: 30px;
				margin: 3px;
				border-radius: 7px;
				background-color: white;
				border: 3px solid black;
			}
			.input:hover {
				border: 3px solid red;
				border-radius: 7px;
			}
			.button {
				width: 40%;
				height: 30px;
				margin-top: 10px;
				margin-left: 30%;
				background-color: white;
				border: 3px solid black: ;
			}
			.button:hover{
				cursor: pointer;
				border: 3px solid red;
				border-radius: 7px;
			}

		</style>
	</head>
	<body>
		<div id="wrapper">
			<form method="POST">
				<input class="input" type="text" name="name" placeholder="Name..."><br>
				<input class="input" type="text" name="age" placeholder="Age..."><br>
				<input class="radio" type="radio" name="gender" value="male"> <label for="gender">Male</label><br>
				<input class="radio" type="radio" name="gender" value="female"> <label for="gender">Female</label><br>
				<input class="button" type="submit" value="submit" name="submit">
			</form>
			
			<?php
				if (isset($_POST['submit'])) {
					$name = $_POST['name'];
					$age = $_POST['age'];
					$gender = $_POST['gender'];
					echo 'My name is '. htmlentities($name) . '.';
					echo 'I\'am ' . htmlentities($age) . 'years old.';
					echo "I am $gender.";
				}
			?>
		</div>
	</body>
</html>