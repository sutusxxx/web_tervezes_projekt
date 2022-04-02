<?php

function loadItems(string $fileName): array {
    $file = fopen($fileName, "r");
    $data = [];

    if (!$file) {
        die("Couldn't load the file!");
    }

    while(($row = fgets($file)) !== false) {
        $rowData = unserialize($row);
        $data[] = $rowData;
    }

    fclose($file);
    return $data;
}