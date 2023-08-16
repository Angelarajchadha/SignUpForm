<?php
$blacklist = ["127.0.0.1", "192.168.0.1"]; // Example blacklist

$ipAddress = $_POST["ipAddress"];

if (in_array($ipAddress, $blacklist)) {
    echo "This IP address is blacklisted.";
} else {
    $allowedRange = '/^192\.168\.0\.\d{1,3}$/'; // Example allowed range: 192.168.0.1 - 192.168.0.255
    
    if (!preg_match($allowedRange, $ipAddress)) {
        echo "IP address is not within the allowed range.";
    } else {
        // Perform additional processing or save the data
        echo "IP address is valid and allowed.";
    }
}
?>