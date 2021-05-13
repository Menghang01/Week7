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

require_once("payment_interface.php"); 
require_once("sales.php"); 

$sale = new Sales();

$aba = new ABA(); 
$wing = new WING(); 
$pipay = new PIPAY(); 

// adding data 

$aba->pay(new Transaction("item1",5,1,"ABA"), "123456789", $sale);
$wing->pay(new Transaction("item2", 3,2,"WING"),"123456789", $sale);
$aba->pay(new Transaction("item3",4,1,"ABA"), "123456789", $sale);
$aba->pay(new Transaction("item4",5,1,"ABA"), "123456789", $sale);
$pipay->pay(new Transaction("item5",6,1,"PIPAY"), "123456789", $sale);
$aba->pay(new Transaction("item6",10,1,"ABA"), "123456789", $sale);
$wing->pay(new Transaction("item7", 15,1,"WING"),"123456789", $sale); 
$wing->pay(new Transaction("item8", 2,1,"WING"),"123456789", $sale); 

// displaying data according to requirement

echo "Number of sales by ABA : " . " " . $sale->displayTransaction("ABA")  . "<br><br>" . "\n\n";
echo "Number of sales by Wing and Pipay : " . " " . $sale->displayWingPipay()  . "<br><br>" . "\n\n"; 

$sale->displayOrdering()

?>
</body>
</html>
