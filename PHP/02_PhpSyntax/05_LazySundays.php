<?php

function get_sundays($y, $m){
    return new DatePeriod(
        new DateTime("first sunday of $y-$m"),
            DateInterval::createFromDateString('next sunday'),
        new DateTime("last day of $y-$m")
    );
}

foreach (get_sundays(date("Y"), date("M")) as $sunday) {
    echo $sunday->format("jS F Y") . '<br>';
}

?>