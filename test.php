<?php

require_once __DIR__ . '/vendor/autoload.php';

use Inilim\Dump\Dump;


Dump::init();


de(_data()->magicMethodsAsClosure()->__invoke());

// de(preg_quote('xmlrpc.beeps'));
