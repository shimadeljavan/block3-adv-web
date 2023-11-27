| Suppliers      |            |             |
| -------------- | ---------- | ----------- |
| +SupplierID    | +SupplierName |            |
| -------------- | ------------ | ----------- |
| E001           | ExampleCo    |            |
| E002           | FreshFarms   |            |


| Ingredients    |            |              |                |                  |
| -------------- | ---------- | ------------ | -------------- | ---------------- |
| +IngredientID  | +IngredientName | +Type       | +CostPerUnit  | +SupplierID (FK) |
| -------------- | ------------ | ------------ | -------------- | ---------------- |
| I001           | Flour        | Grain        | $1.50          | E001             |
| I002           | Tomatoes     | Vegetable    | $0.75          | E002             |
| I003           | Cheese       | Dairy        | $2.00          | E002             |



| Dishes         |            |             |
| -------------- | ---------- | ----------- |
| +DishID        | +DishName   | +Description |
| -------------- | ---------- | ----------- |
| D001           | Pizza       | Delicious pizza with various toppings |
| D002           | Salad       | Fresh mixed vegetables with vinaigrette |


| DishIngredients |              |                 |
| --------------- | ------------ | --------------- |
| +Quantity       | +DishID (FK) | +IngredientID (FK) |
| --------------- | ------------ | --------------- |
| 2               | D001         | I001            |
| 3               | D001         | I002            |
| 1               | D002         | I002            |
| 2               | D002         | I003            |


| Pricing         |              |                |                 |                  |                  |
| --------------- | ------------ | -------------- | --------------- | ---------------- |-----------------|
| +PricingID      | +Cost        | +MarkupPercentage | +SupplierID (FK) | +IngredientID (FK) | +DishID (FK)|

| --------------- | ------------ | -------------- | --------------- | ---------------- | ---------------- |
| P001            | $2.00         | 0.20           | E001            | I001             | D001             |
| P002            | $1.00         | 0.25           | E002            | I002             | D001             |
| P003            | $3.50         | 0.30           | E002            | I003             | D001             |
| P004            | $0.50         | 0.15           | E002            | I002             | D002             |