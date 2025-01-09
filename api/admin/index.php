<?php
session_start();
require '../config/db.php'; // Include database connection file

// Check if the user is logged in
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: login.php"); // Redirect to login page if not logged in
    exit();
}

// Fetch all registrations from the database
$stmt = $pdo->prepare("SELECT * FROM registrations ORDER BY id DESC");
$stmt->execute();
$registrations = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Summary Data Calculation
$totalRegistrations = count($registrations);
$membersYes = count(array_filter($registrations, fn($r) => $r['member_status'] === 'Yes'));
$membersNo = $totalRegistrations - $membersYes;
?>

<style>
    /* Apply the Mitr font to the entire page */
    * {
        font-family: 'Mitr', sans-serif;
    }

    body {
        font-weight: 300;
        font-style: normal;
        margin-bottom: 100px; /* Added space at the bottom for footer */
    }

    .container {
        margin-top: 50px;
    }
    table {
        font-size: 0.9rem;
    }
    th, td {
        text-align: center;
    }

    footer {
        background-color: #f1f1f1;
        padding: 20px 0;
        text-align: center;
        position: fixed;
        bottom: 0;
        width: 100%;
        border-top: 1px solid #ddd;
        font-size: 0.8rem; /* Make the text size smaller */
    }

    footer p {
        margin: 0;
        color: #666;
    }

    .summary-box {
        margin-bottom: 20px;
        padding: 15px;
        background-color: #f8f9fa;
        border: 1px solid #ddd;
        border-radius: 5px;
    }
    .summary-box h5 {
        margin: 0;
    }
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>รายชื่อผู้ลงทะเบียน</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mitr:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="../sp.ico">
</head>
<body>
    <div class="container" style="margin-top: 50px;">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 style="font-weight: 500;">รายชื่อผู้ลงทะเบียน</h2>
            <a href="logout.php" class="btn btn-danger">Logout</a>
        </div>

        <div class="summary-box">
            <h5>จำนวนคนที่ลงทะเบียน: <?= $totalRegistrations ?> คน</h5>
            <h5>มี Line Sahaconnect: <?= $membersYes ?> คน</h5>
            <h5>ไม่มี Line Sahaconnect: <?= $membersNo ?> คน </h5>
        </div>

        <a href="export.php" class="btn btn-success mb-3">Export to Excel</a>

        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ชื่อ</th>
                    <th>นามสกุล</th>
                    <th>Email</th>
                    <th>เบอร์โทรศัพท์</th>
                    <th>ต้องซื้อแบบ สด หรือ ผ่อน</th>
                    <th>Trade-In</th>
                    <th>Trade Model</th>
                    <th>ช่องทางการซื้อสินค้า</th>
                    <th>ชื่อเสนอขาย หรือ ร้านตัวแทน</th>
                    <th>มีบัญชี LINE Sahaconnect</th>
                </tr>
            </thead>
            <tbody>
                <?php if (count($registrations) > 0): ?>
                    <?php foreach ($registrations as $registration): ?>
                        <tr>
                            <td><?= htmlspecialchars($registration['first_name']) ?></td>
                            <td><?= htmlspecialchars($registration['last_name']) ?></td>
                            <td><?= htmlspecialchars($registration['email']) ?></td>
                            <td><?= htmlspecialchars($registration['phone']) ?></td>
                            <td><?= htmlspecialchars($registration['interests']) ?></td>
                            <td><?= htmlspecialchars($registration['trade_in'] ?? 'Not Specified') ?></td>
                            <td><?= htmlspecialchars($registration['trade_model'] ?? '-') ?></td>
                            <td><?= htmlspecialchars($registration['place']) ?></td>
                            <td><?= htmlspecialchars($registration['place_details'] ?? '-') ?></td>
                            <td><?= htmlspecialchars($registration['member_status']) ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="11">No registrations found.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <footer>
        <div class="container">
            <p>&copy; บริษัท สหพานิช เชียงใหม่ จำกัด</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
