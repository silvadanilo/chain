<?php

namespace Cocur\Chain\Link;

/**
 * Count.
 *
 * @author    Florian Eckerstorfer
 * @copyright 2015 Florian Eckerstorfer
 */
trait Count
{
    /**
     * Counts all elements in the array.
     *
     * @return int Returns the number of elements in the array.
     */
    public function count()
    {
        return count($this->array);
    }
}
