<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Supplier</title>
</head>
<body>

    <h2>Add New Supplier</h2>

    <form action="?action=addSupplier" method="post">
        <label for="supplierName">Supplier Name:</label>
        <input type="text" id="supplierName" name="supplierName"><br>

        <label for="address">Address:</label>
        <input type="text" id="address" name="address"><br>

        <label for="contactNumber">Contact Number:</label>
        <input type="text" id="contactNumber" name="contactNumber"><br>

        <input type="submit" name="submit" value="Add Supplier">
    </form>

    <p><a href="?action=showSuppliers">Back to Suppliers List</a></p>

</body>
</html>
