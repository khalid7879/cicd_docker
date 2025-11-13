<?php
function connectWithRetry($host, $username, $password, $database, $maxRetries = 5, $waitTime = 5) {
    $retries = 0;
    
    while ($retries < $maxRetries) {
        try {
            $conn = new mysqli($host, $username, $password, $database);
            
            if ($conn->connect_error) {
                error_log("Database connection failed (attempt " . ($retries + 1) . "): " . $conn->connect_error);
                $retries++;
                sleep($waitTime);
                continue;
            }
            
            return $conn;
        } catch (Exception $e) {
            error_log("Database connection exception (attempt " . ($retries + 1) . "): " . $e->getMessage());
            $retries++;
            sleep($waitTime);
        }
    }
    
    throw new Exception("Failed to connect to database after $maxRetries attempts");
}

// Usage
try {
    $conn = connectWithRetry("mysql-db", "root", "pass@321", "student_enrollment", 10, 5);
    echo "Connected successfully";
} catch (Exception $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
