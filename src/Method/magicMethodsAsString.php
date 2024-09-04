<?php

namespace Inilim\Data\Method;

use Inilim\Data\Data;

function magicMethodsAsString(string $separator = ""): string
{
    return \implode($separator, Data::magicMethodsAsClosure()->__invoke());
}
