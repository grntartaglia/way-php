<?php

return [
    'Prettier/php' => true,

    '@Symfony'       => true,
    '@Symfony:risky' => true,

    'binary_operator_spaces' => [
        'default'   => 'single_space',
        'operators' => [
            '=>' => 'align_single_space_minimal',
            '='  => 'align_single_space_minimal',
        ],
    ],

    'increment_style' => ['style' => 'post'],

    'multiline_whitespace_before_semicolons' => ['strategy' => 'no_multi_line'],

    'no_useless_return'                 => true,
    'not_operator_with_successor_space' => true,

    'visibility_required' => [
        'elements' => ['method', 'property'],
    ],

    'yoda_style' => false,
];
