<?php

// Задача 1: Создание простого массива
// Создайте массив с именами нескольких ваших друзей и выведите его на экран.
// Задача:
// 1. Создайте массив с как минимум 4 именами.
// 2. Выведите каждое имя на новой строке.

echo "Задание 1: Создание простого массива\n\n";

$array = ["Ольга", "Наталья", "Марина", "Сергей", "Елена"];

echo "Имена моих друзей:\n";
foreach ($array as $name) {
	echo $name . "\n";
}

echo "\n\n";


// Задача 2: Индексы массива
// Создайте массив чисел и получите значение элемента по индексу.
// Задача:
// 1. Создайте массив из 5 произвольных чисел.
// 2. Выведите на экран элемент с индексом 2.

echo "Задание 2: Индексы массива\n\n";

$array = [];
for ($i = 0; $i < 5; $i++) {
    $array[] = rand(1,100);
}
echo "Сгенерирован массив из случайных чисел:\n";
foreach ($array as $num) {
	echo $num . " ";
}

echo "\n\nВ этом массиве элемент с индексом 2 имеет значение - " . $array[2] . "\n\n\n";

// Задача 3: Ассоциативный массив
// Создайте ассоциативный массив, который будет содержать информацию о вашем друге: имя,
// возраст и город.

echo "Задание 3: Ассоциативный массив\n";

$frend = 
    [
        "name" => "Наталья",
        "age" => "35",
        "city" => "Санкт-Петербург"
    ];

echo "\nУ меня есть подруга " . $frend['name'] . ". Ей " . $frend['age'] . " лет." . " Она живет в городе " . $frend['city'] . "\n\n";


// Задача 4: Массивы с циклами
// У вас есть массив чисел. Выведите все числа из массива, которые больше 10.
// Задача:
// 1. Создайте массив из как минимум 5 чисел.
// 2. Напишите цикл, который выводит на экран только те числа, которые больше 10.


echo "Задание 4: Массивы с циклами\n\n";

$array = [];
for ($i = 0; $i < 15; $i++) {
    $array[] = rand(1,20);
}
echo "Сгенерирован массив из случайных чисел:\n";
foreach ($array as $num) {
	echo $num . " ";
}

echo "\n\nОн содержит числа больше 10:\n";
foreach ($array as $num) {
    if ($num > 10) {
        echo $num . " ";
    } 

}

echo "\n\n";


// Задача 5: Работа с массивами функций
// Создайте массив чисел и посчитайте их сумму.
// Задача:
// 1. Создайте массив из 5 чисел.
// 2. Используйте встроенную функцию PHP для нахождения суммы всех чисел.
// Подсказка:
// PHP имеет встроенную функцию array_sum() для суммирования элементов массива.


echo "Задание 5: Работа с массивами функций\n\n";

$array = [];
for ($i = 0; $i < 5; $i++) {
    $array[] = rand(1,10);
}
echo "Сгенерирован массив из случайных чисел:\n";
foreach ($array as $num) {
	echo $num . " ";
}

echo "\n\nСумма всех элементов массива = " . array_sum($array); 
echo "\n\n";

// Задача 6: Учет товаров в магазине
// Вам необходимо создать систему учета товаров в магазине. Каждый товар должен храниться
// в виде ассоциативного массива с ключами:
// name — название товара
// price — цена товара
// quantity — количество на складе
// Задача:
// 1. Создайте массив товаров (как минимум 5 товаров).
// 2. Напишите функцию, которая выводит список всех товаров с их названиями и ценами.
// 3. Напишите функцию, которая добавляет новый товар в массив.
// 4. Напишите функцию, которая обновляет количество товара на складе.

echo "Задание 6: Учет товаров в магазине\n\n";
$products = [
    [
        "name" => "Стул",
        "price" => 2000,
        "quantity" => 12
    ],
    [
        "name" => "Кресло",
        "price" => 5000,
        "quantity" => 2
    ],
    [
        "name" => "Стол",
        "price" => 10000,
        "quantity" => 3
    ],
    [
        "name" => "Полка",
        "price" => 6000,
        "quantity" => 15
    ],
    [
        "name" => "Стеллаж",
        "price" => 20000,
        "quantity" => 0
    ]
];

// 2. Функция, которая выводит список всех товаров с их названиями и ценами.
echo "На складе есть товары:\n";
foreach($products as $product) {
    echo "-> " . $product['name'] . " в количестве " . $product['quantity'] . " шт. Стоимостью " . $product['price'] . " руб.\n";
  }
  echo "\n\n";

// 3. Функция, которая добавляет новый товар в массив.
$products[6] = 
    [
        "name" => "Шкаф",
        "price" => 50000,
        "quantity" => 2
    ];
$products[7] = 
    [
        "name" => "Картина",
        "price" => 45000,
        "quantity" => 1
    ];
echo "\n\nНа склад добавили товары. Обновленный список товаров:\n";
foreach($products as $product) {
    echo "-> " . $product['name'] . " в количестве " . $product['quantity'] . " шт. Стоимостью " . $product['price'] . " руб.\n";
  }

echo "\n\n";

// 4. Напишите функцию, которая обновляет количество товара на складе.
$products[0]["quantity"] = 0;
$products[1]["quantity"] = 0;
    
