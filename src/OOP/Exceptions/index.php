<?php

function add(float $one, $two)
{
    if (!is_float($one) || !is_float($two)) {
        // we take exception.
        throw new InvalidArgumentException('Please provide a float');
    }

    return $one + $two;
}

// var_dump(add(2, 2));
// 1. just always pass the correct data.
// 2. give it the correct type.
// 3. manually check within the method.

try {
    var_dump(add(2, []));
} catch (InvalidArgumentException $e) {
    var_dump($e);
}
