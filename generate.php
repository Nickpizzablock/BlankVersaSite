<?php
// Define the list of Markdown files and their corresponding output HTML files
$sites = [
    ["/md/breakcore.md", "/html/blog/breakcore.html"],
    ["/md/php.md", "/html/blog/php.html"],
];

// For each site, generate the HTML file
foreach ($sites as [$md_path, $html_path]) {
    // Static site generator script
    // This script generates HTML files with proper UTF-8 encoding

    // Set the markdown file path for content.php to use
    $GLOBALS['markdown_file_path'] = ltrim($md_path, '/');

    // Start output buffering
    ob_start();

    // Include the index.php file to generate content
    include 'php/index.php';

    // Get the generated content
    $content = ob_get_clean();

    // Write to file with proper UTF-8 encoding (with BOM to ensure proper encoding)
    $utf8_bom = "\xEF\xBB\xBF";
    file_put_contents(ltrim($html_path, '/'), $utf8_bom . $content, LOCK_EX);

    echo "Generated $html_path successfully with UTF-8 encoding!\n";
} 