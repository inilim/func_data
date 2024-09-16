<?php

require_once __DIR__ . '/vendor/autoload.php';

use Inilim\Dump\Dump;


Dump::init();


$res = _data()->arabicAlphabetAsClosure()->__invoke();

de($res);
// de(preg_quote('xmlrpc.beeps'));
