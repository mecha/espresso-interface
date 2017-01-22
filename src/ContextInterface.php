<?php

namespace Dhii\Espresso;

use Dhii\Data\ValueAwareInterface;

/**
 * Any object that is capable of providing a contextual value for an evaluable entity.
 *
 * @since 0.1
 */
interface ContextInterface extends ValueAwareInterface
{
    /**
     * Gets the context-specific value.
     *
     * @since 0.1
     *
     * @return mixed The contextual value.
     */
    public function getValue();
}
