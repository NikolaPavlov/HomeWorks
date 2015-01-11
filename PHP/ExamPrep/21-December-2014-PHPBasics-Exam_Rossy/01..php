<?php
$list = $_GET['list'];
$length = $_GET['length'];
$show = $_GET['show'];

//$list = "Angel
//Ivancho
//Aha
//Toni
//Pesho
//Gosho
//";
//$length = 5;
//$show = "on";

$color = ' style="color: red;"';
$arr = explode("\r\n",$list);
echo "<ul>";
foreach ($arr as $word) {
    $word=trim($word);
    if($word!="" || !ctype_space($word)){
        if(strlen($word)>=$length){
            echo "<li>" . htmlspecialchars($word)."</li>";
        }
        else{
            if($show=="on"){
                echo "<li$color>".htmlspecialchars($word) ."</li>";
            }
        }
    }

}
echo "</ul>";