<?php


if (!function_exists('arrayToJson')) {

    function arrayToJson(array $array)
    {

        header('Content-Type: application/json;charset=utf-8');

        /** @noinspection PhpComposerExtensionStubsInspection */
        return json_encode($array, true);
    }
}