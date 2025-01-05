<?php

namespace AymanAlhattami\Toolbox\Traits;

trait EvaluatesClosures
{
    public function evaluate($value, array $args = [])
    {
        if ($value instanceof \Closure) {
            return $value(...$args);
        }

        if (is_callable($value)) {
            return call_user_func_array($value, $args);
        }

        return $value;
    }
}
