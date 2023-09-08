<?php

$library = __DIR__ . '/sum.so';

$ffi = FFI::cdef('int sum(int a, int b);', $library);
$result = $ffi->sum(1, 2);
var_dump($result);
