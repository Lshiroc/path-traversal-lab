<?php
    $filename = str_replace("....//", "", $_GET["filename"]);
    $filename = str_replace("../", "", $filename);
    if (str_ends_with($filename, ".png") || str_ends_with($filename, ".jpg") 
        || str_ends_with($filename, ".jpeg") || str_ends_with($filename, ".webp")) {
        $path = '/var/www/images/' . $filename;

        if (file_exists($path)) {
            $mime = mime_content_type($path);
            header("Content-Type: $mime");
            readfile($path);
        } else {
            http_response_code(404);
            echo "File not found.";
        }
    } else {
        http_response_code(404);
        echo "File not found.";
    }
?>
