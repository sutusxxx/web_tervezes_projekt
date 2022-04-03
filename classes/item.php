<?php
class Item {
    private string $name;
    private string $description;
    private int $price;

    public function __contruct(string $name, string $description, string $price) {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
    }

    //TODO GETTER & SETTER
    public function getName() {
        return $this->name;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getPrice() {
        return $this->price;
    }
}