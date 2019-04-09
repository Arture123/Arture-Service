<?php

namespace App\Exceptions;
use Log;

class Helper 
{ 
    
    /**
     * Function error handling log error only
     *
     * @param $e , methods inherited from Exception
     * @param $data , get additional data [array]
     */
    public static function logError($e, $data = '')
    {
        $key = null;
        foreach ($data as $key => $value) {
            if ($key == 'Model') {
                $key = $key;
                break;
            } else if ($key == 'Controller') {
                $key = $key;
                break;
            } else if ($key == 'Service') {
                $key = $key;
                break;
            } else if ($key == 'Helper') {
                $key = $key;
                break;
            }
        }
        $log = json_encode($data);
        Log::error($key . ' fails ' . $log, ['line' => @$e->getLine(), 'file' => @$e->getFile(), 'message' => @$e->getMessage()]);
    }
}