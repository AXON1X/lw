<?php
$input = $argv[1];
function calculate($input): string
{
    $numbers = [];
    $numberCounter = 0;
    $operations = [];
    $operationsCounter = 0;
    $strCheckNum = "  +-0123456789";
    $inputTwink = str_split($input);
    if ($inputTwink[0] === '+' or $inputTwink[0] === '-' or !strpos($strCheckNum, $inputTwink[0])) {
        $input = "unexpected error";
        return $input;
    }
    foreach ($inputTwink as $symbol) {
        if (!strpos($strCheckNum, $symbol)) {
            $input = "Error";
            return $input;
        }

        if ($symbol !== '+' and $symbol !== '-') {
            $numbers[$numberCounter] .= $symbol;
        } else {
            $numbers[$numberCounter] = intval($numbers[$numberCounter]);
            $operations[$operationsCounter] .= $symbol;
            $numberCounter++;
            $operationsCounter++;
            if ($numberCounter >= 6 or $operationsCounter >= 5) {
                $input = "Numbers of terms exceeded or number of operations exceeded";
                return $input;
            }
        }
    }
    $result = $numbers[0];
    for ($i = 1, $j = 0; $i < 5; $i++) {
        if ($operations[$j] === '+') {
            $result += $numbers[$i];
        } else {
            $result -= $numbers[$i];
        }
        $j++;
    }
    $input .= " = " . $result;
    return $input;
}
$output = calculate($input);
echo $output;
