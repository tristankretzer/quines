<?php

$newline = chr(10);
$singleQuote = chr(39);

$data = [
    '<?php',
    '',
    '$newline = chr(10);',
    '$singleQuote = chr(39);',
    '',
    '$data = [',
    '];',
    '',
    'foreach ($data as $index => $line) {',
    '    echo $line . $newline;',
    '',
    '    if ($index === 5) {',
    '        foreach ($data as $dataLine) {',
    '            echo "    $singleQuote$dataLine$singleQuote," . $newline;',
    '        }',
    '    }',
    '}',
];

foreach ($data as $index => $line) {
    echo $line . $newline;

    if ($index === 5) {
        foreach ($data as $dataLine) {
            echo "    $singleQuote$dataLine$singleQuote," . $newline;
        }
    }
}
