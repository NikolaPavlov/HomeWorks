<?php
date_default_timezone_set('UTC');
$text = $_GET['text'];
$min = $_GET['min-price'];
$max = $_GET['max-price'];
$sort = $_GET['sort'];
$order = $_GET['order'];

$books = preg_split("/\n/",$text,-1,PREG_SPLIT_NO_EMPTY);
$booksComponents = array();
$count = 0;
foreach ($books as $book) {
    $components = explode("/",$book);
    for($i = 0;$i<count($components);$i++ ){
        if(ctype_space($components[$i]) || $components[$i]==''){
            unset($components[$i]);
            $components = array_values($components);
        }
    }
    $author = trim($components[0]);
    $name = trim($components[1]);
    $genre = trim($components[2]);
    $price = doubleval(trim($components[3]));
    $publishDate = trim($components[4]);
    $publishDate = date('Y-m-d', strtotime($publishDate));
    $info = trim($components[5]);

    if ($price >= $min &&
        $price <= $max
    ) {

        $booksComponents[$count] = [$author, $name, $genre, $price, $publishDate, $info];
        $count++;
    }
}

switch($sort){
    case 'genre':
        $outputArr = array();
        foreach ($booksComponents as $key=>$row) {
            $outputArr[$key] = $row[4];
        }
        if($order=='ascending'){
            array_multisort($outputArr,SORT_ASC,$booksComponents);
        }
        else{
            array_multisort($outputArr,SORT_DESC,$booksComponents);
        }
        break;
    case 'author':
        $outputArr = array();
        foreach ($booksComponents as $key=>$row) {
            $outputArr[$key] = $row[0];
        }
        if($order=='ascending'){
            array_multisort($outputArr,SORT_ASC,$booksComponents);
        }
        else{
            array_multisort($outputArr,SORT_DESC,$booksComponents);
        }
        break;
    case 'publish date':
        $outputArr = array();
        foreach ($booksComponents as $key=>$row) {
            $outputArr[$key] = $row[3];
        }
        if($order=='ascending'){
            array_multisort($outputArr,SORT_ASC,$booksComponents);
        }
        else{
            array_multisort($outputArr,SORT_DESC,$booksComponents);
        }
        break;
}
if($column == 'result'){
    for($i = 0;$i<count($booksComponents)-1;$i++ ){
        for($j = $i+1;$j<count($booksComponents);$j++ ){
            $first = intval($booksComponents[$i][4]);
            $sec = intval($booksComponents[$j][4]);
            if($order=='ascending'){
                if($booksComponents[$i][3]==$booksComponents[$j][3] && $first>$sec){
                    $tmp = $booksComponents[$i];
                    $booksComponents[$i] = $booksComponents[$j];
                    $booksComponents[$j] = $tmp;
                }
            }
            else{
                if($booksComponents[$i][3]==$booksComponents[$j][3] && $first<$sec){
                    $tmp = $booksComponents[$i];
                    $booksComponents[$i] = $booksComponents[$j];
                    $booksComponents[$j] = $tmp;
                }
            }

        }
    }
}
if($column == 'username'){
    for($i = 0;$i<count($studentsComponents)-1;$i++ ){
        for($j = $i+1;$j<count($studentsComponents);$j++ ){
            $first = intval($studentsComponents[$i][4]);
            $sec = intval($studentsComponents[$j][4]);
            if($order=='ascending'){
                if(strcmp($studentsComponents[$i][0],$studentsComponents[$j][0])==0 && $first>$sec){
                    $tmp = $studentsComponents[$i];
                    $studentsComponents[$i] = $studentsComponents[$j];
                    $studentsComponents[$j] = $tmp;
                }
            }
            else{
                if(strcmp($studentsComponents[$i][0],$studentsComponents[$j][0])==0 && $first<$sec){
                    $tmp = $studentsComponents[$i];
                    $studentsComponents[$i] = $studentsComponents[$j];
                    $studentsComponents[$j] = $tmp;
                }
            }

        }
    }
}


echo '<table><thead><tr><th>Id</th><th>Username</th><th>Email</th><th>Type</th><th>Result</th></tr></thead>';
foreach ($studentsComponents as $key=>$row) {
    echo '<tr>';
    echo '<td>' . htmlspecialchars($row[4]) . '</td>' .
        '<td>' . htmlspecialchars($row[0]) . '</td>' .
        '<td>' . htmlspecialchars($row[1]) . '</td>' .
        '<td>' . htmlspecialchars($row[2]) . '</td>' .
        '<td>' . htmlspecialchars($row[3]) . '</td>';
    echo "</tr>";
}
echo '</table>';




