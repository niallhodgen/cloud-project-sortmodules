<?php

namespace App;

function getSortedModules(array $input)
{
    // arsort sorts associative array by values (descending)
    arsort($input);

    // Format nicely
    $input = http_build_query($input);

    //Remove + symbol and replace with space, e.g. Web+Development
    $input = str_replace('+', ' ', $input);

    //Add space either side of = sign
    $input = str_replace('=', ' = ', $input);

    //Add new line after each module + mark
    $input = str_replace('&', '\r\n', $input);

    return $input;
}
