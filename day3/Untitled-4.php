<?php
class product{
    public $id;
    public $name;
    public function __construct($id,$name,){
        $this->id = $id;
        $this->name = $name;
}
function set_id($n){
    $this->id = $n;
}
function set_name($n){
    $this->name = $n;
}
function get_id(){
    return $this->id;
}
function get_name(){
    return $this->name;
}
public function toString(){
    return $this->id."-".$this->name . "-"();
}
}
class Laptop {
    public $company;
    public $color;
    public $amount;
    public $price;
    public function __construct($company,$color,$amount,$price){
    $this->company = $company;
    $this->color = $color;
    $this->amount = $amount;
    $this->price = $price;
}
function set_company($n){
    $this->company = $n;
    }
function set_color($n){
    $this->color = $n;
}
function set_amount($n){
    $this->amount = $n;
}
function set_price($n){
    $this->price = $n;
}
function get_company($n){
    return $this->company;
}
function get_color($n){
    return $this->color;
}
function get_amount($n){
    return $this->amount;
}
function get_price($n){
    return $this->price;
}
public function subtotal(){
    return intval($this->price) * intval($this->amount);
}
public function toString(){
   return $this->company . "-" . $this->color . "-" . $this->amount . "-" . $this->price . "-" . $this->subtotal();
}
}
?>