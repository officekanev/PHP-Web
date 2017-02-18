<?php


class DateModifier
{
    private $date;

    const DATE_FORMAT = "Y m d";

    public static function calculateDateDifference( $datetimeOne,
                                             $datetimeTwo)
    {

        $datetimeOne = DateTime::createFromFormat(self::DATE_FORMAT, $datetimeOne);
        $datetimeTwo = DateTime::createFromFormat(self::DATE_FORMAT, $datetimeTwo);

        $interval = date_diff($datetimeOne, $datetimeTwo);
        echo $interval->format('%a');
    }
}

$date1 = trim(fgets(STDIN));
$date2 = trim(fgets(STDIN));

//$date1 = trim('1992 05 31');
//$date2 = trim('2016 06 17');

//$datetimeOne = new DateModifier($date1);
//$datetimeTwo = new DateModifier($date2);

DateModifier::calculateDateDifference($date1, $date2);
