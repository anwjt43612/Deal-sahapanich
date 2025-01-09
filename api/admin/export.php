<?php
require '../config/db.php';

// Fetch all registrations
$stmt = $pdo->prepare("SELECT * FROM registrations ORDER BY id DESC");
$stmt->execute();
$registrations = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Set headers for file download
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=registrations.csv');
header('Pragma: no-cache');
header('Expires: 0');

// Open PHP output stream for CSV
$output = fopen('php://output', 'w');

// Output BOM (Byte Order Mark) for UTF-8 encoding
fwrite($output, "\xEF\xBB\xBF"); // BOM for UTF-8

// Output CSV column headers
fputcsv($output, [
    'ID', 'ชื่อ', 'นามสกุล', 'Email', 'เบอร์โทร', 'ต้องการซื้อ สด หรือ ผ่อน', 'Trade-In', 
    'Trade Model', 'ช่องทางการซื้อสินค้า', 'ชื่อเสนอขาย หรือ ร้านตัวแทน', 'มีบัญชีไลน์ sahaconnect'
]);

// Output the rows
foreach ($registrations as $registration) {
    fputcsv($output, [
        $registration['id'],
        $registration['first_name'],
        $registration['last_name'],
        $registration['email'],
        $registration['phone'],
        $registration['interests'],
        $registration['trade_in'],
        $registration['trade_model'] ?? 'N/A',
        $registration['place'],
        $registration['place_details'] ?? 'N/A',
        $registration['member_status']
    ]);
}

exit();
