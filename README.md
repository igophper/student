# composer library test

```shell
composer require igophper/student
```

```php
<?php

use Igophper\Student\Student;

require_once __DIR__.'/vendor/autoload.php';

$s = new Student();
echo $s->getName();
``` 

# laravel

```php
<?php

namespace App\Http\Controllers;

use Igophper\Student\Student;

class HomeController extends Controller
{
    public function index(Student $student)
    {
           return ['name' => $student->getName()];
    }
}
```