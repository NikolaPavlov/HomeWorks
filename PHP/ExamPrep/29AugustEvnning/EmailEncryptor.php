<?php 

	//100/100pts

	$recipient = htmlspecialchars($_GET['recipient']);
	$subject = htmlspecialchars($_GET['subject']);
	$body = htmlspecialchars($_GET['body']);
	$key = $_GET['key'];


	$html = "<p class='recipient'>$recipient</p>".
	"<p class='subject'>$subject</p>".
	"<p class='message'>$body</p>";

	// echo $html;
	$answer = '|';
	for ($i=0; $i < strlen($html); $i++) { 
		$encryptedChar = ord($html[$i]) * ord($key[$i % strlen($key)]);
		$answerChar = dechex($encryptedChar);
		$answer .= $answerChar . '|';
	}

	echo $answer;
 ?>