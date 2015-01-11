<?php
$jsonInput = $_GET['jsonTable'];
$input = json_decode($jsonInput);
//$input = [[""], [7, 2]];

$matrix = $input[0];
$keys = $input[1];
$k = $input[1][0];
$s = $input[1][1];
$lengths = array_map('strlen', $matrix);

$output = array();
if(count($matrix)==1){
    $output[0][0]="";
}
for ($row = 0; $row < count($matrix); $row++) {
    for ($col = 0; $col < max($lengths); $col++) {
        if($col>=strlen($matrix[$row])){
            $output[$row][$col] = "";
        }
        else{
            $currentChar = $matrix[$row][$col];
            if (ord($currentChar) >= 65 && ord($currentChar) <= 90) {
                $x = ord($currentChar) - 65;
                $encryptedCode = ($k * $x + $s) % 26;
                $encryptedChar = chr(65+$encryptedCode);
                $output[$row][$col] = $encryptedChar;
            } else if (ord($currentChar) >= 97 && ord($currentChar) <= 122) {
                $x = ord($currentChar) - 97;
                $encryptedCode = ($k * $x + $s) % 26;
                $encryptedChar = chr(65+$encryptedCode);
                $output[$row][$col] = $encryptedChar;
            } else {
                $output[$row][$col] = $matrix[$row][$col];
            }
        }
    }
}
echo "<table border='1' cellpadding='5'>";
for($row = 0;$row<count($output);$row++ ){
    echo "<tr>";
    for($col = 0;$col<count($output[$row]);$col++ ){
        if($output[$row][$col]==""){
            echo "<td>".htmlspecialchars($output[$row][$col])."</td>";
        }
        else{
            echo "<td style='background:#CCC'>".htmlspecialchars($output[$row][$col])."</td>";
        }
    }
    echo "</tr>";
}
echo "</table>";