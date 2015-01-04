<?php 

//main
//header
//nav
//article
//section
//aside
//footer


	$str = $_GET['html'];
	$semanticTags = ['main', 'header', 'nav', 'article', 'section', 'aside', 'footer'];
	print_array($str);
	echo $str;
	//find all open tags with regex
	$openTagsPattern = "/<div.*?\b((id|class)\s*=\s*\"(.*?)\").*?>/";
	preg_match_all($openTagsPattern, $str, $openingTags);
	print_array($openingTags);
	foreach ($openingTags[0] as $match) {
		$attrName = $openingTags[1][0];
		$attrValue = $openingTags[3][0];
		// echo $attrName;
		if (in_array($attrValue, $semanticTags)) {
			$replaceTag = str_replace('div', $attrValue, $match);
			$replaceTag = str_replace($attrName, '', $replaceTag);
			$replaceTag = preg_replace("/\s+>/", '>', $replaceTag);
			$replaceTag = preg_replace("/\s{2,}/", ' ', $replaceTag);
			str_replace($match, $replaceTag, $str);
			// $match = $replaceTag;
		}
	}

echo '<br>';
print_array($str);






function print_array($aArray) {
  echo '<pre>';
  print_r($aArray);
  echo '</pre>';
}
 ?>