<?php
class User {
    private string $username;
    private string $password;
    private string $email;
    private date $dateOfBirth;
    private string $gender;

    public function __contruct(string $username, string $password, string $email, date $dateOfBirth, string $gender) {
        $this->username = $username;
        $this->password = $password;
        $this->email = $email;
        $this->dateOfBirth = $dateOfBirth;
        $this->gender = $gender;
    }

    public function getUsername() {
        return $this->username;
    }
    public function getPassword() {
        return $this->password;
    }
    public function getEmail() {
        return $this->email;
    }
    public function getDateOfBirth() {
        return $this->dateOfBirth;
    }
    public function getGender() {
        return $this->gender;
    }
}