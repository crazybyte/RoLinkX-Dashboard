<?php

$constants = array(
    'DS' => '/',
    'ROLINK' => array(
        'WEB_APP_PATH' => '/var/www/html',
        'WEB' => '/var/www/html',
        'APP_PATH' => '/opt/rolink/',
        'APP_CONFIG_PATH' => '/opt/rolink/conf/',
        'APP_CONFIG' => 'rolink.conf',
        'APP_TMP' => '/tmp',
        'APP_PROFILES' => '/var/www/html/profiles',
        'APP_SERVICE' => 'rolink.service',
    ),
    'TOOLS' => array(
        'SUDO' => '/usr/bin/sudo',
        'SYSTEMCTL' => '/usr/bin/systemctl',
        'CP' => '/usr/bin/cp',
        'WC' => '/usr/bin/wc',
        'TAIL' => '/usr/bin/tail',
        'CUT' => '/usr/bin/cut',
        'TR' => '/usr/bin/tr',
    ),
);

if (!function_exists('setup_rolink_constants')) {
    function setup_rolink_constants($consts)
    {
        foreach ($consts as $main_key => $sub_key) {
            if (is_array($sub_key)) {
                setup_rolink_constants($sub_key);
            } else {
                if (!defined($main_key)) {
                    define($main_key, $sub_key);
                }
            }
        }
    }
}
