<?php
class FoodVendorController {
    private $foodVendorModel;

    public function __construct($connection) {
        $this->foodVendorModel = new FoodVendorModel($connection);
    }
    public function index() {
        $foodVendors = $this->foodVendorModel->getAllFoodVendors();
        include('views/food_vendor_index.php');
    }

    public function getAllDishes() {
        return $this->foodVendorModel->selectDish();
    }

    public function getAllSuppliers() {
        return $this->foodVendorModel->selectSuppliers();
    }

    public function getAllIngredients() {
        return $this->foodVendorModel->selectIngredients();
    }


    public function showFoodVendorForm() {
        $dishes = $this->getAllDishes();
        // echo var_dump($dishes);
        $suppliers = $this->getAllSuppliers();
        $ingredients = $this->getAllIngredients();

        if ($dishes === false || $suppliers === false || $ingredients === false) {
            echo "Error fetching data.";
            return;
        }

        // Pass data to the view
        include 'views/food_vendor_create.php';
    }

    public function showFoodVendors() {
        $foodVendors = $this->foodVendorModel->getAllFoodVendors();
        include('views/food_vendor_index.php');
    }



    public function createFoodVendor() {
       
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $vendorName = $_POST['vendorName'];
            $dishID = $_POST['dishID'];
            $supplierID = $_POST['supplierID'];
            $ingredientID = $_POST['ingredientID'];
            $this->foodVendorModel->addFoodVendor($vendorName, $dishID, $supplierID, $ingredientID);
            // header('Location: views/food_vendor_index.php');
            $this->index();
            // showFoodVendors();
            exit();
        } else {
            include('views/food_vendor_create.php');
        }
        
    }

    public function deleteFoodVendor($foodVendorID) {
        if ($this->foodVendorModel->deleteFoodVendor($foodVendorID)) {
            echo "<p>Food vendor deleted successfully : $foodVendorID</p>";
        } else {
            echo "<p>Food vendor not found</p>";
            $this->index();
        }
    }

}
?>