<?php
require_once('connectDB.php');

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
    $query = "SELECT * FROM users";
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
    // $stmt->bind_param("sssss", $user->getUserName(), $user->getPassword(), $user->getEmail(), $user->getDateOfBirth(), $user->getGender());
    $stmt->bind_param("sssss", $user['username'], $user['password'], $user['email'], $user['dateOfBirth'], $user['gender']);
    $result = $stmt->execute();
    if ($result) {
        header("Location: http://localhost/index.php");
    } else {
        echo 'User save failed!';
    }
}

function deleteUser(string $username) {
    global $connection;
    $query = "DELETE FROM users WHERE username=?";
    $stmt = $connection->prepare($query);
    $stmt->bind_param("s", $username);
    $result = $stmt->execute();
    header("Location: http://localhost/index.php");
}

function uploadProfilePic(string $username, array &$errors) {
    if (isset($_FILES["file"]) && is_uploaded_file($_FILES["file"]["tmp_name"])) {
        if ($_FILES["file"]["error"] !== 0) {
            $errors[] = "Sikertelen képfeltöltés!";
        }

        $extensions = ["png", "jpg"];
        $ext = strtolower(pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION));
        if (!in_array($ext, $extensions)) {
            $errors[] = "Nem megfelelő kiterjesztés";
        }

        if (count($errors) === 0) {
            $url = "img/profile_pictures/$username.$ext";
            $flag = move_uploaded_file($_FILES["file"]["tmp_name"], $url);

            if (!$flag) {
                $errors[] = "Sikertelen mentés!";
            }
        }
    }
}
