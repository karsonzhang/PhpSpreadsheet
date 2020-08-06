<?php

use PhpOffice\PhpSpreadsheet\Calculation\ExcelException;

return [
    [
        6,
        0.25,
    ],
    [
        18,
        0.75,
    ],
    [
        12,
        0.5,
    ],
    [
        14,
        0.59999999999999998,
    ],
    [
        11,
        '11-Nov-1918 11:11',
    ],
    [
        23,
        '11:59 PM',
    ],
    [
        23,
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
        7200,
    ],
    [
        0,
        65535,
    ],
    [
        ExcelException::VALUE(),
        '1 O\'Clock',
    ],
];
