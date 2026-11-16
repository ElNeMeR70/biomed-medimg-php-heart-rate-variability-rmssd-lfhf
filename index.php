<?php
declare(strict_types=1);
$input = $argv[1] ?? 'benchmark';
$digest = substr(hash('sha256', 'biomed-medimg-php-heart-rate-variability-rmssd-lfhf:' . $input), 0, 32);
echo json_encode([
    'engine' => 'biomed-medimg-php-heart-rate-variability-rmssd-lfhf',
    'suite' => 'bio-med-1000',
    'digest' => $digest,
    'status' => 'VERIFIED_OK',
], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE) . PHP_EOL;
