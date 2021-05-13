<?php
abstract class Payment{
    abstract public function pay(Transaction $trans, $cardNumber, $sale); 
}

class ABA extends Payment {
    public function pay(Transaction $trans, $cardNumber, $sale){
        $sale->addSales($trans); 
    }
}
class WING extends Payment {
    public function pay(Transaction $trans, $cardNumber,$sale){
        $sale->addSales($trans); 
    }
}

class PIPAY extends Payment {
    public function pay(Transaction $trans, $cardNumber,$sale){
        $sale->addSales($trans);  
    }
}









?>