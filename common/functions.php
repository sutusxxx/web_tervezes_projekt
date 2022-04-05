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
    $result = [];
    try {
        $sql = "SELECT username FROM users";
        global $db;
        $rs = $db->query($sql);
        foreach($rs as $row) {
            $result[] = $row;
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    return $result;
}

function saveUser($user) {
    global $db;
    $sql = "INSERT INTO users (username, password, email, date_of_birth, gender) VALUES (?, ?, ?, ?, ?)";
    $stmt = $db->prepare($sql);
    $result = $stmt->execute([$user['username'], $user['password'], $user['email'], $user['dateOfBirth'], $user['gender']]);
    if($result) {
        header("Location: http://localhost/login_page.php");
    } else {
        echo 'User save failed!';
    }
}