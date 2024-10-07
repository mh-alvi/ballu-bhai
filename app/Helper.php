<?php

function view($file_path, $data = [])
{
    $path = str_replace("\\", DIRECTORY_SEPARATOR, $file_path);
    $path = str_replace(".", DIRECTORY_SEPARATOR, $path);

    $file = APP_ROOT . DIRECTORY_SEPARATOR . 'Pages' . DIRECTORY_SEPARATOR . $path . '.php';
    if (file_exists($file)) {
        if (!is_array($data)) {
            $data = [];  // Ensure $data is always an array.
        }
        extract($data);
        return require $file;
    }
    throw new Exception('Page not found' . $file);
}
function redirect($uri)
{
    header("Location: $uri");
    exit;
}
function pageAdd($file_path)
{
    include(APP_ROOT . '/Pages/' . $file_path);
}
