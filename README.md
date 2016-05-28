# getMonth
Simple class to get a month in different formats and languages.

##Installation
Copy the "Month.php" file inside your project.

Include it:

```php
include "[PATH]/month.php";
```

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