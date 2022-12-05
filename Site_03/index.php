<?php
$title = "Главная страница - страница обо мне";
$header = "Информация обо мне";
$info = "Краткая биография обо мне
Родился в 1985 году в городе Москва. Закончил в 2008 году МАИ.
На данный момент работаю ведущим инженером в крупной авиакомпании.
Поскольку я люблю авиацию, то хотел бы поделиться несколькими интересными
фотографиями на эту тему";
$img = "https://picsum.photos/1280/720";
$fatText = "Просто пример жирного текста";
$year = date("Y");

$content = file_get_contents("site.html");
$content = str_replace("{{ title }}", $title, $content);
$content = str_replace("{{ header }}", $header, $content);
$content = str_replace("{{ info }}", $info, $content);
$content = str_replace("{{ img }}", $img, $content);
$content = str_replace("{{ fatText }}", $fatText, $content);
$content = str_replace("{{ year }}", $year, $content);

echo $content;