<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 2</title>
</head>
<body>

<?php
$arr = [2, 3, 4, 6, 7, 9, 11, 20];
function getEventArray($arr){
    $eventArray = array(); 
    foreach($arr as $num){
        if($num % 2 == 0){
            array_push($eventArray, $num); 
        }
    }
    return $eventArray;
}


$filterArray = fn($arr) => getEventArray($arr); 
print_r($filterArray($arr)); 
?>
</body>
</html>
