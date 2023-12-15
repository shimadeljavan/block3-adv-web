<?php
class connectionObject {
    public function __construct(public $host, public $username, public $password, public $database) {
    }
}

class dishModel {
    private $mysqli;
    private $connectionObject;
    public function __construct($connectionObject) {
        $this->connectionObject = $connectionObject;
    }
    public function connect() {
        try {
            $mysqli = new mysqli($this->connectionObject->host, $this->connectionObject->username, $this->connectionObject->password, $this->connectionObject->database);
            if($mysqli->connect_error) {
                throw new Exception('Could not connect');
            }
            return $mysqli;
        } catch(Exception $e) {
            return false;
        }
    }
    public function selectDish(){
        $mysqli = $this->connect();
        if($mysqli) {
            $result = $mysqli->query("SELECT * FROM dishes");
            while($row = $result->fetch_assoc()) {
                $results[] = $row;
            }
            $mysqli->close();
            return $results;
        } else {
            return false;
        }
    }
    public function insertDish($dishName, $price) {
        $mysqli = $this->connect();
        if($mysqli) {
            $mysqli->query("INSERT INTO dishes (dishName, price) VALUES ('$dishName', '$price')");
            $mysqli->close();
            return true;
        } else {
            return false;
        }
    }
}
?>

