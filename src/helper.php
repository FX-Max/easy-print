<?php

if (!function_exists('p'))
{
    function p() {
        $argvs = func_get_args();
        echo '<div style="text-align: left;">';
        foreach ($argvs as $k => $v) {
            echo "<xmp>";
            print_r($v);
            echo "</xmp>";
        }
        echo '</div>';
    }
}

if (!function_exists('pd'))
{
    function pd()
    {
        $argvs = func_get_args();
        p($argvs);
        die;
    }
}

if (!function_exists('d'))
{
    function d()
    {
        $argvs = func_get_args();
        var_dump($argvs);
    }
}

if (!function_exists('dd'))
{
    function dd()
    {
        $argvs = func_get_args();
        d($argvs);
        die();
    }
}

if (!function_exists('e'))
{
    function e(string $msg, string $prefix = '')
    {
        echo $prefix . $msg . PHP_EOL;
    }
}

if (!function_exists('ed'))
{
    function ed(string $msg, string $prefix = '')
    {
        echo $prefix . $msg . PHP_EOL;
        die();
    }
}