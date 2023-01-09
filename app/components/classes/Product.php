<?php


class Product {


    public $id;
    public $name;
    public $imagePath;
    public $description;
    public $price;
    public $stock;



    public function __construct($id, $name, $imagePath, $description, $price, $stock) {

        $this->id = $id;
        $this->name = $name;
        $this->imagePath = $imagePath;
        $this->description = $description;
        $this->price = $price;
        $this->stock = $stock;

    }




    function getId() {
        return $this->id;
    }
    
    function getName() {
        return $this->name;
    }
    
    function getImagePath() {
        return $this->imagePath;
    }
    
    function getDescription() {
        return $this->description;
    }
    
    function getPrice() {
        return $this->price;
    }
    
    function getStock() {
        return $this->stock;
    }






}



