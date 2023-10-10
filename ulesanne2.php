<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
// Marcus Nirgi, 03.10.2004


// Ülesanne 2.1 -  math
function outputCalculations($x=0, $y=0) {
    echo "$x + $y = " . $x + $y;
    echo "<br> $x - $y = " . $x - $y;
    echo "<br> $x * $y = " . $x * $y;
    echo "<br> $x / $y = " . $x / $y;
    echo "<br> $x % $y = " . $x % $y;
}
outputCalculations(1, 5);


// Ülesanne 2.2 -  millimeter conversion
function convertMilli($milimeters=null, $operationType="cm") {
    if ($milimeters == null) {
        return "Invalid operation parameters";
    }
    switch ($operationType) {
        case "cm":
            return round($milimeters * 0.1, 2);
        case "m":
            return round(milimeters * 0.001, 2);
        default:
            return "Invalid conversion operation";
    }
}
$mm = 13;
$mode = "cm";
echo "<br>Conversion operation: $mm mm as $mode = " . convertMilli($mm, $mode);


// Ülesanne 2.3 -  triangle calculation
function calculateTriangle($a, $b, $c) {
    $area = round($a * $b * 0.5);
    $perimeter = round($a + $b + $c);
    echo "
    <br>
    <h1>Triangle calculation</h1>
    Side A: $a <br>
    Side B: $b <br>
    Side C: $c <br>
    Area: $area <br>
    Perimeter: $perimeter
    ";
}
calculateTriangle(13, 10, 5);




?>
</body>
</html>