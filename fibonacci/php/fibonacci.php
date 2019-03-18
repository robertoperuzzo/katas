<?php
/**
 * Created by PhpStorm.
 * User: robertoperuzzo
 * Date: 12/01/18
 * Time: 20:44
 */

function fibonacci($n) {

    if ($n < 0) {
        return NULL;
    }
    else if ($n === 0) {
        return 0;
    }
    else if ($n === 1) {
        return 1;
    }
    else {
        return fibonacci($n - 1) + fibonacci($n - 2);
    }
}

print "Insert which Fibonacci's number you want: ";
trim(fscanf(STDIN, "%d\n", $numeric_input));

if (is_int($numeric_input)) {
    $result = fibonacci($numeric_input);
    print sprintf("Fib[%d] = %d \n", $numeric_input, $result);
}
else {
    print "The value you digited is not an integer.\n";
}
