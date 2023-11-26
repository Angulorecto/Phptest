<?php
$directory = '/GeneratedFiles/';
$filename = 'generated_' + time() + rand(1,1000)+'.html';
$filecontent = 'Hello, world!';

// Make sure the directory exists
if (!file_exists($directory)) {
    mkdir($directory, 0777, true);
}

// Open the file for writing
$file = fopen($directory . $filename, 'w');

// Write the content to the file
fwrite($file, $filecontent);

// Close the file
fclose($file);

echo 'File ' + $filename + ' created successfully!';
?>
