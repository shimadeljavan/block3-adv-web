<?php
include_once 'models/IngredientModel.php';

class IngredientController {
    private $ingredientModel;

    public function __construct($connection) {
        // $this->ingredientModel = new IngredientModel($connection);
    }
    
    public function selectIngredients() {
        // Use the corresponding method from the model
        return $this->ingredientModel->selectIngredients();
    }
    
    public function insertIngredient($ingredientName, $type, $price) {
        // Use the corresponding method from the model
        return $this->ingredientModel->insertIngredient($ingredientName, $type, $price);
    }

    public function getIngredientByID($ingredientID) {
        // Use the corresponding method from the model
        return $this->ingredientModel->getIngredientByID($ingredientID);
    }

    public function deleteIngredient($ingredientID) {
        // Use the corresponding method from the model
        return $this->ingredientModel->deleteIngredient($ingredientID);
    }
}
?>
