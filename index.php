<?php
// Set the content for the HTML file
$htmlContent = '<!DOCTYPE html>
<html>
<head>
    <title>Generated HTML</title>
</head>
<body>
    <p>This is a paragraph of text in the generated HTML file.</p>
</body>
</html>';

// Generate a unique file name based on timestamp and random string
$uniqueFileName = 'generated_' . time() . '_' . bin2hex(random_bytes(4)) . '.html';

// Open the file for writing
$file = fopen($uniqueFileName, 'w');

// Write the HTML content to the file
fwrite($file, $htmlContent);

// Close the file
fclose($file);

// Commit and push the changes to GitHub
exec('git add ' . $fileName);
exec('git commit -m "Add generated HTML file"');
exec('git push origin master');

echo "HTML file '$uniqueFileName' has been created successfully.";
?>
