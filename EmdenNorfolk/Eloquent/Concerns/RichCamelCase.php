<?php

namespace EmdenNorfolk\Eloquent\Concerns;

trait RichCamelCase
{
    use TransformableKeys;

    protected $keyTransformations = [
        '/Id$/' => 'ID',
    ];

    protected function keyTransform($key)
    {
        return preg_replace(array_keys($this->keyTransformations), array_values($this->keyTransformations), camel_case($key));
    }
}
