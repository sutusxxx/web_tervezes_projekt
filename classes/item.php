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
}