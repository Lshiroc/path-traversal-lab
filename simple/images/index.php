<?php
    $filename = $_GET["filename"];
    $path = '/var/www/images/' . $filename;
    
    if (file_exists($path)) {
        $mime = mime_content_type($path);
        header("Content-Type: $mime");
        readFile($path);
    } else {
        http_response_code(404);
        echo "File not found.";
    }
?>
