<?php

/**
 * @license     http://opensource.org/licenses/mit-license.php MIT
 * @link        https://github.com/nicoSWD
 * @author      Nicolas Oelgart <nico@oelgart.com>
 */
declare(strict_types=1);

namespace nicoSWD\Rules\Expressions;

abstract class BaseExpression
{
    abstract public function evaluate($leftValue, $rightValue) : bool;
}
