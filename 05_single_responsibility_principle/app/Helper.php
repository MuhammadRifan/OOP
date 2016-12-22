<?php

/**
 * [getHash description]
 * Simple helper untuk hashing string.
 *
 * @param [type] $string [description]
 *
 * @return [type] [description]
 */
function getHash($string)
{
    return hash('sha256', $string);
}
