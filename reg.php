1. Оператор `*?`

Оператор `*?` используется для поиска непустых последовательностей символов, которые повторяются необязательное количество раз. Он соответствует наименьшему возможному количеству повторений.

```php
$string = "aaaabbbbcccc";
$pattern = "/a+?/";
$replacement = "x";
$new_string = preg_replace($pattern, $replacement, $string);
echo $new_string;
```

Результат: `xbbbbbcccc`

2. Оператор `??`

Оператор `??` используется для указания значения по умолчанию в случае, если соответствующая часть шаблона не найдена.

```php
$string = "Hello, world!";
$pattern = "/goodbye, world\W??/";
$replacement = "";
$new_string = preg_replace($pattern, $replacement, $string);
echo $new_string;
```

Результат: `Hello, world!`

3. Оператор `{}`

Оператор `{}` используется для указания количества повторений.

```php
$string = "aaaaaa";
$pattern = "/a{3,5}/";
$replacement = "x";
$new_string = preg_replace($pattern, $replacement, $string);
echo $new_string;
```

Результат: `xxa`
