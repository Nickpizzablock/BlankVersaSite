                    <div class="welcome">
<?php

// 1. Require the Composer autoloader
require 'vendor/autoload.php';

// 2. Define the path to your Markdown file
$markdown_file_path = 'md/writing.md';

// 3. Read the entire content of the file into a string
// Use file_get_contents() to safely load the file data
$markdown_text = file_get_contents($markdown_file_path);

// Check if the file read was successful (good practice)
if ($markdown_text === false) {
    die("Error: Could not read Markdown file at $markdown_file_path");
}

// 4. Transform the string content into HTML
use Michelf\Markdown; // Use the namespace for simplicity

$html_output = Markdown::defaultTransform($markdown_text);

// 5. Output the resulting HTML with indentation
$spaces = 24; // Change this number to adjust indentation
// echo str_repeat(' ', $spaces) . str_replace("\n", "\n" . str_repeat(' ', $spaces), $html_output); // original
$indented_html = str_replace("\n", "\n" . str_repeat(' ', $spaces), $html_output); //except last line
echo str_repeat(' ', $spaces) . rtrim($indented_html);

?>

                    </div>