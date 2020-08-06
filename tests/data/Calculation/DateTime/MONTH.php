<?php

use PhpOffice\PhpSpreadsheet\Calculation\ExcelException;

return [
    [
        1,
        null,
    ],
    [
        1,
        0,
    ],
    [
        12,
        22269.0,
    ],
    [
        2,
        30348.0,
    ],
    [
        6,
        30843.0,
    ],
    [
        11,
        '11-Nov-1918',
    ],
    [
        2,
        '28-Feb-1904',
    ],
    [
        7,
        '01 Jul 2003',
    ],
    [
        4,
        38094,
    ],
    [
        12,
        'Dec 2003',
    ],
    [
        ExcelException::NUM(),
        -10,
    ],
    [
        ExcelException::VALUE(),
        'ABCD',
    ],
];
