<?php

use PhpOffice\PhpSpreadsheet\Calculation\ExcelException;

return [
    [
        ExcelException::VALUE(),
        '1-Jan-2007',
        'ABC',
    ],
    [
        39094,
        '1-Jan-2007',
        9,
    ],
    [
        39619,
        '18-Jun-2008',
        2,
    ],
    [
        39619,
        '16-Jun-2008',
        4,
    ],
    [
        39622,
        '14-Jun-2008',
        6,
    ],
    [
        39629,
        '14-Jun-2008',
        11,
    ],
    [
        39611,
        '14-Jun-2008',
        -2,
    ],
    [
        39605,
        '14-Jun-2008',
        -6,
    ],
    [
        39815,
        '19-Dec-2008',
        10,
    ],
    [
        39820,
        '19-Dec-2008',
        10,
        '25-Dec-2008',
        '26-Dec-2008',
        '01-Jan-2009',
    ],
    [
        39820,
        '19-Dec-2008',
        10,
        [
            [
                '25-Dec-2008',
                '26-Dec-2008',
                '01-Jan-2009',
            ],
        ],
    ],
    [
        39801,
        39820,
        -10,
        [
            [
                '25-Dec-2008',
                '26-Dec-2008',
                '01-Jan-2009',
            ],
        ],
    ],
    [
        41010,
        '5-Apr-2012',
        3,
        [
            [
                '6-Apr-2012',
                '9-Apr-2012',
            ],
        ],
    ],
];
