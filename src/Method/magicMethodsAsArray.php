<?php

namespace Inilim\Data\Method;

use Inilim\Data\Data;

/**
 * @return string[]
 */
function magicMethodsAsArray(): array
{
    return Data::magicMethodsAsClosure()->__invoke();
}
