1. `range()`

Функция `range()` создает массив, содержащий последовательность чисел или символов, заданных начальным и конечным значениями, с заданным шагом.

```php
// Создание массива с числами от 1 до 10
$numbers = range(1, 10);
print_r($numbers);
```

Результат:
```
Array
(
    [0] => 1
    [1] => 2
    [2] => 3
    [3] => 4
    [4] => 5
    [5] => 6
    [6] => 7
    [7] => 8
    [8] => 9
    [9] => 10
)
```

2. `array_sum()`

Функция `array_sum()` возвращает сумму всех значений массива.

```php
// Суммирование значений массива
$numbers = array(1, 2, 3, 4, 5);
$sum = array_sum($numbers);
echo $sum;
```

Результат:
```
15
```

3. `array_product()`

Функция `array_product()` возвращает произведение всех значений массива.

```php
// Умножение значений массива
$numbers = array(2, 4, 6, 8);
$product = array_product($numbers);
echo $product;
```

Результат:
```
384
```

4. `array_map()`

Функция `array_map()` применяет заданную функцию ко всем элементам массива и возвращает новый массив с результатами.

```php
// Применение функции к каждому элементу массива
$numbers = array(1, 2, 3, 4, 5);
$squared_numbers = array_map(function($number) {
    return $number ** 2;
}, $numbers);
print_r($squared_numbers);
```

Результат:
```
Array
(
    [0] => 1
    [1] => 4
    [2] => 9
    [3] => 16
    [4] => 25
)
```

5. `count()`

Функция `count()` возвращает количество элементов массива.

```php
// Подсчет количества элементов массива
$numbers = array(1, 2, 3, 4, 5);
$count = count($numbers);
echo $count;
```

Результат:
```
5
```

6. `in_array()`

Функция `in_array()` проверяет, содержит ли массив заданное значение.

```php
// Проверка, содержит ли массив заданное значение
$numbers = array(1, 2, 3, 4, 5);
if (in_array(3, $numbers)) {
    echo "3 найдено в массиве";
} else {
    echo "3 не найдено в массиве";
}
```

Результат:
```
3 найдено в массиве
```

7. `array_key_exists()`

Функция `array_key_exists()` проверяет, существует ли заданный ключ в массиве.

```php
// Проверка, существует ли ключ в массиве
$ages = array("John" => 30, "Mary" => 25, "Bob" => 40);
if (array_key_exists("Mary", $ages)) {
    echo "Mary найдена в массиве";
} else {
    echo "Mary не найдена в массиве";
}
```

Результат:
```
Mary найдена в массиве
```

8. `array_keys()`

Функция `array_keys()` возвращает массив, содержащий все ключи массива.

```php
// Получение всех ключей массива
$ages = array("John" => 30, "Mary" => 25, "Bob" => 40);
$keys = array_keys($ages);
print_r($keys);
```

Результат:
```
Array
(
    [0] => John
    [1] => Mary
    [2] => Bob
)
```

9. `array_values()`

Функция `array_values()` возвращает массив, содержащий все значения массива.

```php
// Получение всех значений массива
$ages = array("John" => 30, "Mary" => 25, "Bob" => 40);
$values = array_values($ages);
print_r($values);
```

Результат
```

10. `array_merge()`

Функция `array_merge()` объединяет два или более массива в один.

```php
// Объединение двух массивов
$array1 = array("red", "green");
$array2 = array("blue", "yellow");
$merged_array = array_merge($array1, $array2);
print_r($merged_array);
```

Результат:
```
Array
(
    [0] => red
    [1] => green
    [2] => blue
    [3] => yellow
)
```

11. `array_combine()`

Функция `array_combine()` создает новый массив, используя один массив в качестве ключей, а другой массив в качестве значений.

```php
// Создание нового массива из двух массивов
$keys = array("red", "green", "blue");
$values = array("#FF0000", "#00FF00", "#0000FF");
$color_codes = array_combine($keys, $values);
print_r($color_codes);
```

Результат:
```
Array
(
    [red] => #FF0000
    [green] => #00FF00
    [blue] => #0000FF
)
```

12. `array_slice()`

Функция `array_slice()` возвращает выбранную часть массива.

```php
// Получение части массива
$numbers = array(1, 2, 3, 4, 5);
$slice = array_slice($numbers, 2, 2);
print_r($slice);
```

Результат:
```
Array
(
    [0] => 3
    [1] => 4
)
```

13. `array_flip()`

Функция `array_flip()` меняет местами ключи и значения массива.

```php
// Меняем местами ключи и значения
$ages = array("John" => 30, "Mary" => 25, "Bob" => 40);
$flipped_ages = array_flip($ages);
print_r($flipped_ages);
```

Результат:
```
Array
(
    [30] => John
    [25] => Mary
    [40] => Bob
)
```

14. `array_reverse()`

Функция `array_reverse()` возвращает массив в обратном порядке.

```php
// Переворачиваем массив
$numbers = array(1, 2, 3, 4, 5);
$reversed_numbers = array_reverse($numbers);
print_r($reversed_numbers);
```

Результат:
```
Array
(
    [0] => 5
    [1] => 4
    [2] => 3
    [3] => 2
    [4] => 1
)
```

15. `shuffle()`

Функция `shuffle()` перемешивает элементы массива в случайном порядке.

```php
// Перемешиваем массив
$numbers = array(1, 2, 3, 4, 5);
shuffle($numbers);
print_r($numbers);
```

Результат:
```
Array
(
    [0] => 3
    [1] => 2
    [2] => 1
    [3] => 4
    [4] => 5
)
```
