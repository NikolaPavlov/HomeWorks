<?php //71/100pts

	// Find all open tags with regex
	// Extract match name and match tag
	// Replace div with match tag
	// Remove match name
	// Find all closing tags and replace div in them with closing tag name
	//...

	$html = $_GET['html']; //text
	$semanticTags = ['main', 'header', 'nav', 'article', 'section', 'aside', 'footer'];
	
	
	// Find all open tags with regex
	$openTagsPattern = "/<div.*?((id|class)\s*=\s*\"(.*?)\")\s*.*?>/";
	preg_match_all($openTagsPattern, $html, $openTags);
	// print_array($matches);

		$matchName = $openTags[1][0];
		$matchTag = $openTags[3][0];
		// echo $matchName;
		// echo '<br>' . $matchTag;
		$html = str_replace('div', $matchTag, $html);
		$html = str_replace($matchName, '', $html);
		$html = preg_replace('/ >/', '>', $html);
		$html = preg_replace('/[^\S\n]+/', ' ', $html);
	
	// Find all closing tags with regex
	$closingTagsPattern = "/<!--\s*(\w+?)\s*-->/";
	preg_match_all($closingTagsPattern, $html, $closingTags);
	// print_array($closingTags);
	foreach ($closingTags as $key => $value) {
		$closingTagForReplace = $closingTags[0][$key];
		$html = str_replace($closingTagForReplace, '', $html);
	}
	
	echo $html;














function print_array($aArray) {
  echo '<pre>';
  print_r($aArray);
  echo '</pre>';
}
 ?>