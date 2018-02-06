# laravel-camelcase

Adds support for database fields using CamelCase conventions to Eloquent models. These will be exposed as snake_case attributes.

**Caveat:** Using camel case in Laravel schemas is not a good idea. This project is offered as a hack to allow developers to work with legacy database that may not follow Laravel conventions.

## Experimental

This project is **experimental**! Please raise any issues on the GitHub issue tracker.

## Installation

```
composer require emden-norfolk/laravel-camelcase
```

## Usage

### Example

Given the table named `ExampleTable` with the following fields:

 * `ExampleID` (integer, PK)
 * `FooBarBaz` (string)

An example implementation would be:

```
use EmdenNorfolk\Eloquent\Concerns\RichUpperCamelCase;

class ExampleTable extends Model
{
    use RichUpperCamelCase;
    
    protected $table = 'ExampleTable';
    protected $primaryKey = 'ExampleID';
}
```

The above model would be accessible thus:

```
$example->example_id;
$example->foo_bar_baz = 'Lorem ipsum.';
```

This will also support mutators.

### Key Transformations

The following key transfomations are supported:

 * `EmdenNorfolk\Eloquent\Concerns\CamelCase` --> exampleId
 * `EmdenNorfolk\Eloquent\Concerns\UpperCamelCase` --> ExampleId
 * `EmdenNorfolk\Eloquent\Concerns\RichCamelCase` --> exampleID
 * `EmdenNorfolk\Eloquent\Concerns\RichUpperCamelCase` --> ExampleID

One may also create their own key transformations by creating a trait based upon `trait TransformableKeys` and implementing `abstract function keyTransform`.
