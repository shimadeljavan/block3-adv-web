| Suppliers     |               |               |
| ------------- | ------------- | ------------- |
| SupplierID    | SupplierName  | Address       | ContactNumber |
| ------------- | ------------- | ------------- |
| E001          | Supplier 1     | 123 Main Street | 555-1234      |
| E002          | Supplier 2     | 456 Oak Avenue  | 555-5678      |



| Ingredients   |               |              |                |
| ------------- | ------------- | ------------ | -------------- |
| IngredientID  | IngredientName| Type         | SupplierID (FK)|
| ------------- | ------------- | ------------ | -------------- |
| I001          | Flour         | Grain        | E001           |
| I002          | Tomatoes      | Vegetable    | E002           |
| I003          | Cheese        | Dairy        | E002           |


| Dishes        |            |             |
| ------------- | ---------- | ----------- |
| DishID        | DishName    | Price       |
| ------------- | ---------- | ----------- |
| D001          | Pizza       | $10.00      |
| D002          | Salad       | $8.50       |



| FoodVendor Table |              |                 |
| ---------------- | ------------ | --------------- |
| VendorID         | DishID (FK)  | SupplierID (FK) |
| ---------------- | ------------ | --------------- |
| 1                | D001         | E001            |
| 2                | D001         | E002            |
| 3                | D002         | E002            |
| 4                | D002         | E003            |


