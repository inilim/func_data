<?php

namespace Inilim\Data;

use Inilim\LazyMethod\LazyMethodAbstract;

/**
 * @method  array URLProtocolsAsArray() 
 * @method  static  array URLProtocolsAsArray() 
 * @param \Inilim\Data\Method\URLProtocolsAsArray
 * 
 * @method  \Closure URLProtocolsAsClosure() 
 * @method  static  \Closure URLProtocolsAsClosure() 
 * @param \Inilim\Data\Method\URLProtocolsAsClosure
 * 
 * @method  string URLProtocolsAsString(string $separator = "") 
 * @method  static  string URLProtocolsAsString(string $separator = "") 
 * @param \Inilim\Data\Method\URLProtocolsAsString
 * 
 * @method  array cyrillicAlphabetAsArray(bool $upper = false) 
 * @method  static  array cyrillicAlphabetAsArray(bool $upper = false) 
 * @param \Inilim\Data\Method\cyrillicAlphabetAsArray
 * 
 * @method  \Closure cyrillicAlphabetAsClosure(bool $upper = false) 
 * @method  static  \Closure cyrillicAlphabetAsClosure(bool $upper = false) 
 * @param \Inilim\Data\Method\cyrillicAlphabetAsClosure
 * 
 * @method  string cyrillicAlphabetAsString(string $separator = "", bool $upper = false) 
 * @method  static  string cyrillicAlphabetAsString(string $separator = "", bool $upper = false) 
 * @param \Inilim\Data\Method\cyrillicAlphabetAsString
 * 
 * @method  array latinAlphabetAsArray(bool $upper = false) 
 * @method  static  array latinAlphabetAsArray(bool $upper = false) 
 * @param \Inilim\Data\Method\latinAlphabetAsArray
 * 
 * @method  \Closure latinAlphabetAsClosure(bool $upper = false) 
 * @method  static  \Closure latinAlphabetAsClosure(bool $upper = false) 
 * @param \Inilim\Data\Method\latinAlphabetAsClosure
 * 
 * @method  string latinAlphabetAsString(string $separator = "", bool $upper = false) 
 * @method  static  string latinAlphabetAsString(string $separator = "", bool $upper = false) 
 * @param \Inilim\Data\Method\latinAlphabetAsString
 * 
 */
class Data extends LazyMethodAbstract
{
    protected const NAMESPACE   = 'Inilim\Data\Method';
    protected const PATH_TO_DIR = __DIR__ . '/Method';
}
