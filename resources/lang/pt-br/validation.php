<?php

return [
    'required'             => 'O campo :attribute não pode ficar em branco!!!',
    'numeric'              => 'O campo :attribute está inválido!!!',
    'email'                => 'O :attribute precisa ser um email válido!!!',
    'max'                  => [
        'numeric' => 'O :attribute não pode ser maior que :max!!!',
        'file'    => 'O :attribute não pode ser maior que :max!!!',
        'string'  => 'O :attribute não pode ser maior que :max!!!',
        'array'   => 'O :attribute não pode ser maior que :max!!!',
    ],
    'min'                  => [
        'numeric' => 'O :attribute não pode ser menor que :min!!!',
        'file'    => 'O :attribute não pode ser menor que :min!!!',
        'string'  => 'O :attribute não pode ser menor que :min!!!',
        'array'   => 'O :attribute não pode ser menor que :min!!!'
    ],
    'digits' => 'O :attribute  precisa ter :digits digitos!!!',
    'unique'               => ':attribute Já cadastrado.',
];
