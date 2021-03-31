<?php

return [
    'Prettier/php' => true,

    '@Symfony' => true,
    '@Symfony:risky' => true,

    'increment_style' => ['style' => 'post'],

    'multiline_whitespace_before_semicolons' => ['strategy' => 'no_multi_line'],

    'no_useless_return' => true,
    'not_operator_with_successor_space' => true,

    'visibility_required' => [
        'elements' => ['method', 'property'],
    ],

    'yoda_style' => false,

    'php_unit_method_casing' => ['case' => 'snake_case'],
    'php_unit_test_annotation' => ['style' => 'annotation'],
];
