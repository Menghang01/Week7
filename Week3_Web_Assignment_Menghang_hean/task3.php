<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 3</title>
</head>
<body>
    
<?php
function sum(){
    $list = func_get_args(); 
    $total = 0; 
    for ($i = 0; $i < count($list); $i++) {
        $total = $total + $list[$i]; 
    }
    return $total; 
}

echo sum(2,3) . "\n"; 
echo sum(2,3,4) . "\n";
echo sum(2,3,4,5); 
?>
</body>
</html>