echo "\n\nОбновилось количество товаров. Обновленный список товаров:\n";
foreach($products as $product) {
    echo "-> " . $product['name'] . " в количестве " . $product['quantity'] . " шт. Стоимостью " . $product['price'] . " руб.\n";
  }
echo "\n\n";
// Задача 7: Расчет среднего балла студентов
// У вас есть массив студентов, каждый студент представлен в виде ассоциативного массива
// с полями:
// name — имя студента
// grades — массив оценок студента
// Задача:
// 1. Создайте массив из как минимум 3 студентов.
// 2. Напишите функцию, которая выводит средний балл каждого студента.
// 3. Напишите функцию, которая выводит имя студента с самым высоким средним баллом.
// Подсказка:
// Используйте функции для расчета среднего значения элементов массива. Для поиска
// студента с лучшими оценками можно использовать переменные для сравнения.

echo "Задание 6: Расчет среднего балла студентов:\n\n";

$students = [
    [
        "name" => "Ольга",
        "grades" => [50, 50, 60]
    ],
    [ 
        "name" => "Наталья",
        "grades" => [50, 50, 70]
    ],
    [
        "name" => "Марина",
        "grades" => [50, 50, 80]
    ]
];

// 2. Напишите функцию, которая выводит средний балл каждого студента.

$maxAverage = 0;
// Перебираем студентов и выводим их средние баллы

foreach ($students as $student) {
    $sum = 0;
    $count = count($student['grades']); // Количество выставленных оценок
        for ($i = 0; $i < $count; $i++) {
            $sum = $sum + $student['grades'][$i]; // Сумма оценок
        }
    $average = $sum / $count; // Средний балл конкретного студента
    if ($average > $maxAverage) {
        $maxAverage = $average;
        $topStudent = $student['name'];
    }
    echo "Средний балл студента {$student['name']}: " . number_format($average, 2) . "\n";

}
echo "Студент с самым высоким средним баллом: {$topStudent} - " . number_format($maxAverage, 2) . "\n";
    
echo "\n\n";
// Задача 8: Поиск дубликатов в массиве
// Предположим, у вас есть массив чисел. Вам нужно найти и вывести все повторяющиеся
// числа.
// Задача:
// 1. Создайте массив с произвольными числами, в котором есть повторяющиеся элементы.
// 2. Напишите функцию, которая находит все дубликаты в массиве и выводит их.
// Подсказка:
// Можно использовать вспомогательный массив для хранения уже встреченных элементов и
// проверять, встречалось ли число ранее.



// Задача 9: Объединение и сортировка массивов
// У вас есть два массива с числами. Нужно объединить их в один и отсортировать по
// возрастанию.
// Задача:
// 1. Создайте два массива с числами.
// 2. Напишите функцию, которая объединяет оба массива в один.
// 3. Напишите функцию, которая сортирует объединенный массив по возрастанию.

echo "Задание 9: Объединение и сортировка массивов\n\n";
echo "Сгенерирован первый массив из случайных чисел от 1 до 20:\n";
$a1 = [];
for ($i = 0; $i < 4; $i++) {
    $a1[] = rand(1,20);
}
foreach ($a1 as $num) {
	echo $num . " ";
}
echo "\n\nСгенерирован второй массив из случайных чисел от 21 до 40:\n";
$a2 = [];
for ($i = 0; $i < 4; $i++) {
    $a2[] = rand(21,40);
}
foreach ($a2 as $num) {
	echo $num . " ";
}
// 2. Функция, которая объединяет оба массива в один.
// $array3 = array_merge($array1, $array2);
// foreach ($a2 as $value) {
//     $a1[] = $value;
// }

$a3 = []; 

for ($i = 0; $i < count($a1); $i++) {
    $a3[] = $a1[$i];
}
for ($j = 0; $j < count($a2); $j++) {
    $a3[] = $a2[$j];
}

echo "\n\nОбъединенный массив чисел:\n";
foreach ($a3 as $num) {
	echo $num . " ";
}


// 3. Напишите функцию, которая сортирует объединенный массив по возрастанию.
    for ($i = 0; $i < count($a3) - 1; $i++) {
        // Предполагаем, что текущий элемент - минимальный
        $minIndex = $i;
        // Находим индекс минимального элемента в оставшейся части массива
        for ($j = $i + 1; $j < count($a3); $j++) {
            if ($a3[$j] < $a3[$minIndex]) {
                $minIndex = $j;
            }
        }
        // Меняем местами текущий элемент и найденный минимальный
        if ($minIndex != $i) {
            $temp = $a3[$i];
            $a3[$i] = $a3[$minIndex];
            $a3[$minIndex] = $temp;
        }
    }

    echo "\n\nОтсортированный по возрастанию массив:\n";
    foreach ($a3 as $num) {
        echo $num . " ";
    }
echo "\n\n";
// Задача 10: Фильтрация массива
// У вас есть массив чисел. Вам нужно создать функцию, которая отфильтрует массив и
// вернет только четные числа.
// Задача:
// 1. Создайте массив с числами.
// 2. Напишите функцию, которая отфильтровывает все нечетные числа и возвращает
// массив только с четными числами.
// Подсказка:
// Для проверки четности числа используйте оператор % . Внутри функции можете пройтись
// по массиву с помощью цикла и проверять каждое число. -->