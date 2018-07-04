<?php

if (!function_exists('api_response')) {

    /**
     * json返回
     * @param $data
     * @param string $code
     * @param string $msg
     * @return \Illuminate\Http\JsonResponse
     */
    function api_response($data, $code = '0', $msg = 'ok')
    {
        $json = [
            'data' => $data,
            'code' => $code,
            'message' => $msg,
            'time' => (string)time(),
            '_ut' => (string)round(microtime(TRUE) - $_SERVER['REQUEST_TIME_FLOAT'], 5),
        ];

        $headers = implode(',', config('domain.request.headers'));

        return response()->json($json)->header('Access-Control-Allow-Origin', '*')
            ->header('Access-Control-Allow-Credentials', 'true')
            ->header('Content-Type', 'application/json')
            ->header('charset', 'UTF-8')
            ->header('Access-Control-Allow-Headers', $headers);
    }
}

/**
 *
 * @param string $errorMessage
 * @param string $errorCode
 * @param array $error
 * @return json
 */
function response_error($errorMessage, $errorCode, $error = [])
{
    $response = [
        'code' => $errorCode,
        'message' => $errorMessage,
        'error' => $error,
    ];
    $headers = implode(',', config('domain.request.headers'));

    return response()->json($response)->header('Access-Control-Allow-Origin', '*')
        ->header('Access-Control-Allow-Credentials', 'true')
        ->header('Content-Type', 'application/json')
        ->header('charset', 'UTF-8')
        ->header('Access-Control-Allow-Headers', $headers);
}

if (!function_exists('api_error')) {

    function api_error($code = 0, $message = null, Throwable $previous = null)
    {
        if ($message === null) {
            $message = \App\Core\Enums\ErrorCode::getMessage($code);
            return api_response([], $code, $message);
        }
    }
}