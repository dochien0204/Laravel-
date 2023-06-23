<?php

namespace App\Util;

class ExceptionHandler
{
    public static function HandleException($statusCode, $message)
    {
        $response = [
            'status' => strval($statusCode),
            'message' => $message
        ];

        return response()->json($response);
    }
}
