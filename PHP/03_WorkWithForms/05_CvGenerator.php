<!DOCTYPE html>
<html>
	<head>
		<title>CvGenerator</title>
	</head>
	<body>
		<!-- first form -->
		<form action="#" method="POST" accept-charset="utf-8">
			<fieldset>
				<legend>Personal Information</legend>
				<input type="text" name="firstName" placeholder="First Name"><br>
				<input type="text" name="lastName" placeholder="Last Name"><br>
				<input type="email" name="email" placeholder="Email"><br>
				<input type="text" name="phone" placeholder="Phone Number"><br>
				<label>Female</label><input type="radio" name="gender" value="Female">
				<label>Male</label><input type="radio" name="gender" value="Male" placeholder=""><br>
				<label>Birth Date</label><br>
				<input type="datetime" name="birthDate" placeholder="dd/mm/yyyy"><br>
				<label>Nationality</label><br>
				<select name="nationality">
					<option>Bulgarian</option>
					<option>Gypsy</option>
					<option>Persian</option>
					<option>Indian</option>
				</select>
			</fieldset>
			<!-- second form -->
			<fieldset>
				<legend>Last Work Position</legend>
				<label>Company Name</label>
				<input type="text" name="companyName" placeholder=""><br>
				<label>From</label>
				<input type="datetime" name="startDateExp" placeholder="dd/mm/yyyy"><br>
				<label>To</label>
				<input type="datetime" name="endDateExp" placeholder="dd/mm/yyyy">
			</fieldset>
			<!-- third form -->
			<fieldset>
				<legend>Computer Skills</legend>
				<label>Programming Languages</label><br>
				<input type="text" name="programmingLang[]" placeholder="">
				<select name="lvlProgrammingLang[]">
					<option value="Beginner">Begginer</option>
					<option value="Intermediate">Intermediate</option>
					<option value="Expert">Expert</option>
				</select><br>
				<input type="button" name="removeLang" value="Remove Language" onclick="removeLang()">
				<input type="button" name="addLang" value="Add Language" onclick="addLang()">
			</fieldset>
			<!-- fourth form -->
			<fieldset>
				<legend>Other Skills</legend>
				<label>Languages</label><br>
				<input type="text" name="lang[]">
				<select name="comperhension[]">
					<option value="Beginner">Beginner</option>
					<option value="Intermediate">Intermediate</option>
					<option value="Expert">Expert</option>
				</select>
				<select name="reading[]">
					<option value="Beginner">Beginner</option>
					<option value="Intermediate">Intermediate</option>
					<option value="Expert">Expert</option>
				</select>
				<select name="writing[]">
					<option value="Beginner">Beginner</option>}
					<option value="Intermediate">Intermediate</option>}
					<option value="Expert">Expert</option>}
				</select><br>
				<input type="button" name="" value="Remove Language" onclick="removeLang()">
				<input type="button" name="" value="Add Language" onclick="addLang()"><br>
				<label>Driver`s License</label><br>
				<label>B</label><input type="checkbox" name="driverLicense" value="B">
				<label>A</label><input type="checkbox" name="driverLicense" value="A">
				<label>C</label><input type="checkbox" name="driverLicense" value="C">
			</fieldset>
			<input type="submit" name="generateCV" value="Generate CV">
		</form>
		<br>
		<!-- =0=0=0=0=0=0=0=0=0=0=0=0=0=0=0=0=0=0=0=0=0=0=0=0=0=0=0=0 -->
		<!-- print the output -->
<?php
if (isset($_POST['firstName']) &&
	isset($_POST['lastName']) &&
	isset($_POST['email']) &&
	isset($_POST['phone']) &&
	isset($_POST['gender']) &&
	isset($_POST['birthDate']) &&
	isset($_POST['nationality']) &&
	isset($_POST['companyName']) &&
	isset($_POST['startDateExp']) &&
	isset($_POST['endDateExp']) &&
	isset($_POST['programmingLang']) &&
	isset($_POST['lvlProgrammingLang']) &&
	isset($_POST['lang']) &&
	isset($_POST['comperhension']) &&
	isset($_POST['reading']) &&
	isset($_POST['writing'])
) {

	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$gender = $_POST['gender'];
	$birthDate = $_POST['birthDate'];
	$nationality = $_POST['nationality'];
	$companyName = $_POST['companyName'];
	$startDateExp = $_POST['startDateExp'];
	$endDateExp = $_POST['endDateExp'];
	$programmingLang = $_POST['programmingLang'];
	$lvlProgrammingLang = $_POST['lvlProgrammingLang'];
	$lang = $_POST['lang'];
	$comperhension = $_POST['comperhension'];
	$reading = $_POST['reading'];
	$writing = $_POST['writing'];
}
?>
<!-- generate 1st table -->
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
				<tr>
					<td>Last Name</td>
					<td><?=htmlspecialchars($lastName)?></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><?=htmlspecialchars($email)?></td>
				</tr>
				<tr>
					<td>Phone Number</td>
					<td><?=htmlspecialchars($phone)?></td>
				</tr>
				<tr>
					<td>Gender</td>
					<td><?=htmlspecialchars($gender)?></td>
				</tr>
				<tr>
					<td>Birth Date</td>
					<td><?=htmlspecialchars($birthDate)?></td>
				</tr>
				<tr>
					<td>Nationality</td>
					<td><?=htmlspecialchars($nationality)?></td>
				</tr>
			</tbody>
		</table>
<br>
<!-- generate second table -->
		<table border="1">
			<thead>
				<tr>
					<th colspan="2">Last Work Position</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Company Name</td>
					<td><?=htmlspecialchars($companyName)?></td>
				</tr>
				<tr>
					<td>Company Name</td>
					<td><?=htmlspecialchars($startDateExp)?></td>
				</tr>
				<tr>
					<td>Company Name</td>
					<td><?=htmlspecialchars($endDateExp)?></td>
				</tr>
			</tbody>
		</table>
<!-- generate third table -->
<table border="1">
	<thead>
		<tr>
			<th colspan="2">Computer Skills</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>Programming Languages</td>
			<td>
				<table border="1">
					<thead>
						<tr>
							<th>Language</th>
							<th>Skill Level</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>data</td>
						</tr>
					</tbody>
				</table>
			</td>
		</tr>
	</tbody>
</table>
	</body>
</html>