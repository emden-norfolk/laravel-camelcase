<?php

namespace EmdenNorfolk\Eloquent\Concerns;

trait UpperCamelCase
{
    use TransformableKeys;

    protected function keyTransform($key)
    {
        return ucfirst(camel_case($key));
    }
}
