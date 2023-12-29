<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingredients List</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Ingredients List</h2>

    <a href="index.php?action=show_add_ingredient_form">Add New Ingredient</a>

    <?php if (!empty($ingredients)): ?>
        <table>
            <tr>
                <th>Ingredient ID</th>
                <th>Ingredient Name</th>
                <th>Type</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
            <?php foreach ($ingredients as $ingredient): ?>
                <tr>
                    <td><?php echo $ingredient['ingredientID']; ?></td>
                    <td><?php echo $ingredient['ingredientName']; ?></td>
                    <td><?php echo $ingredient['type']; ?></td>
                    <td><?php echo $ingredient['price']; ?></td>
                    <td>
                        <a href="index.php?action=show_delete_ingredient_form&ingredientID=<?php echo $ingredient['ingredientID']; ?>">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php else: ?>
        <p>No ingredients available.</p>
    <?php endif; ?>

    <br>
    <a href="index.php?action=?home">Back to Home</a>
</body>
</html>