<?php

const NAMES = [
    'дима', 'нина', 'толя', 'саша', 'витя',
];

function createUser()
{
    $user = [
        'name' => NAMES[array_rand(NAMES)],
        'age' => mt_rand(18, 45),
    ];
    return $user;
}

