<?php

class SupplierController {
    private $supplier;

    public function __construct($connection) {
        $this->supplier = new SupplierModel($connection);
    }

    public function showSuppliers() {
        $suppliers = $this->supplier->selectSuppliers();
        include 'views/suppliers.php';  
    }

    public function showSupplierForm() {
        include 'views/supplier_form.php'; 
    }

    public function addSupplier() {
        $supplierName = $_POST['supplierName'];
        $address = $_POST['address'];
        $contactNumber = $_POST['contactNumber'];
        if(!$supplierName) {
            echo "<p>Missing information</p>";
            $this->showSupplierForm();
            return;
        } else if($this->supplier->insertSupplier($supplierName, $address, $contactNumber)) {
            echo "<p>Added supplier: $supplierName successfully </p>";
        } else {
            echo "<p>Could not add supplier </p>";
        }
        $this->showSuppliers();
    }
    

    public function deleteSupplier($supplierID) {
        $supplier = $this->supplier->getSupplierByID($supplierID);
        if ($supplier) {
            include 'views/supplier_delete.php';
        } else {
            echo "<p>Supplier not found</p>";
            $this->showSuppliers();
        }
    }

    public function confirm_deleteSupplier($supplierID) {
        $supplier = $this->supplier->getSupplierByID($supplierID);
        if ($supplier) {
            include 'views/supplier_confirm_delete.php';
        } else {
            echo "<p>Supplier not found</p>";
            $this->showSuppliers();
        }
    }
}

?>
