<?php

use Mawuekom\CustomHelpers\Facades\DataHelpers;

if ( ! function_exists('data_helpers')) {
    /**
     * Get data helpers instance
     *
     * @param string    $model
     * @param array     $params
     * @param bool      $inTrashed
     * 
     * @return mixed
     */
    function data_helpers($model, $params = [], $inTrashed = false) {
        return DataHelpers::initModel($model, $params, $inTrashed);
    }
}

if ( ! function_exists('success_response')) {
    /**
     * Return array of response
     *
     * @param array|null|Object $data
     * @param string $message
     * @param int $code
     * 
     * @return array
     */
    function success_response($data = null, string $message = 'Action performed successfully', int $code = 200): array {
        return [
            'code'      => $code,
            'status'    => 'success',
            'message'   => $message,
            'data'      => $data,
        ];
    }
}

if ( ! function_exists('failure_response')) {
    /**
     * Return array of response
     *
     * @param array|null|Object $data
     * @param string $message
     * @param int $code
     * 
     * @return array
     */
    function failure_response($data = null, string $message = 'Action attempted failed', int $code = 0): array {
        return [
            'code'      => $code,
            'status'    => 'failed',
            'message'   => $message,
            'data'      => $data,
        ];
    }
}