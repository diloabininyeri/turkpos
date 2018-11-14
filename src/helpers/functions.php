<?php


if (!function_exists('arrayToJson')) {

    function arrayToJson($data)
    {

        header('Content-Type: application/json;charset=utf-8');

        /** @noinspection PhpComposerExtensionStubsInspection */

        if (gettype($data) == "array") {

            /** @noinspection PhpComposerExtensionStubsInspection */
            return json_encode(["status" => true, "data" => $data],  JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE);

        }

        /** @noinspection PhpComposerExtensionStubsInspection */
        return json_encode(["status" => false, "detail" => $data],JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE);
    }
}