<?php
if ($_SERVER['REQUEST_URI'] === '/health') {
    header('Content-Type: application/json');
    echo '{"status": "healthy"}';
    exit;
}

// Получаем текущее время и IP адрес
$current_time = date('Y-m-d H:i:s');
$server_ip = $_SERVER['SERVER_ADDR'] ?? 'Unknown';
$hostname = gethostname() ?: 'Unknown';
?>
<!DOCTYPE html>
<html>
<head>
    <title>My PHP App</title>
    <style>
        body { font-family: Times New Roman, sans-serif; margin: 40px; }
        .info { background: #f5f5f5; padding: 15px; border-radius: 5px; margin: 20px 0; }
    </style>
</head>
<body>
    <h1>Hello from PHP!</h1>
    <p>This is a simple test application owner Andrey Gurenich</p>

    <div class="info">
        <h3>Server Information:</h3>
        <p><strong>Current Time:</strong> <?php echo $current_time; ?></p>
        <p><strong>Server IP:</strong> <?php echo $server_ip; ?></p>
        <p><strong>Hostname:</strong> <?php echo $hostname; ?></p>
    </div>
</body>
</html>
