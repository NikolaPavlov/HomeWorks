<?php
date_default_timezone_set('UTC');
$text = $_GET['text'];
$min = $_GET['min-price'];
$max = $_GET['max-price'];
$sort = $_GET['sort'];
$order = $_GET['order'];

$text = "Gambardella, Matthew/XML Developer's Guide/Computer/44.95/2000-10-01/An in-depth look at creating applications with XML.
Ralls, Kim/Midnight Rain/Fantasy/19.15/2000-12-16/A former architect battles corporate zombies, an evil sorceress, and her own childhood to become queen of the world.
Corets, Eva/Maeve Ascendant/Fantasy/6.95/2000-11-17/After the collapse of a nanotechnology society in England, the young survivors lay the foundation for a new society.
Corets, Eva/Oberon's Legacy/Fantasy/5.00/2001-03-10/In post-apocalypse England, the mysterious agent known only as Oberon helps to create a new life for the inhabitants of London. Sequel to Maeve Ascendant.
Randall, Cynthia/Lover Birds/Romance/5.95/2000-09-02/When Carla meets Paul at an ornithology conference, tempers fly as feathers get ruffled.
Thurman, Paula/Splish Splash/Romance/4.95/2000-11-02/A deep sea diver finds true love twenty thousand leagues beneath the sea.
O'Brien, Tim/Microsoft .NET: The Programming Bible/Computer/36.95/2000-12-09/Microsoft's .NET initiative is explored in detail in this deep programmer's reference.
O'Brien, Tim/MSXML3: A Comprehensive Guide/Computer/6.95/2000-12-01/The Microsoft MSXML3 parser is covered in detail, with attention to XML DOM interfaces, XSLT processing, SAX and more.
";
$min = 5.00;
$max = 10.45;
$sort = "author";
$order = "ascending";

if($order=='ascending'){
    $order =SORT_ASC;
}
else{
    $order = SORT_DESC;
}

$books = preg_split("/\r\n/",$text,-1,PREG_SPLIT_NO_EMPTY);
$booksComponents = array();
$id=1;
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
    $publishDate = date('o-m-d',strtotime($publishDate));
    $info = trim($components[5]);

    if($price>=$min &&
        $price<=$max){

        $booksComponents[$count] = [$author,$name,$genre,$price,$publishDate,$info];
        $count++;
    }
    $id++;
    switch($sort){
        case 'genre':
            $outputArr = array();
            foreach ($booksComponents as $key=>$row) {
                $outputArr[$key] = $row[2];
            }
            array_multisort($outputArr,$order,$booksComponents);
            for($i = 0;$i<count($booksComponents)-1;$i++ ){
                for($j = $i+1;$j<count($booksComponents);$j++ ){
                    $first = $booksComponents[$i][4];
                    $sec = $booksComponents[$j][4];
                    $first=date('o-m-d',strtotime($first));
                    $tempArr=explode('-', $sec);
                    $sec = date("o-m-d", mktime(0, 0, 0, $tempArr[2], $tempArr[0], $tempArr[1]));
                    if($booksComponents[$i][2]==$booksComponents[$j][2] && strtotime($first)>strtotime($sec)){
                        $tmp = $booksComponents[$i];
                        $booksComponents[$i] = $booksComponents[$j];
                        $booksComponents[$j] = $tmp;
                    }
                }
            }
            break;
        case 'author':
            $outputArr = array();
            foreach ($booksComponents as $key=>$row) {
                $outputArr[$key] = $row[0];
            }
            array_multisort($outputArr,$order,$booksComponents);
            for($i = 0;$i<count($booksComponents)-1;$i++ ){
                for($j = $i+1;$j<count($booksComponents);$j++ ){
                    $first = $booksComponents[$i][4];
                    $sec = $booksComponents[$j][4];
                    $first=date('o-m-d',strtotime($first));
                    $tempArr=explode('-', $sec);
                    $sec = date("o-m-d", mktime(0, 0, 0, $tempArr[2], $tempArr[0], $tempArr[1]));
                    if($booksComponents[$i][0]==$booksComponents[$j][0] && strtotime($first)>strtotime($sec)){
                        $tmp = $booksComponents[$i];
                        $booksComponents[$i] = $booksComponents[$j];
                        $booksComponents[$j] = $tmp;
                    }
                }
            }
            break;
        case 'publish-date':
            $outputArr = array();
            foreach ($booksComponents as $key=>$row) {
                $outputArr[$key] = strtotime($row[4]);
            }
            array_multisort($outputArr,$order,$booksComponents);
            break;
    }
}

function sortFunction( $a, $b ) {
    return strtotime($a[1]) - strtotime($b[1]);
}

foreach ($booksComponents as $key=>$row) {
    echo "<div>";
    echo "<p>" .htmlspecialchars($row[1]) ."</p>";
    echo "<ul>";
    echo "<li>" .htmlspecialchars($row[0]) ."</li>";
    echo "<li>" .htmlspecialchars($row[2]) ."</li>";
    echo "<li>" .number_format($row[3],2 ,"." ,"") ."</li>";
    echo "<li>" .htmlspecialchars($row[4]) ."</li>";
    echo "<li>" .htmlspecialchars($row[5]) ."</li>";
    echo "</ul>";
    echo "</div>";
}





