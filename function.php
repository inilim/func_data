<?php

use Inilim\Data\Data;

if (!\function_exists('_data')) {
    function _data(): Data
    {
        static $o = new Data;
        return $o;
    }
}
