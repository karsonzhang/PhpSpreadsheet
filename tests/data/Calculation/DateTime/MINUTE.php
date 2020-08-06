<?php

use PhpOffice\PhpSpreadsheet\Calculation\ExcelException;

return [
    [
        48,
        0.20000000000000001,
    ],
    [
        36,
        0.40000000000000002,
    ],
    [
        24,
        0.59999999999999998,
    ],
    [
        12,
        0.80000000000000004,
    ],
    [
        15,
        '11-Nov-1918 11:15',
    ],
    [
        59,
        '11:59 PM',
    ],
    [
        59,
        '23:59:59',
    ],
    [
        0,
        3600,
    ],
    [
        ExcelException::NUM(),
        -3600,
    ],
    [
        0,
        12500,
    ],
    [
        0,
        65535,
    ],
    [
        ExcelException::VALUE(),
        'Half past 1 O\'Clock',
    ],
];
