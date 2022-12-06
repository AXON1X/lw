<?php
$firstTime = $argv[1];
$SecondTime = $argv[2];
function sunTime($firstTime, $SecondTime): string
{
    $result = "";
    $checkStr = "  :0123456789";
    $firstTimeTwink = str_split($firstTime);
    $SecondTimeTwink = str_split($SecondTime);
    $firstTimeArr = [];
    $firstTimeCounter = 0;
    $secondTimeArr = [];
    $secondTimeCounter = 0;
    if ($firstTime === NULL or $SecondTime === NULL or (strlen($firstTime) > 8) or (strlen($SecondTime) > 8)) {
        $result = "Unexpected Error!";
        return $result;
    }
    foreach ($firstTimeTwink as $symbol) {
        if (!strpos($checkStr, $symbol)) {
            $result = "It looks like there are extra characters int the argument...";
            return $result;
        }
        if ($symbol !== ':') {
            $firstTimeArr[$firstTimeCounter] .= $symbol;
        } else {
            $firstTimeArr[$firstTimeCounter] = intval($firstTimeArr[$firstTimeCounter]);
            $firstTimeCounter++;
        }
    }
    foreach ($SecondTimeTwink as $symbol) {
        if (!strpos($checkStr, $symbol)) {
            $result = "It looks like there are extra characters int the argument...";
            return $result;
        }
        if ($symbol !== ':') {
            $secondTimeArr[$secondTimeCounter] .= $symbol;
        } else {
            $secondTimeArr[$secondTimeCounter] = intval($secondTimeArr[$secondTimeCounter]);
            $secondTimeCounter++;
        }
    }
    if (sizeof($secondTimeArr) === 1) {
        $secondTimeArr[1] = intval(0);
        $secondTimeArr[2] = intval(0);
    }
    if (sizeof($secondTimeArr) === 2) {
        $secondTimeArr[2] = intval(0);
    }
    if (sizeof($firstTimeArr) === 1) {
        $firstTimeArr[1] = intval(0);
        $firstTimeArr[2] = intval(0);
    }
    if (sizeof($firstTimeArr) === 2) {
        $firstTimeArr[2] = intval(0);
    }
    $second = $firstTimeArr[2] + $secondTimeArr[2];
    $minute = $firstTimeArr[1] + $secondTimeArr[1];
    $hour = $firstTimeArr[0] + $secondTimeArr[0];
    while ($second > 59) {
        $second -= 60;
        $minute++;
    }
    while ($minute > 59) {
        $minute -= 60;
        $hour++;
    }
    while ($hour > 23) {
        $hour -= 24;
    }
    $result =  $hour . ":" . $minute . ":" . $second . "\n";
    return $result;
}
$output = sunTime($firstTime, $SecondTime);
echo $output;
