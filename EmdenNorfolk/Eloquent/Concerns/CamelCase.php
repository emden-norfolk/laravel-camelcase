<?php

namespace EmdenNorfolk\Eloquent\Concerns;

trait CamelCase
{
    use TransformableKeys;

    protected function keyTransform($key)
    {
        return camel_case($key);
    }
}
