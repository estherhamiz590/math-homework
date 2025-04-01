<?php
// Assuming $file_name is your file name and you have an array of paths to files

$files = [
    "path/to/file1.txt",
    "path/to/file2.png",
    "path/to/another_file.pdf"
];

for ($i = 0; $i < count($files); $i++) {
    echo "File: " . $files[$i] . "<br>";
}

echo "Files listed in the array:";

foreach ($files as $file) {
    echo $file . "<br>";
}
