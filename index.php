<?php

/*Задача #1

Программно создайте массив из 50 пользователей, у каждого пользователя есть поля id, name и age:
id - уникальный идентификатор, равен номеру эл-та в массиве
name - случайное имя из 5ти возможных (сами придумайте каких)
age - случайное число от 18 до 45
Преобразуйте массив в json и сохраните в файл users.json
Откройте файл users.json и преобразуйте данные из него обратно ассоциативный массив РНР.
Посчитайте количество пользователей с каждым именем в массиве
Посчитайте средний возраст пользователей*/

include 'function.php';

for ($i = 0; $i < 50; $i++){
    $users [] = createUser();
    $users [$i] ['id'] = $i;
}


file_put_contents('user.json', json_encode($users));

$data = file_get_contents('user.json');

$userDecode = json_decode($data, true);

//echo '<pre>';
//print_r($userDecode);
//echo '</pre>';

$names = [];
$sumAge = 0;

foreach ($userDecode as $user) {
    if (isset($names[$user['name']])){
        $names[$user['name']]++;
    } else {
        $names[$user['name']] = 1;
    }

    $sumAge += $user['age'];
}

$averageAge = $sumAge / sizeof($userDecode);

echo 'средний возраст:' . $averageAge;