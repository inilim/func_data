<?php

namespace Inilim\Data\Method;

use Inilim\Data\Data;

function latinAlphabetAsString(string $separator = "", bool $upper = false): string
{
    return \implode($separator, Data::latinAlphabetAsClosure($upper)->__invoke());
}
