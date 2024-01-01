<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Ingredient Confirmation</title>
</head>
<body>

<h2>Delete Ingredient Confirmation</h2>

<?php if (isset($ingredient)): ?>
    <p>Are you sure you want to delete the following ingredient?</p>
    <p><strong>Ingredient ID:</strong> <?php echo $ingredient['ingredientID']; ?></p>
    <p><strong>Ingredient Name:</strong> <?php echo $ingredient['ingredientName']; ?></p>
    <p><strong>Type:</strong> <?php echo $ingredient['type']; ?></p>
    <p><strong>Price:</strong> $<?php echo $ingredient['price']; ?></p>

    <form action="?action=confirm_delete&ingredientID=<?php echo $ingredient['ingredientID']; ?>" method="post">
        <input type="hidden" name="ingredientID" value="<?php echo $ingredient['ingredientID']; ?>">
        <input type="hidden" name="ingredientID" value="<?php echo $ingredient['ingredientID']; ?>">
        <input type="submit" value="Confirm Delete">
    </form>

    <p><a href="index.php">Cancel</a></p>
<?php else: ?>
    <p>Error: Ingredient details not available.</p>
    <a href="index.php">Go back</a>
<?php endif; ?>

</body>
</html>

