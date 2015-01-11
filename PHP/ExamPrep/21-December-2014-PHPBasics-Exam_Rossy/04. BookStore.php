<?php
date_default_timezone_set('UTC');
$text = $_GET['text'];
$min = $_GET['min-price'];
$max = $_GET['max-price'];
$sort = $_GET['sort'];
$order = $_GET['order'];

//$text = "Gambardella, Matthew/XML Developer's Guide/Computer/44.95/2000-10-01/An in-depth look at creating applications with XML.
//Ralls, Kim/Midnight Rain/Fantasy/19.15/2000-12-16      /A former architect battles corporate zombies, an evil sorceress, and her own childhood to become queen of the world.
//";
//$min = 5.00;
//$max = 50.45;
//$sort = "genre";
//$order = "descending";

$order1 = $order;
if ($order == 'ascending') {
    $order = SORT_ASC;
} else {
    $order = SORT_DESC;
}

$books = preg_split("/\r\n/", $text);
$booksComponents = array();
$count = 0;

foreach ($books as $book) {
    $components = preg_split("/\\//", $book);
    $author = trim($components[0]);
    $name = trim($components[1]);
    $genre = trim($components[2]);
    $price = doubleval(trim($components[3]));
    $publishDate = $components[4];
    $publishDate = date('Y-m-d', strtotime($publishDate));
    $info = trim($components[5]);

    if ($price >= $min &&
        $price <= $max
    ) {

        $booksComponents[$count] = [$author, $name, $genre, $price, $publishDate, $info];
        $count++;
    }
    switch ($sort) {
        case 'genre':
            $outputArr = array();
            foreach ($booksComponents as $key => $row) {
                $outputArr[$key] = $row[2];
            }
            array_multisort($outputArr, $order, $booksComponents);
            for ($i = 0; $i < count($booksComponents) - 1; $i++) {
                for ($j = $i + 1; $j < count($booksComponents); $j++) {
                    $first = date('Y-m-d', strtotime($booksComponents[$i][4]));
                    $sec = date('Y-m-d', strtotime($booksComponents[$j][4]));
                        if ($booksComponents[$i][2] == $booksComponents[$j][2] &&
                            $first > $sec
                        ) {
                            usort($booksComponents, function ($a, $b) {
                                return date('Y-m-d', strtotime($a)) - date('Y-m-d', strtotime($b));
                            });
                        }
                }
            }
            break;
        case 'author':
            $outputArr = array();
            foreach ($booksComponents as $key => $row) {
                $outputArr[$key] = $row[0];
            }
            array_multisort($outputArr, $order, $booksComponents);

            for ($i = 0; $i < count($booksComponents)-1; $i++) {
                for ($j = $i + 1; $j < count($booksComponents); $j++) {
                    $first = date('Y-m-d', strtotime($booksComponents[$i][4]));
                    $sec = date('Y-m-d', strtotime($booksComponents[$j][4]));
                        if ($booksComponents[$i][0] == $booksComponents[$j][0] &&
                            $first > $sec
                        ) {
                            usort($booksComponents, function ($a, $b) {
                                return date('Y-m-d', strtotime($a)) - date('Y-m-d', strtotime($b));
                            });
                        }
                }
            }
    break;
case
    'publish-date':
            $outputArr = array();
            foreach ($booksComponents as $key => $row) {
                $outputArr[$key] = $row[4];
            }
            array_multisort($outputArr, $order,$booksComponents);
            if ($order1 == 'ascending') {
                usort($outputArr, function ($a, $b) {
                    return date('Y-m-d', strtotime($a)) - date('Y-m-d', strtotime($b));
                });
            } else {
                usort($outputArr, function ($a, $b) {
                    return date('Y-m-d', strtotime($b)) - date('Y-m-d', strtotime($a));
                });
            }
            break;
    }
}


foreach ($booksComponents as $key => $row) {
    echo "<div>";
    echo "<p>" . htmlspecialchars($row[1]) . "</p>";
    echo "<ul>";
    echo "<li>" . htmlspecialchars($row[0]) . "</li>";
    echo "<li>" . htmlspecialchars($row[2]) . "</li>";
    echo "<li>" . htmlspecialchars(number_format($row[3], 2, ".", "")) . "</li>";
    echo "<li>" . htmlspecialchars($row[4]) . "</li>";
    echo "<li>" . htmlspecialchars($row[5]) . "</li>";
    echo "</ul>";
    echo "</div>";
}





