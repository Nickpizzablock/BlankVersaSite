<?php
// Static site generator script
// This script generates HTML files with proper UTF-8 encoding

// Start output buffering
ob_start();

// Include the index.php file to generate content
include 'php/index.php';

// Get the generated content
$content = ob_get_clean();

// Write to file with proper UTF-8 encoding (with BOM to ensure proper encoding)
$utf8_bom = "\xEF\xBB\xBF";
file_put_contents('php/indexphp.html', $utf8_bom . $content, LOCK_EX);

echo "Generated indexphp.html successfully with UTF-8 encoding!\n";
?>