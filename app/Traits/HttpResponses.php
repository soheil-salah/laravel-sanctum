<?php

namespace App\Traits;

trait HttpResponses
{
    protected function success($data = [], $message = null, $code = 200)
    {
        return response()->json([
            'data' => $data,
            'message' => $message
        ], $code);
    }

    protected function error($data = [], $message = null, $code)
    {
        if($data == null){

            return response()->json([
                'message' => $message
            ], $code);

        }else{

            return response()->json([
                'data' => $data,
                'message' => $message
            ], $code);
        }
    }
}