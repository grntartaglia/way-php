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
];
