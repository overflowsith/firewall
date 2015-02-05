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
        return Firewall::renderAccessDenied();
    }
});
```

## Configuration

### Firewall status

  * disabled: every IP is allowed
  * permissive: only IP addresses that are not in the blacklist are allowed
  * enforcing: an IP must be in the whitelist and not in the blacklist

### Whitelist and blacklist

You can set an array of IP addresses with or without wildcards, for example

```php
   '127.0.0.1',
   '192.168.*',
```
