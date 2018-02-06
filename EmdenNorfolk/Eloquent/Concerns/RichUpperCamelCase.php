<?php

namespace EmdenNorfolk\Eloquent\Concerns;

trait RichUpperCamelCase
{
    use TransformableKeys;

    protected $keyTransformations = [
        '/Id$/' => 'ID',
    ];

    protected function keyTransform($key)
    {
        return preg_replace(array_keys($this->keyTransformations), array_values($this->keyTransformations), ucfirst(camel_case($key)));
    }
}
