<?php
class User {
    private string $username;
    private string $password;
    private string $email;
    private array $cart;

    public function __contruct(string $username, string $password, string $email) {
        $this->username = $username;
        $this->password = $password;
        $this->email = $email;
        $this->cart = [];
    }

    // TODO GETTER & SETTER
}