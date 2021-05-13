<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 1</title>
</head>
<body>
    
<?php

function reverseOne($string){
    $reverse = ""; 
    for($i = strlen($string) - 1; $i >= 0; $i--){
        $reverse = $reverse . $string[$i];
    }
    return $reverse; 

}

function reverseString($string){
    $result = ""; 
    $array = explode(" ", $string); 
    for($i = 0; $i < count($array); $i++){
        if($i == count($array) - 1){
            $result = $result . reverseOne($array[$i]) ; 
        }
        else {
            $result = $result . reverseOne($array[$i]) . " "; 
        }
    }

    return $result; 
}

echo reverseString("emocleW ot PHP"); 
?> 
</body>
</html>
