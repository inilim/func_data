<?php

namespace Inilim\Data\Method;

use Inilim\Data\Data;

function numbersAsArray(): string
{
    return Data::numbersAsClosure()->__invoke();
}
