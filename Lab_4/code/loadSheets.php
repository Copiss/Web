<?php

require __DIR__.'/../vendor/autoload.php';
function findFirstEmptyRow($values) {
    $rowCount = count($values);

    for ($i = 0; $i < $rowCount; $i++) {
        $row = $values[$i];
        $isEmptyRow = true;

        foreach ($row as $cell) {
            if (!empty($cell)) {
                $isEmptyRow = false;
                break;
            }
        }

        if ($isEmptyRow) {
            return $i + 1;
        }
    }
    return $rowCount + 1;
}

use Google\Client as Google_Client;

try{
    $client = new Google_Client;
    $client->setApplicationName("lab4444");
    $client->setScopes([Google_Service_Sheets::SPREADSHEETS]);
    $client->addScope('https://www.googleapis.com/auth/spreadsheets');
    $client->setAuthConfig(__DIR__.'/credentials.json');
    $client->setAccessType("offline");
    $client->useApplicationDefaultCredentials();

    $service = new Google_Service_Sheets($client);
    $spreadsheetId = '1qkdpYxTIkNK8Q3nZXVtD-ArJxTZglN44uij_mK8LJy8';

    $response = $service->spreadsheets_values->get($spreadsheetId, 'Лист1!A2:D');
    $values = $response->getValues();

    if(is_array($values)) {
        foreach ($values as $row) {
            echo '<tr>';
            foreach ($row as $cell) {
                echo "<td>" . htmlspecialchars($cell) . "</td>";
            }
            echo '</tr>';
        }
    } else {
        echo "<tr><td colspan='4'>No data found</td></tr>";
    }

}catch(Exception $e){
    echo($e->getMessage() . ' ' . $e->getLine() . ' ' . $e->getFile() . ' ' . $e->getCode);
}
