<?php

namespace Inilim\Data\Method;

use Inilim\Data\Data;

function URLProtocolsAsArray(): array
{
    return Data::URLProtocolsAsClosure()->__invoke();
}
