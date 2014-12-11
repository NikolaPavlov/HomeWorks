<!--Problem 6. Modify String
Write a PHP script StringModifier.php which receives a string from an
input form and modifies it according to the selected option (radio button).
You should support the following operations: palindrome check, reverse string,
split to extract leters only, hash the string with the default PHP hashing
algorithm, shuffle the string characters randomly. The result should be displayed
right under the input field. Styling the page is optional. Think about which of
the modification can be achieved with already built-in functions in PHP. Where
necessary, write your own algorithms to modify the given string. Hint: Use the
crypt() function for the "Hash String" modification. -->

<!DOCTYPE html>
<html>
	<head>
		<title>ModifyString</title>
	</head>
	<body>
		<form action="#" method="POST" accept-charset="utf-8">
			<input type="text" name="txt">
			<input type="radio" name ="radio" value="check_palindrome"><label>Check Palindrome</label>
			<input type="radio" name ="radio" value="reverse_string"><label>Reverse string</label>
			<input type="radio" name ="radio" value="split_string"><label>Split</label>
			<input type="radio" name ="radio" value="hash_string"><label>Hash string</label>
			<input type="radio" name ="radio" value="shuffle_string"><label>Shuffle string</label>
			<input type="submit" value="Submit">
		</form>
		<?php 
			$inputString = htmlentities($_POST['txt']);
			if (isset($inputString) && isset($_POST['radio']) && !empty($_POST['radio'])) {
				if ($_POST['radio'] == 'check_palindrome') {
					checkPalindrome($inputString);
				} else if ($_POST['radio'] == 'reverse_string') {
					reverseString($inputString);
				} else if ($_POST['radio'] == 'split_string') {
					splitString($inputString);
				} else if ($_POST['radio'] == 'hash_string'){
					hashString($inputString);
				} else if ($_POST['radio'] == 'shuffle_string'){
					shuffleString($inputString);
				}
			}


			//create function for palindrome check
			function checkPalindrome($str) {
				$normalizedString = strtolower(preg_replace("/[^A-Za-z0-9]/", "", $str));
				if ($normalizedString == strrev($normalizedString)) {
					echo 'palindrome';
				}	else {
					echo 'It\'s not a palindrome';
				}
			}
			//create function for reverse a string
			function reverseString($str) {
				echo strrev($str);
			}
			//create function for split
			function splitString($str){
				$arrResults = str_split($str);
				echo implode(' ', $arrResults);
			}
			//create function for Hash
			function hashString($str){
				echo crypt($str);
			}
			//create function for shuffle the string
			function shuffleString($str) {
				echo str_shuffle($str);
			}

		 ?>
	</body>
</html>