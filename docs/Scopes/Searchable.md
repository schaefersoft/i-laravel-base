# Searchable

The laravel base package provides an easy way to get database entries filtered by multiple values.

## Installation
Ensure you have the Laravel Base package installed, and then follow these steps:

1. Add the SearchableQuery trait to the model, you want to use.

`User.php`
```php
use Schaefersoft\Base\Traits\SearchableQuery;

class User extends Model
{
    use SearchableQuery;
    
    
    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        //...
    ];
}

```

## Basic Usage
To perform a basic search, use the `::searchable()` method on the model. This method takes a search text and an array of fields to search against.

Make sure to always add some kind of execute method to the end of your query.

`UserController.php`
```php
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function handleRequest(Request $request)
    {
        $users = User::searchable('david', [
                'firstname',
                'lastname',
                'email'
            ])->get();
    }
}
```
This query will retrieve entries where `firstname`, `lastname` or `email` **contains** the given input value.

## Chained Queries
You can chain additional queries to the searchable trait for more complex filtering.
```php

use Illuminate\Http\Request;

public function handleRequest(Request $request)
{
    $users = User::searchable('david', [
            'firstname',
            'lastname',
            'email'
        ])
        ->where('is_active', true)
        ->orderBy('name')
        ->get();
}
```