<?php
require 'vendor/autoload.php'; // PhpSpreadsheet autoload

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

// DB connection
$conn = new mysqli("localhost", "root", "tw1tw1l1tstr", "nexahomes");
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);

// Fetch data
$result = $conn->query("SELECT * FROM enquiry_loans");

// Create spreadsheet
$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

// Set header row
$sheet->setCellValue('A1', 'ID');
$sheet->setCellValue('B1', 'Name');
$sheet->setCellValue('C1', 'City');
$sheet->setCellValue('D1', 'Mobile');
$sheet->setCellValue('E1', 'Email');

// Fill data
$rowNum = 2;
while ($row = $result->fetch_assoc()) {
    $sheet->setCellValue("A$rowNum", $row['id']);
    $sheet->setCellValue("B$rowNum", $row['Name']);
    $sheet->setCellValue("C$rowNum", $row['City']);
    $sheet->setCellValue("D$rowNum", $row['Mobile']);
    $sheet->setCellValue("E$rowNum", $row['Email']);
    $rowNum++;
}

$conn->close();

// Set headers for download
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="loan_enquiries.xlsx"');
header('Cache-Control: max-age=0');

// Output file to browser
$writer = new Xlsx($spreadsheet);
$writer->save('php://output');
exit;
