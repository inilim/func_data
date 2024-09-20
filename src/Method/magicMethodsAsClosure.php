<?php

namespace Inilim\Data\Method;

use Inilim\FuncCore\FuncCore;

/**
 * @return \Closure():string[]
 */
function magicMethodsAsClosure(): \Closure
{
    return FuncCore::magicMethodsAsClosure();
}
