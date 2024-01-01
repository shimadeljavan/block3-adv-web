<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Supplier Confirmation</title>
</head>
<body>
    <h2>Delete Supplier Confirmation</h2>
    <p>Are you sure you want to delete the supplier <?php echo $supplier['supplierName']; ?>?</p>
    
    <p><strong>ID:</strong> <?php echo $supplier['supplierID']; ?></p>
    <form method="post" action="?action=confirm_deleteSupplier&supplierID=<?php echo $supplier['supplierID']; ?>">

        <input type="submit" name="submit" value="Confirm Delete">
        <a href="?action=showSuppliers">Cancel</a>
    </form>
</body>
</html>
