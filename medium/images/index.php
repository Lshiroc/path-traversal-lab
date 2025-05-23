<?php
    $filename = str_replace("../", "", $_GET["filename"]);
    $path = '/var/www/images/' . $filename;
    
    if (file_exists($path)) {
        $mime = mime_content_type($path);
        header("Content-Type: $mime");
        readfile($path);
    } else {
        header("HTTP/1.1 404 Not Found");
        echo "File not found.";
    }
?>
