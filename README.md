# getMonth
Simple class to get a month in different formats and languages.

## Installation via Composer

```
$ composer require duiliopastorelli/getMonth
```

### Usage with Composer

You can call the class with:

```php
<?php
require "vendor/autoload.php";

use Duiliopastorelli\Month;

echo Month::getMonth();
```

Or if you don't want to add the "use Duiliopastorelli\Month" at the top, you can:

```php
<?php
require "vendor/autoload.php";

echo \DuilioPastorelli\Month::getMonth();
```

See ***Usage*** section for more options.

##Installation "Quick And Dirty"
Copy the "Month.php" file inside your project.

Include it:

```php
<?php
include "[PATH]/month.php";

echo Month::getMonth();
```

See ***Usage*** section for more options.

##Usage

###Get the month in a numeric format (1->12):

```php
Month::getMonth();
```

###Get the current month translated in a particular language:

```php
Month::getMonth("[LANGUAGE]");
```

Available languages are:

1. Italian -> ```it```
2. German -> ```de```

###Get the next and previous month (Time Machine) in a numeric format:

```php
Month::getMonth(null, 1);
```

```php
Month::getMonth(null, -1);
```

Supported values for the Time Machine are 1->11 and -1->-11

###Get a particular month (3 that means March) in a numeric format:

```php
Month::getMonth(null, null, 3);
```

##Other examples
- Get the next month in German:

```php
Month::getMonth("de", 1);
```

- Get a particular German month (April):

```php
Month::getMonth("de", null, 4);
```