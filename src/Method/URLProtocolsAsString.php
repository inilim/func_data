<?php

namespace Inilim\Data\Method;

use Inilim\Data\Data;

function URLProtocolsAsString(string $separator = ""): string
{
    return \implode($separator, Data::URLProtocolsAsClosure()->__invoke());
}
