<?php
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

// DB connection
$conn = new mysqli("localhost", "root", "tw1tw1l1tstr", "nexahomes");
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);

$result = $conn->query("SELECT * FROM realstate_enquiry");

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

// Header row
$sheet->setCellValue('A1', 'ID');
$sheet->setCellValue('B1', 'Name');
$sheet->setCellValue('C1', 'Phone');
$sheet->setCellValue('D1', 'Location');
$sheet->setCellValue('E1', 'Email');

// Data rows
$rowNum = 2;
while ($row = $result->fetch_assoc()) {
    $sheet->setCellValue("A$rowNum", $row['id']);
    $sheet->setCellValue("B$rowNum", $row['Name']);
    $sheet->setCellValue("C$rowNum", $row['Phone']);
    $sheet->setCellValue("D$rowNum", $row['Location']);
    $sheet->setCellValue("E$rowNum", $row['Email']);
    $rowNum++;
}

$conn->close();

// Output file
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="realestate_enquiries.xlsx"');
header('Cache-Control: max-age=0');

$writer = new Xlsx($spreadsheet);
$writer->save('php://output');
exit;
