<?php
// Initialize the session
session_start();
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

use Phppot\DataSource;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;

// Database connection details
$dbHost = 'localhost';
$dbUser = 'ivas_homes';
$dbPassword = 'a4qhe6aaw6of';
$dbName = 'ivas_homes';

require_once ('./vendor/autoload.php');
// Create database connection
$conn = mysqli_connect($dbHost, $dbUser, $dbPassword, $dbName);

// Check if connection is successful
if (!$conn) {
    die('Database connection failed: ' . mysqli_connect_error());
}

// Check if the form has been submitted
if (isset($_POST['download'])) {
    // Get the table name from the form
    $tableName = $_POST['tableName'];

    // Get the column names and data from the table
    $result = mysqli_query($conn, "SELECT * FROM $tableName");
    $columns = array();
    $data = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
        if (empty($columns)) {
            $columns = array_keys($row);
        }
    }

    // Create a new Excel file
    $fileName = $tableName . '-' . date('Y-m-d H:i:s') . '.xlsx';
    $spreadsheet = new \PhpOffice\PhpSpreadsheet\Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();

    // Set column headers
    foreach ($columns as $columnIndex => $columnName) {
        $cell = $sheet->getCellByColumnAndRow($columnIndex + 1, 1);
        $cell->setValue($columnName);
        $cell->getStyle()->getFont()->setBold(true);
    }

    // Set data
    foreach ($data as $rowIndex => $rowData) {
        foreach ($columns as $columnIndex => $columnName) {
            $cell = $sheet->getCellByColumnAndRow($columnIndex + 1, $rowIndex + 2);
            $cell->setValue($rowData[$columnName]);
        }
    }

    // Download the file
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment;filename="' . $fileName . '"');
    header('Cache-Control: max-age=0');
    $writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($spreadsheet, 'Xlsx');
    $writer->save('php://output');
    exit;
}
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Download Campagin Leads</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <form method="post">
        <label for="tableName">Table Name:</label>
        <input type="text" name="tableName" id="tableName" required>
        <button type="submit" name="download">Download Excel</button>
        <a href="logout.php" class="btn btn-danger ml-3">Sign Out </a>
    </form>
</body>
</html>