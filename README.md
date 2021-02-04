# Laravel UUID

## Install
#
```console
$ composer require webdevrus/laravel-uuid
```

## Using
#
### Model
```php
<?php

namespace App\Models;

use WebDevRus\Laravel\UUID;

class Cart extends Model
{
    use UUID;

    ...
}
```

### Migration
```php
$table->uuid('uuid')->primary();
```

## Custom Column
#
### Model
```php
<?php

namespace App\Models;

use WebDevRus\Laravel\UUID;

class Cart extends Model
{
    use UUID;

    ...

    public function getKeyName(): string
    {
        return 'custom';
    }
}
```

### Migration
```php
$table->uuid('custom')->primary();
```