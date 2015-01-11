<?php 

	// 100/100pts

	$text = $_GET['text'];
	$blacklist = $_GET['blacklist'];
	
	$emailPattern = "/[0-9a-zA-Z+_-]+@[0-9a-zA-Z-]+.[0-9a-zA-Z-.]+/";
	$blackListSplited = preg_split("/[\r\n]/", $blacklist, -1, PREG_SPLIT_NO_EMPTY);
	$newText = preg_replace_callback($emailPattern, 'replace', $text);
	

	// Callback function replace every match in $text
	function replace($match) {
		$email = $match[0];
		// If email should be blacklisted next function will return true
		if (shouldBlackListed($email)) {
			return str_repeat('*', strlen($email));
		} else {
			return "<a href=\"mailto:$email\">$email</a>";
		}
	}

	function shouldBlackListed($email) {
		global $blackListSplited;
		$isBlacklisted = false;
		// Foreach element in blacklist if it's start with *
		foreach ($blackListSplited as $item) {
			if (substr($item, 0, 1) == '*') {
				// Create new item $blackListDomain with removed *
				$blackListedDomain = substr($item, 1);
				// Check if $email is ending with $blackListDomain
				if (endsWith($email, $blackListedDomain)) {
					$isBlacklisted = true;
				}
			} else {
				if ($email == $item) {
					$isBlacklisted = true;
				}
			}
		}
		return $isBlacklisted;
	}

	function endsWith($haystack, $needle) {
	    $length = strlen($needle);
	    if ($length == 0) {
	        return true;
	    }

	    return (substr($haystack, -$length) === $needle);
	}

	echo '<p>' . $newText . '</p>';
	




function print_array($aArray) {
  echo '<pre>';
  print_r($aArray);
  echo '</pre>';
}
 ?>