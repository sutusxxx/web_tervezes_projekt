<?php
    require_once('connectDB.php');

function loadItems(string $type): array {
    // $file = fopen($fileName, "r");
    // $data = [];

    // if (!$file) {
    //     die("Couldn't load the file!");
    // }

    // while(($row = fgets($file)) !== false) {
    //     $rowData = unserialize($row);
    //     $data[] = $rowData;
    // }

    // fclose($file);
    // return $data;
    $query = "SELECT * FROM items";
    global $connection;
    $response = @mysqli_query($connection, $query);

    $items = [];
    if ($response) {
        while($row = mysqli_fetch_array($response)) {
            $items[] = $row;
        }
    }
    return $items;
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
        header("Location: http://localhost/login_page.php");
    } else {
        echo 'User save failed!';
    }
}