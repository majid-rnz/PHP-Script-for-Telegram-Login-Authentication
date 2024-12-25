<?php
function checkTelegramAuthorization($auth_data) {
    $check_hash = $auth_data['hash'];
    unset($auth_data['hash']);
    
    // Sort data alphabetically
    $data_check_arr = [];
    foreach ($auth_data as $key => $value) {
        $data_check_arr[] = $key . '=' . $value;
    }
    sort($data_check_arr);
    $data_check_string = implode("\n", $data_check_arr);
    
    // Calculate hash using bot's token
    $secret_key = hash('sha256', 'YOUR_BOT_TOKEN', true);
    $hash = hash_hmac('sha256', $data_check_string, $secret_key);
    
    // Verify integrity
    if (strcmp($hash, $check_hash) !== 0) {
        return false;
    }
    
    // Check for expiration
    if ((time() - $auth_data['auth_date']) > 86400) { // 24 hours
        return false;
    }
    
    return true;
}

$auth_data = $_GET;

if (checkTelegramAuthorization($auth_data)) {
    // Successful login - display user details
    echo "<h1>Welcome, " . htmlspecialchars($auth_data['first_name']) . "!</h1>";
    echo "<h2>Here are the details provided by Telegram:</h2>";
    echo "<pre>";
    print_r($auth_data); // Display all user data
    echo "</pre>";
} else {
    // Authentication failed
    echo "<h1>Authentication failed.</h1>";
}
