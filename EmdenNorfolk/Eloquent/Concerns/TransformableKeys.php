<?php

namespace EmdenNorfolk\Eloquent\Concerns;

trait TransformableKeys
{
    abstract protected function keyTransform($key);

    public function getAttribute($key)
    {
        return parent::getAttribute($this->keyTransform($key));
    }

    public function setAttribute($key, $value)
    {
        return parent::setAttribute($this->keyTransform($key), $value);
    }

    protected function addMutatedAttributesToArray(array $attributes, array $mutatedAttributes)
    {
        foreach ($mutatedAttributes as $key) {
            if (! array_key_exists($this->keyTransform($key), $attributes)) {
                continue;
            }

            $attributes[$this->keyTransform($key)] = $this->mutateAttributeForArray(
                $this->keyTransform($key), $attributes[$this->keyTransform($key)]
            );
        }

        return $attributes;
    }
}
