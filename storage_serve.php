<?php
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$file = preg_replace('#^/storage/#', '', $uri);
$path = __DIR__ . '/storage/app/public/' . $file;
if (file_exists($path) && is_file($path)) {
    $ext = strtolower(pathinfo($path, PATHINFO_EXTENSION));
    $mimes = ['jpg'=>'image/jpeg','jpeg'=>'image/jpeg','png'=>'image/png','gif'=>'image/gif','webp'=>'image/webp','svg'=>'image/svg+xml','pdf'=>'application/pdf'];
    header('Content-Type: ' . ($mimes[$ext] ?? mime_content_type($path)));
    header('Content-Length: ' . filesize($path));
    readfile($path);
    exit;
}
http_response_code(404);
