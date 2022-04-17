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

    public function getUsername(): string {
        return $this->username;
    }

    public function setUsername(string $username): void {
        $this->username = $username;
    }

    public function getPassword(): string {
        return $this->password;
    }

    public function setPassword(string $password): void {
        $this->password = $password;
    }

    public function getEmail(): string {
        return $this->email;
    }

    public function setEmail(string $email): void {
        $this->email = $email;
    }

    public function getDateOfBirth(): date {
        return $this->dateOfBirth;
    }

    public function setDateOfBirth(string $dateOfBirth): void {
        $this->dateOfBirth = $dateOfBirth;
    }

    public function getGender(): string {
        return $this->gender;
    }

    public function setGender(string $gender): void {
        $this->gender = $gender;
    }
}