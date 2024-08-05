<?php

namespace Inilim\Data\Method;

use Inilim\Data\Data;

function numbersAsString(string $separator = ""): string
{
    return \implode($separator, Data::numbersAsClosure()->__invoke());
}
