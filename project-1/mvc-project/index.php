<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MVC with MySQL</title>
    <style>
        /* Your styles remain unchanged */
    </style>
</head>
<style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f5f5f5;
            padding: 20px;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 12px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #4caf50;
        }

        h2 {
            color: #4caf50;     
           }

        p {
            font-size: 20px;
            color: black;
            line-height: 1.5;
        }
        .btn-vendor {
            display: inline-block;
            padding: 10px 20px;
            background-color: #4caf50;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            margin-bottom: 20px;
        }
        .btn-vendor:hover {
            background-color: #45a049;
        }
    </style>
<body>
    <h1>MVC project!</h1>
    <a class="btn-vendor" href="?action=showDishWithVendors">Vendor</a>
    <!-- <a class="btn-vendor" href="?action=showAddIngredientForm">Add Ingredient</a> -->
    <?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
        include_once("controllers/controller.php");
        
        $connection = new ConnectionObject("localhost", "shima_food", "shimashima261710", "shima94_food");
        $controller = new Controller($connection);

        $action = isset($_GET['action']) ? $_GET['action'] : '';

        switch ($action) {
            case 'edit':
                $dishID = isset($_GET['dishID']) ? $_GET['dishID'] : '';
                if ($dishID) {
                    $controller->editForm($dishID);
                } else {
                    echo "<p>Error: Dish ID not provided for editing.</p>";
                }
                break;

            case 'update':
                if (isset($_POST['submit'])) {
                    $dishID = $_POST['dishID'];
                    $dishName = $_POST['dishName'];
                    $price = $_POST['price'];
                    $controller->update($dishID, $dishName, $price);
                } else {
                    echo "<p>Error: Form not submitted for update.</p>";
                }
                break;

            case 'delete':
                $dishID = isset($_GET['dishID']) ? $_GET['dishID'] : '';
                if ($dishID) {
                    $controller->deleteForm($dishID);
                } else {
                    echo "<p>Error: Dish ID not provided for deletion.</p>";
                }
                break;

            case 'confirm_delete':
                if (isset($_POST['submit'])) {
                    $dishID = $_POST['dishID'];
                    $controller->delete($dishID);
                } else {
                    echo "<p>Error: Form not submitted for deletion confirmation.</p>";
                }
                break;

                //add new vendor 
                case 'showDishWithVendors':
                    $controller->showDishWithVendors();
                    break;
                //end

                ////add new ingredient

                // case 'showIngredientsList':
                //     $controller->showIngredientsList();
                //     break;
        
                // case 'showAddIngredientForm':
                //     $controller->showAddIngredientForm();
                //     break;
        
                // case 'addIngredient':
                //     if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                //         $controller->addIngredient();
                //     } else {
                //         echo "<p>Error: Invalid request method for adding ingredient.</p>";
                //     }
                //     break;
        
                // case 'showDeleteIngredientForm':
                //     $ingredientID = isset($_GET['ingredientID']) ? $_GET['ingredientID'] : '';
                //     if ($ingredientID) {
                //         $controller->showDeleteIngredientForm($ingredientID);
                //     } else {
                //         echo "<p>Error: Ingredient ID not provided for deletion.</p>";
                //     }
                //     break;
        
                // case 'deleteIngredient':
                //     $ingredientID = isset($_POST['ingredientID']) ? $_POST['ingredientID'] : '';
                //     if ($ingredientID) {
                //         $controller->deleteIngredient($ingredientID);
                //     } else {
                //         echo "<p>Error: Ingredient ID not provided for deletion.</p>";
                //     }
                //     break;
        

                //////end

            default:
                if (isset($_POST['submit'])) {
                    $controller->add();
                } else {
                    $controller->showForm();
                }
                break;
        }

        //$controller->showDish();
    ?>
</body>
</html>