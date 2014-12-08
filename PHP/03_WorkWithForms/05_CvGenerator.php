<!DOCTYPE html>
<html>
	<head>
		<title>CvGenerator</title>
	</head>
	<body>
		<!-- first form -->
		<form action="" method="POST" accept-charset="utf-8">
			<fieldset>
				<legend>Personal Information</legend>
				<input type="text" name="firstName" value="" placeholder="First Name"><br>
				<input type="text" name="lastName" value="" placeholder="Last Name"><br>
				<input type="email" name="email" value="" placeholder="Email"><br>
				<input type="number" name="phone" value="" placeholder="Phone Number"><br>
				<label>Female</label><input type="radio" name="gender" value="Female" placeholder="">
				<label>Male</label><input type="radio" name="gender" value="Male" placeholder=""><br>
				<label for="">Birth Date</label><br>
				<input type="datetime" name="" value="" placeholder="dd/mm/yyyy"><br>
				<label>Nationality</label><br>
				<select>
					<option>Bulgarian</option>
					<option>Gypsy</option>
					<option>Persian</option>
					<option>Indian</option>
				</select>
			</fieldset>
		</form>
		<!-- second form -->
		<form action="" method="GET" accept-charset="utf-8">
			<fieldset>
				<legend>Last Work Position</legend>
				<label>Company Name</label>
				<input type="text" name="companyName" value="" placeholder=""><br>
				<label>From</label>
				<input type="datetime" name="startDateExp" value="" placeholder="dd/mm/yyyy"><br>
				<label>To</label>
				<input type="datetime" name="endDateExp" value="" placeholder="dd/mm/yyyy">
			</fieldset>
		</form>
		<!-- third form -->
		<form action="" method="GET" accept-charset="utf-8">
			<fieldset>
				<legend>Computer Skills</legend>
				<label>Programming Languages</label><br>
				<input type="text" name="programmingLang" value="" placeholder="">
				<select name="lvlProgrammingLang">
					<option value="">Begginer</option>
					<option value="">Intermediate</option>
					<option value="">Expert</option>
				</select><br>
				<input type="submit" name="removeLang" value="Remove Language" placeholder="">
				<input type="submit" name="addLang" value="Add Language" placeholder="">
			</fieldset>
		</form>
		<!-- fourth form -->
		<form action="" method="GET" accept-charset="utf-8">
			<fieldset>
				<legend>Other Skills</legend>
				<label>Languages</label><br>
				<input type="test" name="Languages" value="" placeholder="">
				<select name="">
					<option value="">Comperhension</option>
				</select>
				<select name="">
					<option value="">Reading</option>
				</select>
				<select>
					<option value="">Writing</option>}
				</select><br>
				<input type="submit" name="" value="Remove Language" placeholder="">
				<input type="submit" name="" value="Add Language" placeholder=""><br>
				<label>Driver`s License</label><br>
				<label>B</label><input type="checkbox" name="driverLicense" value="B" placeholder="">
				<label>A</label><input type="checkbox" name="driverLicense" value="A" placeholder="">
				<label>C</label><input type="checkbox" name="driverLicense" value="C" placeholder="">
			</fieldset>
			<input type="submit" name="generateCV" value="Generate CV" placeholder="">
		</form>

		<!-- =0=0=0=0=0=0=0=0=0=0=0=0=0=0=0=0=0=0=0=0=0=0=0=0=0=0=0=0 -->
		<!-- print the output -->
<?php
if (isset($_POST['generateCV'])) {
	$firstName = $_POST['firstName'];
}
?>

		<table border="1">
			<thead>
				<tr>
					<th colspan="2">Personal Information</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>First Name</td>
					<td><?=htmlspecialchars($firstName)?></td>
				</tr>
			</tbody>
		</table>
	</body>
</html>