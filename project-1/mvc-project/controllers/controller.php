<?php
    include_once 'models/model.php';

    class Controller {
        private $dish;
        public function __construct($connection) {
            $this->dish = new dishModel($connection);
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
    }

    $connection = new ConnectionObject("localhost", "shima_food", "", "shima94_food");
    $controller = new Controller($connection);
?>
