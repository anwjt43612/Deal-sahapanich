<?php
// Connection details from Supabase
$host = 'aws-0-ap-southeast-1.pooler.supabase.com';  // Host ของ Supabase
$port = '6543';  // พอร์ต
$dbname = 'postgres';  // ชื่อฐานข้อมูล
$username = 'postgres.pnhtwpczhtomzrcowaek';  // ชื่อผู้ใช้
$password = 'anuwatboy10942';  // รหัสผ่านที่คุณได้จาก Supabase

try {
    // เชื่อมต่อฐานข้อมูล PostgreSQL
    $pdo = new PDO("pgsql:host=$host;port=$port;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Database connection successful!";
} catch (PDOException $e) {
    echo "Database connection failed: " . $e->getMessage();
}
?>
