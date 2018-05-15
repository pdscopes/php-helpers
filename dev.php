<?php

if (!function_exists('dd')) {
    /**
     * Dump the passed variables and end the script.
     *
     * @param mixed
     * @return void
     */
    function dd() {
        $args = func_get_args() ?? [];

        $stack  = debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS);
        $format = php_sapi_name() === 'cli' ? '%s:%s' : '<pre><strong>%s:%s</strong>';

        echo sprintf($format, $stack[0]['file'], $stack[0]['line']), PHP_EOL;

        if (!empty($args)) {
            call_user_func_array('var_dump', $args);
        }
        die(1);
    }
}
if (!function_exists('vd')) {
    /**
     * Dump the passed variables.
     *
     * @param mixed
     * @return void
     */
    function vd() {
        $args = func_get_args() ?? [];

        $stack  = debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS);
        $format = php_sapi_name() === 'cli' ? '%s:%s' : '<pre><strong>%s:%s</strong>';

        echo sprintf($format, $stack[0]['file'], $stack[0]['line']), PHP_EOL;

        if (!empty($args)) {
            call_user_func_array('var_dump', $args);
        }
    }
}