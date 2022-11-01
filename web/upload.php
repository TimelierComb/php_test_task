<?php

function create_dir($path)
{
    if (!is_dir($path)) {
        mkdir($path, 0777);
    }
}

function upload_file($path)
{
    create_dir($path);

    $uploaddir = "$path/";
    $uploadfile = $uploaddir . basename($_FILES['test']['name']);

    if (move_uploaded_file($_FILES['test']['tmp_name'], $uploadfile)) {
        echo "Файл корректен и был успешно загружен.\n";
    } else {
        echo "Ошибка загрузки!\n";
    }
}

function create_file($path_to_read, $path_to_write)
{
    create_dir($path_to_write);
    upload_file($path_to_read);
    $file_name = basename($_FILES['test']['name']);
    $file = new SplFileObject("$path_to_read\\$file_name");
    $file->setFlags(SplFileObject::READ_CSV);
    foreach ($file as $row) {
        list($name, $text) = $row;
        $new_file = fopen("$path_to_write\\$name", "w");
        fwrite($new_file, $text);
    }
}

create_file("file", "upload");
