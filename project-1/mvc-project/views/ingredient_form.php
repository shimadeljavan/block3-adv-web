<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Ingredient</title>
</head>
<body>

<h2>Add New Ingredient</h2>

<form action="?action=addIngredient" method="post">
    <label for="ingredientName">Ingredient Name:</label>
    <input type="text" id="ingredientName" name="ingredientName"><br>

    <label for="type">Type:</label>
    <input type="text" id="type" name="type"><br>

    <label for="price">Price:</label>
    <input type="text" id="price" name="price"><br>

    <input type="submit" name="submit" value="Add Ingredient">
</form>


<p><a href="index.php">Back to Ingredient List</a></p>

</body>
</html>

