<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Ingredients</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2>List of Ingredients</h2>

<table>
    <thead>
        <tr>
            <th>Ingredient ID</th>
            <th>Ingredient Name</th>
            <th>Type</th>
            <th>Price</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($ingredients as $ingredient) : ?>
            <tr>
                <td><?php echo $ingredient['ingredientID']; ?></td>
                <td><?php echo $ingredient['ingredientName']; ?></td>
                <td><?php echo $ingredient['type']; ?></td>
                <td><?php echo $ingredient['price']; ?> $</td>
                <td>
                    <!-- <a href="?action=editIngredient&ingredientID=<?php echo $ingredient['ingredientID']; ?>">Edit</a> | -->
                    <a href="?action=deleteIngredient&ingredientID=<?php echo $ingredient['ingredientID']; ?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<p><a href="?action=showIngredientForm">Add New Ingredient</a></p>

</body>
</html>
