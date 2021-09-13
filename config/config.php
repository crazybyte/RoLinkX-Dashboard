<?php

if(!function_exists('get_log_file')) {
    function get_log_file($log = '') {
        switch ($log) {
            case '1' :
                return '/var/log/syslog';
                break;
            case '2' :
                return '/tmp/svxlink.log';
                break;
            default :
                return '/var/log/syslog';
        }
    }
}