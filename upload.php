<?php
// указание директории и имени нового файла на сервере
$new_file = '/upload_files/'.$_FILES['uploadfile']['name'];

// копирование файла
if (copy($_FILES['uploadfile']['tmp_name'], $new_file)) {
echo "Файл загружен на сервер";
} else {
echo "Ошибка при загрузке файла";
?>