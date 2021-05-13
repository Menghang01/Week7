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

/*
1. Multiple inheritance in php is not possible from using class but is doable by combining one class and using trait or interface. 
   Advantages of using mulitple inheritance are flexibility, DRY(dont repeat yourself), reusability and as well as the ability to override the base class.
    
*/ 

trait Food {
    public function eatable(){
        echo "eatable" . "\n"; 
    }
}

trait Fruit {
    public function taste(){
        echo "Fruit either tastes sour or sweet" . "\n"; 
    }
}

class Berry {
    use Food; 
    use Fruit; 
    public function myName($name){
        echo $name . "\n"; 
        
    }

    public function taste(){
        echo "sour" . "\n"; 
    }
}

    

$strawberry = new Berry();
$strawberry->eatable();   // reusability 
$strawberry->taste();  // overriding && flexibility 
$strawberry->myName("Strawberry"); 



/*
Disadvantage of using multiple inheritance revolved around ambuiguity for the subclass that derived from two base classes or more
if the subclass did not overwrite the method that is inherited from both classes (also known as diamond problem) 
and also constantly prone to a lot of errors
if not handled correctly.

*/

trait Grandfather{
    public function gender(){
        return "male"; 
    }
    public function makeLiving(){
        echo "He is a farmer"; 
    }
}

trait Father{

     
    // public function makeLiving(){
    //     echo "He is a police"; 
    // }

    // if we uncomment this function, it will throw an error

}

class Son {
    use Grandfather; 
    use Father; 

    // compiler will throw an error for collision because we inherit from two base classes that have two different
    // both makeLiving method
  
}


$sith = new Son();
echo $sith->gender();
echo "\n"; 
$sith->makeLiving();  






?>
</body>
</html>
