<?php

namespace Inilim\Data\Method;

use Inilim\Data\Data;

function latinAlphabetAsArray(bool $upper = false): array
{
    return Data::cyrillicAlphabetAsClosure($upper)->__invoke();
}
