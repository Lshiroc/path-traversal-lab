<?php
    if (!function_exists('str_ends_with')) {
        function str_ends_with($haystack, $needle) {
            $length = strlen($needle);
            if ($length == 0) {
                return true;
            }
            return (substr($haystack, -$length) === $needle);
        }
    }

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
            header("HTTP/1.1 404 Not Found");
            echo "File not found.";
        }
    } else {
        header("HTTP/1.1 404 Not Found");
        echo "File not found.";
    }
?>
