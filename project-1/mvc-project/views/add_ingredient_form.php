<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Ingredient Form</title>
</head>
<body>
    <h2>Add New Ingredient</h2>

    <form action="index.php?action=addIngredient" method="post">
        <label for="ingredientName">Ingredient Name:</label>
        <input type="text" id="ingredientName" name="ingredientName" required><br>

        <label for="type">Type:</label>
        <input type="text" id="type" name="type" required><br>

        <label for="price">Price:</label>
        <input type="text" id="price" name="price" required><br>

        <input type="submit" name="submit" value="Add Ingredient">
    </form>

    <br>
    <a href="index.php?action=showIngredientsList">Back to Ingredients List</a>
</body>
</html>