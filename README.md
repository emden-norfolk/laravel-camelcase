# laravel-camelcase

Adds support for database fields using CamelCase conventions to Eloquent models. These will be exposed as snake_case attributes.

## Experimental

This project is **experimental**! Please raise any issues on the GitHub issue tracker.

## Installation

```
composer require emden-norfolk/laravel-camelcase
```

## Example

Given the following table named `ExampleTable` with the following fields:

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
