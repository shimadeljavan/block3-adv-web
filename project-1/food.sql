CREATE TABLE `shima94_food`.`suppliers` (`supplierID` INT NOT NULL AUTO_INCREMENT , `supplierName` VARCHAR(255) NOT NULL , `address` VARCHAR(255) NOT NULL , `contactNumber` VARCHAR(255) NOT NULL , PRIMARY KEY (`supplierID`)) ENGINE = InnoDB;
INSERT INTO `suppliers` (`supplierID`, `supplierName`, `address`, `contactNumber`) VALUES (NULL, 'Supplier 1', '123 Main Street', '555-1234');


CREATE TABLE `shima94_food`.`ingredient` (`ingredientID` INT NOT NULL AUTO_INCREMENT , `ingredientName` VARCHAR(255) NOT NULL , `type` VARCHAR(255) NOT NULL , `price` VARCHAR(255) NOT NULL , `supplierID` INT NOT NULL, PRIMARY KEY (`ingredientID`)) ENGINE = InnoDB;
INSERT INTO `ingredient` (`ingredientID`, `ingredientName`, `type`, `price`, `supplierID`) VALUES (NULL, 'Flour', 'Grain', '1.99', '1');

CREATE TABLE `shima94_food`.`Dishes` (`dishID` INT NOT NULL AUTO_INCREMENT , `dishName` VARCHAR(255) NOT NULL , `price` VARCHAR(255) NOT NULL , PRIMARY KEY (`dishID`)) ENGINE = InnoDB;
INSERT INTO `Dishes` (`dishID`, `dishName`, `Price`) VALUES (NULL, 'Margherita Pizza', '9.99');

CREATE TABLE `shima94_food`.`FoodVendor` (`vendorID` INT NOT NULL AUTO_INCREMENT , `vendorName` VARCHAR(255) NOT NULL , `dishID` INT NOT NULL , `supplierID` INT NOT NULL , PRIMARY KEY (`vendorID`)) ENGINE = InnoDB;

ALTER TABLE `ingredient` ADD CONSTRAINT `suppelierID` FOREIGN KEY (`supplierID`) REFERENCES `suppliers`(`supplierID`) ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE `FoodVendor` ADD CONSTRAINT `dishId` FOREIGN KEY (`dishID`) REFERENCES `Dishes`(`dishID`) ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE `FoodVendor` ADD CONSTRAINT `supplierID` FOREIGN KEY (`supplierID`) REFERENCES `suppliers`(`supplierID`) ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE `FoodVendor` ADD CONSTRAINT `ingredientID` FOREIGN KEY (`ingredientID`) REFERENCES `ingredient`(`ingredientID`) ON DELETE RESTRICT ON UPDATE RESTRICT;

INSERT INTO `FoodVendor` (`vendorID`, `vendorName`, `dishID`, `supplierID`, `ingredientID`) VALUES (NULL, 'Vendor1', '4', '4', '4'), (NULL, 'Vendor2', '5', '5', '6');

SELECT * FROM `FoodVendor` NATURAL JOIN Dishes;

SELECT * FROM `FoodVendor` NATURAL JOIN Dishes

