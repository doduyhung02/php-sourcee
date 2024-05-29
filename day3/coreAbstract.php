<?php
// Abstract class Product
abstract class Product {
    protected $id;
    protected $name;

    // Constructor
    public function __construct($id, $name) {
        $this->id = $id;
        $this->name = $name;
    }
    // Getters and setters
    public function getId() {
        return $this->id;
    }
    public function setId($id) {
        $this->id = $id;
    }
    public function getName() {
        return $this->name;
    }
    public function setName($name) {
        $this->name = $name;
    }
    // Abstract method toString()
    abstract public function toString();
}
// Class Laptop extending Product
class Laptop extends Product {
    private $company;
    private $color;
    private $amount;
    private $price;
    // Constructor
    public function __construct($id, $name, $company, $color, $amount, $price) {
        parent::__construct($id, $name);
        $this->company = $company;
        $this->color = $color;
        $this->amount = $amount;
        $this->price = $price;
    }
    // Getters and setters
    public function getCompany() {
        return $this->company;
    }
    public function setCompany($company) {
        $this->company = $company;
    }
    public function getColor() {
        return $this->color;
    }
    public function setColor($color) {
        $this->color = $color;
    }
    public function getAmount() {
        return $this->amount;
    }
    public function setAmount($amount) {
        $this->amount = $amount;
    }
    public function getPrice() {
        return $this->price;
    }
    public function setPrice($price) {
        $this->price = $price;
    }
    // Method for calculating subtotal
    public function calculateSubtotal() {
        return $this->price * $this->amount;
    }
    // Method toString() for displaying an object
    public function toString() {
        return "{$this->getId()}-{$this->getName()}-{$this->company}-{$this->color}-{$this->amount}-{$this->price}-{$this->calculateSubtotal()}";
    }
}
?>