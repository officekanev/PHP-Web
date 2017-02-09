<?php
//function getSundays($y, $m)
//{
//    return new DatePeriod(
//        new DateTime("first Sunday of $y-$m"),
//        DateInterval::createFromDateString('next Sunday'),
//        new DateTime("next month $y-$m-01")
//    );
//}
//
//foreach (getSundays(2014, 8) as $Sunday) {
//    $result = $Sunday -> format("jS F, Y");
//    echo $result . '<br>';
//}

    function getWednesdays($y, $m)              // var 2
    {
        return new DatePeriod(
            new DateTime("first wednesday of $y-$m"),
            DateInterval::createFromDateString('next wednesday'),
            new DateTime("last day of $y-$m")
        );
    }
    Usage:

    foreach (getWednesdays(2010, 11) as $wednesday) {
        echo $wednesday->format("l, Y-m-d\n");
    }