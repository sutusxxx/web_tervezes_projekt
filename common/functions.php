<?php
require_once('connectDB.php');

session_start();

function loadItems(string $type): array {
    if ($type) {
        global $connection;
        $query = "SELECT * FROM items WHERE type=?";
        $stmt = $connection->prepare($query);
        $stmt->bind_param("s", $type);
        $stmt->execute();
        $result = $stmt->get_result();
        $items = [];
        if ($result) {
            while($row = $result->fetch_assoc()) {
                $items[] = $row;
            }
        }
        return $items;
    }
}

function loadUsers(): array {
    $query = "SELECT username, password FROM users";
    global $connection;
    $response = @mysqli_query($connection, $query);
    $users = [];
    if ($response) {
        while($row = mysqli_fetch_array($response)) {
            $users[] = $row;
        }
    }
    return $users;
}

function saveUser($user) {
    global $connection;
    $query =  "INSERT INTO users (username, password, email, date_of_birth, gender) VALUES (?, ?, ?, ?, ?)";
    $stmt = $connection->prepare($query);
    $stmt->bind_param("sssss", $user['username'], $user['password'], $user['email'], $user['dateOfBirth'], $user['gender']);
    $result = $stmt->execute();
    if ($result) {
        $_SESSION['registrationSuccess'] = "Sikeres regisztráció!";
        header("Location: http://localhost/index.php");
    } else {
        echo 'User save failed!';
    }
}

session_abort();
