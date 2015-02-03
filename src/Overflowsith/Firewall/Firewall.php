<?php
namespace Overflowsith\Firewall;

use Config;
use Str;

class Firewall
{

    public static function isAllowed($ip)
    {
        switch(Config::get('firewall::config.mode')) {
            case 'disabled':
                return true;
                break;
            case 'enforcing':
                return self::isInWhiteList($ip);
                break;
            case 'permissive':
                return !(self::isInBlackList($ip));
                break;
            default:
                return false;
        }
    }

    public static function isInWhiteList($ip)
    {
        return self::check(Config::get('firewall::config.whitelist', []), $ip);
    }

    public static function isInBlackList($ip)
    {
        return self::check(Config::get('firewall::config.blacklist', []), $ip);
    }

    private static function check($source, $ip)
    {
        foreach($source as $pattern) {
            if (Str::is($pattern, $ip)) {
                return true;
            }
        }
        return false;
    }
}
