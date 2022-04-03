<?php

function loadItems(string $fileName): array {
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
    require_once('common/connectDB.php');
    require_once('classes/item.php');
    $query = "SELECT * FROM items";

    $response = @mysqli_query($connection, $query);

    $items = [];
    if ($response) {
        while($row = mysqli_fetch_array($response)) {
            $items[] = $row;
        }
    }
    return $items;
}