<?php

use PhpOffice\PhpSpreadsheet\Calculation\ExcelException;

return [
    [
        52,
        '21-Dec-2000', 1,
    ],
    [
        1,
        '2000-01-01', 1,
    ],
    [
        2,
        '2000-01-02', 1,
    ],
    [
        1,
        '2000-01-01', 2,
    ],
    [
        2,
        '2000-01-03', 2,
    ],
    [
        1,
        '1995-01-01', 1,
    ],
    [
        1,
        '1995-01-07', 1,
    ],
    [
        2,
        '1995-01-08', 1,
    ],
    [
        1,
        '1995-01-01', 2,
    ],
    [
        2,
        '1995-01-02', 2,
    ],
    [
        28,
        '3/7/1977',
    ],
    [
        ExcelException::VALUE(),
        '3/7/1977', 'A',
    ],
    [
        ExcelException::NUM(),
        '3/7/1977', 0,
    ],
    [
        ExcelException::NUM(),
        '3/7/1977', -1,
    ],
    [
        ExcelException::VALUE(),
        'Invalid', 1,
    ],
    [
        ExcelException::NUM(),
        -1,
    ],
    [
        53,
        '2019-12-29', 1,
    ],
    [
        52,
        '2019-12-29', 2,
    ],
    [
        ExcelException::NUM(),
        '2019-12-29', 3,
    ],
    [
        ExcelException::NUM(),
        '2019-12-29', 10,
    ],
    [
        52,
        '2019-12-29', 11,
    ],
    [
        52,
        '2019-12-29', 12,
    ],
    [
        53,
        '2019-12-29', 13,
    ],
    [
        53,
        '2019-12-29', 14,
    ],
    [
        53,
        '2019-12-29', 15,
    ],
    [
        53,
        '2019-12-29', 16,
    ],
    [
        53,
        '2019-12-29', 17,
    ],
    [
        ExcelException::NUM(),
        '2019-12-29', 18,
    ],
    [
        ExcelException::NUM(),
        '2019-12-29', 20,
    ],
    [
        ExcelException::NUM(),
        '2019-12-29', 22,
    ],
    [
        52,
        '2019-12-29', 21,
    ],
    [
        53,
        '2020-12-29', 21,
    ],
    [
        52,
        '2021-12-29', 21,
    ],
    [
        52,
        '2022-12-29', 21,
    ],
    [
        1,
        '2020-01-01', 21,
    ],
    [
        53,
        '2021-01-01', 21,
    ],
    [
        52,
        '2022-01-01', 21,
    ],
    [
        52,
        '2023-01-01', 21,
    ],
    [
        2,
        '2020-01-08', 21,
    ],
    [
        1,
        '2021-01-08', 21,
    ],
    [
        1,
        '2022-01-08', 21,
    ],
    [
        1,
        '2023-01-08', 21,
    ],
    [
        1,
        '2025-12-29', 21,
    ],
];
