<?php

require_once("transaction.php");
class Sales {
    private $orders = [];
    

    public function addSales(Transaction $trans){
        $this->orders[] = $trans; 
    }

    public function displayTransaction($method){
        $count = 0; 
        for($i = 0; $i < count($this->orders); $i++){
            if($this->orders[$i]->method() == $method){
                $count += 1; 
            }
        }
        return $count; 
    }
    public function displayWingPipay(){
        return $this->displayTransaction("WING") + $this->displayTransaction("PIPAY"); 
    }

    public function displayByMethods(){
        $count = 0; 
        $methods = func_num_args();
        for($i = 0; $i < count($method); $i++){
            if($methods[$i] == "ABA"){
                $count += displayTransaction("ABA"); 
            }
            else if($methods[$i] == "WING"){
                $count += displayTransaction("WING"); 
            }
            else if($methods[$i] == "PIPAY"){
                $count += displayTransaction("PIPAY"); 
            }
        }
    }
    public function displayOrdering(){
        usort($this->orders, function($a, $b) {
            if($a->getTotalPerOrder()==$b->getTotalPerOrder()) return 0;
            return $a->getTotalPerOrder() < $b->getTotalPerOrder()?1:-1;
        });
        echo "
        <table style=\"width:100%;border:1px solid black\">
        <tr >
        <th style=\"border:1px solid black\">Name</th>
        <th style=\"border:1px solid black\">Price</th> 
        <th style=\"border:1px solid black\">Quantity</th>
        <th style=\"border:1px solid black\">Method</th>
        <th style=\"border:1px solid black\">Total</th>
        </tr>"; 

        for($i = 0; $i < count($this->orders); $i++){
            $this->orders[$i]->displayInfo(); 
            echo "<br>" . "\n\n"; 
        }

        

    }


}

?>