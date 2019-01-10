<?php 
class Entree
{
    public $name;
    public $ingredients = array();
    public function __construct($name, $ingredients)
    {
        if (!is_array($ingredients)) {
            throw new Exception('$ingredients must be array');
        }
        $this->name = $name;
        $this->ingredients = $ingredients;
    }
    public function hasIngredient($ingridient)
    {
        return in_array($ingridient, $this->ingredients);
    }
    public static function getSizes()
    {
        return array('small', 'medium', 'large');
    }

}

$soup = new Entree('Chicken soup', array('chicken', 'water'));
$sizes = Entree::getSizes();
//$soup->name = "chicken soup";
//$soup->ingredients = array('chicken', 'water');

$sandwich = new Entree('chiken sandwich', array('chicken', 'bread'));
//$sandwich->name = "chiken sandwich";
//$sandwich->ingredients = array('chicken', 'bread');

// foreach (['chicken', 'bread', 'lemon', 'water'] as $ing) {
//     if ($soup->hasIngredient($ing)) {
//         print "$soup->name has ingridient - $ing. <br>";
//     }
//     if ($sandwich->hasIngredient($ing)) {
//         print "$sandwich->name has ingridient - $ing. <br>";
//     }
// }

// try{
//     $drink = new Entree('Glass of milk', 'milk');
//     if($drink->hasIngredient('milk')){
//         print "yummy";
//     }
// }catch(Exception $e){
//     print "Couldnt create drink ". $e->getMessage();
// }

class ComboMeal extends Entree {

    public function __construct($name, $entrees)
    {
        parent::__construct($name, $entrees);
        if(! $entrees instanceof Entree){
            print "elements of entree must be Entree object";
        }
    }
    public function hasIngredient($ingredient){
        foreach($this->ingredients as $entree){
            if ($entree->hasIngredient($ingredient)){
                return true;
            }
        }
        return false;
    }
}
echo "<h5>6.11</h5>";
$combo = new ComboMeal('Soup + sandwich', array($soup, $sandwich));
foreach(['chicken', 'water', 'pickels'] as $ing){
    if($combo->hasIngredient($ing)){
        print "Something in combo has ingredient ". $ing;
    }
}
echo "<h5>Задание</h5>";
class Ingredient {
    protected $name;
    protected $price;

    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function getName(){
        return $this->name;
    }
    public function getPrice(){
        return $this->price;
    }

    public function setPrice($price){
        return $this->price = $price;
    }

}

$milk = new Ingredient('Milk', 10);
$milk->setPrice(10);
$banana = new Ingredient('banana', 20);
$banana->setPrice(20);
var_dump($banana);

class PricedMeal extends Entree{
    public function __construct($name, $ingredients){
        parent::__construct($name, $ingredients);
        foreach ($this->ingredients as $ingredient){
            if(! $ingredient instanceof Ingredient){
                throw new Exception('$ingredient is not Ingredient object');
            }
        }
    }
    public function getCost(){
        $price = 0;
        foreach($this->ingredients as $ingredient){
            $price += $ingredient->getPrice();
        }
        return $price;
    }
}
$milkshake = new PricedMeal('milkshake', array($milk, $banana));
$milkshakePrice = $milkshake->getCost();
print $milkshake->name.'--'.$milkshakePrice;
?>
