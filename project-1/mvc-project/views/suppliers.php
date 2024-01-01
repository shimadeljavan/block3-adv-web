<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suppliers List</title>
</head>
<body>

    <h2>Suppliers List</h2>

    <table border="1">
        <thead>
            <tr>
                <th>Supplier ID</th>
                <th>Supplier Name</th>
                <th>Address</th>
                <th>Contact Number</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($suppliers as $supplier): ?>
                <tr>
                    <td><?php echo $supplier['supplierID']; ?></td>
                    <td><?php echo $supplier['supplierName']; ?></td>
                    <td><?php echo $supplier['address']; ?></td>
                    <td><?php echo $supplier['contactNumber']; ?></td>
                    <td>
                        <a href="?action=deleteSupplier&supplierID=<?php echo $supplier['supplierID']; ?>">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <p><a href="?action=showSupplierForm">Add New Supplier</a></p>

</body>
</html>
