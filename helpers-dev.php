<?php

if (!function_exists('dd')) {
    /**
     * Dump the passed variables and end the script.
     *
     * @param mixed
     * @return void
     */
    function dd() {
        call_user_func_array('var_dump', func_get_args());
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
        call_user_func_array('var_dump', func_get_args());
    }
}