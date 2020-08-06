<?php

use PhpOffice\PhpSpreadsheet\Calculation\ExcelException;

// NumObjs, NumInSet, Result

return [
    [
        35,
        7,
        3,
    ],
    [
        28,
        8,
        2,
    ],
    [
        56,
        8,
        3,
    ],
    [
        70,
        8,
        4,
    ],
    [
        161700,
        100,
        3,
    ],
    [
        ExcelException::NUM(),
        -7,
        -10,
    ],
    [
        ExcelException::NUM(),
        -7,
        10,
    ],
    [
        ExcelException::NUM(),
        7,
        -10,
    ],
    [
        ExcelException::NUM(),
        2,
        3,
    ],
    [
        1,
        2,
        2,
    ],
    [
        2,
        2,
        1,
    ],
    [
        1,
        2,
        0,
    ],
    [
        1,
        2.5,
        2,
    ],
    [
        ExcelException::VALUE(),
        'ABCD',
        'EFGH',
    ],
    [
        252,
        10,
        5,
    ],
    [
        120,
        10,
        3,
    ],
    [
        20349,
        21,
        5,
    ],
    [
        6,
        6,
        1,
    ],
    [
        15,
        6,
        2,
    ],
    [
        20,
        6,
        3,
    ],
    [
        15,
        6,
        4,
    ],
    [
        6,
        6,
        5,
    ],
    [
        1,
        6,
        6,
    ],
    [
        ExcelException::NUM(),
        6,
        7,
    ],
];
