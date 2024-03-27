<?php

class Product {
    public $productId;
    public $productCategory;
    public $productName;
    public $productPrice;
    public $productDescription;
    public $quantityInStock;

    // Constructor to initialize the properties
    public function __construct($productId, $productCategory, $productName, $productPrice, $productDescription, $quantityInStock) {
        $this->productId = $productId;
        $this->productCategory = $productCategory;
        $this->productName = $productName;
        $this->productPrice = $productPrice;
        $this->productDescription = $productDescription;
        $this->quantityInStock = $quantityInStock;
    }

    // Method to transform a product instance into HTML
    public function generateProductItemHTML() {
        // Read the HTML template from the file
        $template = file_get_contents('product-item.html');
        
        // Replace placeholders with actual product data
        $template = str_replace('{{productName}}', $this->productName, $template);
        $template = str_replace('{{productDescription}}', $this->productDescription, $template);
        $template = str_replace('{{productPrice}}', $this->productPrice, $template);
        
        return $template;
    }
}

