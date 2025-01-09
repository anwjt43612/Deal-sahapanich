<?php
require 'config/db.php'; // Include database connection file

// Increase execution time (only if your server allows this change)
ini_set('max_execution_time', 60); // Allow up to 60 seconds of execution time

// Log function for debugging
function log_error($message) {
    error_log($message); // Logs messages to Vercel logs for debugging
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    try {
        // Retrieve form data with default fallback to avoid undefined index warnings
        $first_name = $_POST['first_name'] ?? '';
        $last_name = $_POST['last_name'] ?? '';
        $email = $_POST['email'] ?? '';
        $phone = $_POST['phone'] ?? '';
        $interests = $_POST['interests'] ?? '';
        $trade_in = $_POST['trade_in'] ?? 'No';
        $trade_model = $trade_in === 'Yes' ? ($_POST['trade_model'] ?? '') : null;
        $place = $_POST['place'] ?? '';
        $place_detail = $_POST['place_details'] ?? '';
        $member_status = $_POST['member_status'] ?? '';
        $privacy_policy = $_POST['privacy_policy'] ?? '';

        // Log incoming data for debugging
        log_error("Received data: first_name = $first_name, last_name = $last_name, email = $email");

        // Validate required fields
        if (
            empty($first_name) || empty($last_name) || empty($email) || empty($phone) || 
            empty($interests) || empty($trade_in) || empty($place) || 
            empty($privacy_policy) || empty($member_status)
        ) {
            throw new Exception("Please fill in all required fields.");
        }

        // Set up the PostgreSQL database connection
        $host = 'aws-0-ap-southeast-1.pooler.supabase.com';  
        $port = '6543';
        $dbname = 'postgres';
        $username = 'postgres.pnhtwpczhtomzrcowaek';
        $password = 'anuwatboy10942';

        try {
            $pdo = new PDO("pgsql:host=$host;port=$port;dbname=$dbname", $username, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            log_error("Database connection failed: " . $e->getMessage());
            die("Database connection failed: " . $e->getMessage());
        }

        // Prepare and execute SQL statement for inserting data
        $stmt = $pdo->prepare("
            INSERT INTO registrations (first_name, last_name, email, phone, interests, trade_in, trade_model, place, place_details, member_status) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
        ");

        // Log before executing the query
        log_error("Executing query: INSERT INTO registrations ...");

        // Execute the query
        $stmt->execute([$first_name, $last_name, $email, $phone, $interests, $trade_in, $trade_model, $place, $place_detail, $member_status]);

        // Log success message
        log_error("Data inserted successfully!");

        // Redirect to the specified URL after successful insertion
        header("Location: https://www.samsung.com/th/unpacked/");
        exit();

    } catch (Exception $e) {
        // Log error for debugging
        log_error("Error: " . $e->getMessage());

        // Handle errors and display a user-friendly message
        echo "Error: " . $e->getMessage();
        exit();
    }
}
?>
