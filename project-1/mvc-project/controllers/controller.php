<?php
    include_once 'models/model.php';

    class Controller {
        private $dish;
        private $ingredient;
        public function __construct($connection) {
            $this->dish = new dishModel($connection);
            // $this->ingredient = new ingredientModel($connection);
        }
        public function showDish() {
            $dishs = $this->dish->selectDish();
            include 'views/home.php';
        }
        public function showForm() {
            include 'views/form.php';
        }
        public function add() {
            $dishName = $_POST['dishName'];
            $price = $_POST['price'];
            if(!$dishName) {
                echo "<p>Missing information</p>";
                $this->showForm();
                return;
            } else if($this->dish->insertDish($dishName,$price)) {
                echo "<p>Added dish: $dishName successfully </p>";
            } else {
                echo "<p>Could not add dish </p>";
            }
            $this->showDish();
        }

        
    public function editForm($dishID) {
                
        $dish = $this->dish->getDishByID($dishID);

        if ($dish) {
            include 'views/edit_form.php'; 
        } else {
            echo "<p>Dish not found</p>";
            $this->showDish();
        }
    }

    public function update($dishID, $dishName, $price) {
        if ($this->dish->updateDish($dishID, $dishName, $price)) {
            echo "<p>Updated dish: $dishName successfully </p>";
        } else {
            echo "<p>Could not update dish </p>";
        }
        $this->showDish();
    }



    public function deleteForm($dishID) {
        $dish = $this->dish->getDishByID($dishID);
    
        if ($dish) {
            include 'views/delete_form.php';
        } else {
            echo "<p>Dish not found</p>";
            $this->showDish();
        }

    }
    
    public function delete($dishID) {
        if ($this->dish->deleteDish($dishID)) {
            echo "<p>Deleted dish with ID: $dishID successfully </p>";
        } else {
            echo "<p>Could not delete dish </p>";
        }
    
        $this->showDish();
    }



//natural join
public function showDishWithVendors() {
    $dishesWithVendors = $this->dish->naturalJoinDishesWithVendors();
    include 'views/food_vendor.php'; 
}

//end
    }

?>

