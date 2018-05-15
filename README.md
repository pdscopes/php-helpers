# madesimple/php-helpers
Small helper functions for different situations

## How to use
Add a helper file to your `autoload-dev` for dev environments only:
```json
{
  "autoload-dev": {
    "files": ["vendor/madesimple/php-helpers/dev.php"]
  }
}
```

Add a helper file to your `autoload` for all environments:
```json
{
  "autoload": {
    "files": ["vendor/madesimple/php-helpers/helpers.php"]
  }
}
```
