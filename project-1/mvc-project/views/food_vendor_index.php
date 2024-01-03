<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Vendors</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
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
    <h1>List of Food Vendors</h1>

    <?php
    if ($foodVendors === false) {
        echo "<p>Error fetching data from the database.</p>";
    } else {
    ?>
        <table>
            <tr>
                <th>Food Vendor ID</th>
                <th>Vendor Name</th>
                <th>Dish ID</th>
                <th>Supplier ID</th>
                <th>Ingredient ID</th>
            </tr>
            <?php
            foreach ($foodVendors as $vendor) {
                echo "<tr>";
                echo "<td>{$vendor['foodVendorID']}</td>";
                echo "<td>" . (isset($vendor['vendorName']) ? $vendor['vendorName'] : '') . "</td>";
                echo "<td>" . (isset($vendor['dishID']) ? $vendor['dishID'] : '') . "</td>";
                echo "<td>" . (isset($vendor['supplierID']) ? $vendor['supplierID'] : '') . "</td>";
                echo "<td>" . (isset($vendor['ingredientID']) ? $vendor['ingredientID'] : '') . "</td>";
                echo "</tr>";
            }
            ?>
        </table>
    <?php
    }
    ?>

    <a href="?action=showFoodVendorForm">Add New Food Vendor</a>
</body>
</html>

