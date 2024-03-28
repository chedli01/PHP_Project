<?php
class ProductRepository {
    private $conn;

    public function __construct() {
        global $conn;
        $this->conn = $conn;
    }

    // Method to fetch all products from the database
    public function getAllProducts() {
        $sql = "SELECT * FROM products";
        $result = $this->conn->query($sql);

        $products = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $products[] = $row;
            }
        }
        return $products;
    }


}

?>
