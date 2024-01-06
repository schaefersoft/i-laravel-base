# Form Generator Module

### Variables on Models:

`$formGeneratorFields` must be type of array

Needs an array with 

```php
[
    'type' => 'text' // When you override it, then you can add custom data
]
```

```php
static array $formGeneratorFields = [
    ['type' => 'text', 'name' => 'firstname', 'label' => 'Title', 'validations' => ['required']],
    ['type' => 'text', 'name' => 'money', 'label' => 'Wunschgehalt', 'validations' => ['required']],
    ['type' => 'tinymce', 'name' => 'message', 'label' => 'Nachricht', 'validations' => ['required']],
];
```
