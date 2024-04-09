<?php
// Set header to indicate the response type is JSON
header('Content-Type: application/json');

// Sanitize a string input
function sanitizeInput($input) {
    return filter_var($input, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW | FILTER_FLAG_STRIP_HIGH);
}

// Validate the 'prob' parameter as a boolean
function validateBoolean($value) {
    if ($value === 'true' || $value === '1') return true;
    if ($value === 'false' || $value === '0') return false;
    return null; // Returns null if the value is neither true nor false representations
}

// Retrieve and sanitize the domain parameter
$domain = isset($_GET['domain']) ? sanitizeInput($_GET['domain']) : 'unknown';

// Retrieve and validate the 'prob' parameter
$probValue = isset($_GET['prob']) ? $_GET['prob'] : null;
$prob = validateBoolean($probValue);

// Check for invalid 'prob' input and handle accordingly
if (is_null($prob)) {
    echo json_encode(["error" => "Invalid 'prob' value"]);
    exit; // Stop script execution for invalid input
}

// Create the response array with sanitized and validated inputs
$response = [
    'domain' => $domain,
    'protectedB' => $prob
];

// Convert the response to JSON and print it
echo json_encode($response);
