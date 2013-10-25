<?php

namespace Behat\Behat\Context;

/*
 * This file is part of the Behat.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Variable Behat Context.
 *
 * Extend this to add variable support to your application.
 *
 * @author Nathaniel Higgins <nat@nath.is>
 */
class VariableBehatContext implements ContextInterface {

    /**
     * This stores our variables
     * @var array
     */
    private $variableMemory = array();

    public function remember($key, $val = null) {
        if (isset($val)) {
            return $this->variableMemory[$key] = $val;
        }

        return isset($this->variableMemory[$key]) : $this->variableMemory[$key] : null;
    }
}
