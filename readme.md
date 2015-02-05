## Installation

Add the package to your composer.json file and run `composer update`:

```json
{
    "require": {
        "overflowsith/firewall": "dev-master"
    }
}
```

Add `Overflowsith\Firewall\FirewallServiceProvider` to your `app/config/app.php` file, inside the `providers` array.

Publish the package's config with `php artisan config:publish overflowsith/firewall`, so you can easily modify it in: `app/config/packages/overflowsith/firewall/config.php`

## Usage

This firewall package can be use in the App::before filter

```php
App::before(function($request)
{
    if (Firewall::isNotAllowed($request->ip())) {
        return View::make('firewall::sorry');
    }
});
```

