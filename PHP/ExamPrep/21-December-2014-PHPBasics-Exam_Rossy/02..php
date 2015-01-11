<?php
$keysString = $_GET['keys'];
$textString = $_GET['text'];

//$keysString = "p1 p";
//$textString = "p1 2p";

$total = 0;
$missingKey= false;
preg_match("/(.*)?[0-9](.*)[0-9]?(.*)?/", $keysString, $keys);
$endKey = $keys[2];
$endKey = preg_replace("/\\s*/", "", $endKey);
if($endKey!="" && preg_match("/[A-Za-z_]*/",$endKey)){
    preg_match("/(.*?)[0-9]|.*/", $keys[1], $startKeys);
    $startKey = $startKeys[1];
    $startKey = preg_replace("/\\s*/", "", $startKey);
    if($startKeys[1]==""){
        $startKey = $startKeys[0];
    }
    if($startKey=="" ||!preg_match("/[A-Za-z_]*/",$startKey)){
        $missingKey = true;
    }
    else{
        preg_match_all("/$startKey(.*?)$endKey/", $textString, $values);
        for($i = 0;$i<count($values[1]);$i++ ){
            $values[1][$i] = preg_replace("/\\s*/", "", $values[1][$i]);
            if(is_numeric($values[1][$i])){
                $total+=$values[1][$i];
            }
        }
    }

}
else{
    $missingKey = true;
}
if($missingKey){
    echo "<p>A key is missing</p>";
}
else if($total==0){
    echo "<p>The total value is: <em>nothing</em></p>";
}
else{
    echo "<p>The total value is: <em>$total</em></p>";
}
