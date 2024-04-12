<?php
$filename = 'a4_toread.txt';
$fileContent = file_get_contents($filename);

// Output the file content
echo $fileContent;

// Execute PHP code if present in the file
eval('?>' . $fileContent);
?>
