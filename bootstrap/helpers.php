<?php
/**
 * Created by PhpStorm.
 * User: lhb
 * Date: 2019-03-13
 * Time: 00:24
 */
function test_helper() {
    return 'OK';
}
function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}
