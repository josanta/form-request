<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the combined form data
    $combinedData = $_POST['combinedData'];

    // Split the combined data into key-value pairs
    $dataPairs = explode('&', rtrim($combinedData, '&'));

    // Create an associative array to store key-value pairs
    $dataArray = [];
    foreach ($dataPairs as $pair) {
        list($key, $value) = explode('=', $pair);
        $dataArray[urldecode($key)] = urldecode($value);
    }
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Processed Form Data</title>
        <style>
            table {
                border-collapse: collapse;
                width: 50%;
                margin: 20px;
            }

            table, th, td {
                border: 1px solid black;
            }

            th, td {
                padding: 10px;
                text-align: left;
            }
        </style>
    </head>
    <body>

    <h2>Summary Table</h2>
    <table>
        <tr>
            <th>Key</th>
            <th>Value</th>
        </tr>

        <?php
        // Display the key-value pairs in a table
        foreach ($dataArray as $key => $value) {
            echo "<tr><td><strong>$key</strong></td><td>$value</td></tr>";
        }
        ?>

    </table>

    </body>
    </html>

    <?php
}
?>
