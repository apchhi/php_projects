<?php

// Определение массива
$data = array(
    array('Токио' => array('Страна' => 'Япония', 'Континент' => 'Азия')),
    array('Мехико' => array('Страна' => 'Мексика', 'Континент' => 'Северная Америка')),
    array('Нью-Йорк' => array('Страна' => 'США', 'Континент' => 'Северная Америка')),
    array('Мумбаи' => array('Страна' => 'Индия', 'Континент' => 'Азия')),
    array('Сеул' => array('Страна' => 'Корея', 'Континент' => 'Азия')),
    array('Шанхай' => array('Страна' => 'Китай', 'Континент' => 'Азия')),
    array('Лагос' => array('Страна' => 'Нигерия', 'Континент' => 'Африка')),
    array('Буэнос-Айрес' => array('Страна' => 'Аргентина', 'Континент' => 'Южная Америка')),
    array('Каир' => array('Страна' => 'Египет', 'Континент' => 'Африка')),
    array('Лондон' => array('Страна' => 'Великобритания', 'Континент' => 'Европа'))
);

// Вывод таблицы HTML
echo '<table>';
echo '<tr><th>Город</th><th>Страна</th><th>Континент</th></tr>';
foreach ($data as $row) {
    foreach ($row as $city => $info) {
        echo '<tr><td>' . $city . '</td><td>' . $info['Страна'] . '</td><td>' . $info['Континент'] . '</td></tr>';
    }
}
echo '</table>';

// Стили таблицы
echo '<style type="text/css"> 
        td,
        th {
            width: 8em;
            border: 1px solid black;
            padding-left: 4px;
        }
        th {
            text-align:center;
        }
        table {
            border-collapse: collapse;
            border: 1px solid black;
        }
    </style>';
?>

