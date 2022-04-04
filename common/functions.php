<?php
    require_once('common/connectDB.php');

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