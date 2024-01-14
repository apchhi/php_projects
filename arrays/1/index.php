<?php

// Определение массива
$data = array(
    array('Город', 'Страна', 'Континент'),
    array('Токио', 'Япония', 'Азия'),
    array('Мехико', 'Мексика', 'Северная Америка'),
    array('Нью-Йорк', 'США', 'Северная Америка'),
    array('Мумбаи', 'Индия', 'Азия'),
    array('Сеул', 'Корея', 'Азия'),
    array('Шанхай', 'Китай', 'Азия'),
    array('Лагос', 'Нигерия', 'Африка'),
    array('Буэнос-Айрес', 'Аргентина', 'Южная Америка'),
    array('Каир', 'Египет', 'Африка'),
    array('Лондон', 'Великобритания', 'Европа')
);

// Вывод таблицы HTML
echo '<table>';
foreach ($data as $row => $columns) {
    echo '<tr>';
    foreach ($columns as $column) {
        echo '<th>' . $column . '</th>';
    }
    echo '</tr>';
}

for ($i = 1; $i < count($data); $i++) {
    echo '<tr>';
    foreach ($data[$i] as $value) {
        echo '<td>' . $value . '</td>';
    }
    echo '</tr>';
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
