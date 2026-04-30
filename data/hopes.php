<?php
// Allow requests from any origin (use specific origin like http://localhost:3000 in production)
header("Access-Control-Allow-Origin: *");

// Allow specific methods
header("Access-Control-Allow-Methods: GET");

// Allow specific headers (e.g., Content-Type, Authorization)
header("Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With");

// Handle preflight (OPTIONS) requestsAccess to XMLHttpRequest at 'localhost:8000/hopes' from origin 'http://localhost:4201' has been blocked by CORS policy: Cross origin requests are only supported for protocol schemes: chrome, chrome-extension, chrome-untrusted, data, http, https, isolated-app.
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    http_response_code(200);
    exit();
}
// Set the Content-Type to HTML (this is the default, but good practice to define)
header('Content-Type: text/html; charset=UTF-8');

// Access data from the GET request using the $_GET superglobal
$name = isset($_GET['name']) ? htmlspecialchars($_GET['name']) : 'Guest';

// Build the HTML response

// echo "<p>To the rational mind nothing is inexplicable, only unexplained.</p>";
echo "<p>Is it the cacheing?/p>";

?>
