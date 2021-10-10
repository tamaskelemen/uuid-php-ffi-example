<?php

$ffi = FFI::load('uuid-php.h');

$output = $ffi->new('uuid_t'); //create new variable.

//generate random v4 uuid. This function name matches the same function in the header -> lib.
//the function works with a reference.
$ffi->uuid_generate_random($output);

//we need to convert the returned hexadecimal value:
foreach ($output as $values[]);

$uuid = sprintf('%02x%02x%02x%02x-%02x%02x-%02x%02x-%02x%02x-%02x%02x%02x%02x%02x%02x', ...$values);

//here we are, there is your uniqe id
var_dump($uuid);
