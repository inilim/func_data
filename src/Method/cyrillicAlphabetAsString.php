<?php

namespace Inilim\Data\Method;

use Inilim\Data\Data;

function cyrillicAlphabetAsString(string $separator = "", bool $upper = false): string
{
    return \implode($separator, Data::cyrillicAlphabetAsClosure($upper)->__invoke());
}
