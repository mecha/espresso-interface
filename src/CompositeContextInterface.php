<?php

namespace Dhii\Expression;

/**
 * A context with multiple values.
 *
 * @since 0.1
 */
interface CompositeContextInterface extends ContextInterface
{
    /**
     * Gets the context-specific value or a sub-value.
     *
     * @since 0.1
     *
     * @param string $key The string key of the value to retrieve.
     *
     * @return mixed The contextual value associated with the given key.
     */
    public function getValueOf($key);

    /**
     * Checks if the context has a value with a specific key.
     *
     * @since 0.1
     *
     * @param string $key The key of the value to check for.
     *
     * @return bool True if the context has a value with the given key, false if not.
     */
    public function hasValue($key);
}
