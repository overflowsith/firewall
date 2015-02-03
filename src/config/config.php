<?php

return [

    // firewall mode
    // enforcing - only whitelisted
    // permissive - only not in blacklist
    // disabled - aka disabled
    'mode' => 'enforcing',

    // full ipV4 or pattern like 192.168.*
    'whitelist' => [
        '127.*',
        '10.16.*',
        '10.46.*',
        '10.185.*',
        '2.229.9.52',
        '212.45.*',
        '217.26.81.34',
        '212.45.98.66',
    ],

    // full ipV4 or pattern like 192.168.*
    'blacklist' => [
    ],



];
