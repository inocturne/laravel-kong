<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 2018/7/7
 * Time: 下午8:15
 */

namespace App\Kong\Client\Kong\Consumer\Response;

use Lin\Src\Basic\Response;
use Carbon\Carbon;

class ListsResponse extends Response
{
    /**
     * @param array $request
     * @param array $response
     * @return array
     */
    public function success($request = [], $response = [])
    {
        $items = array_get($response, 'data');
        $items = array_map(function ($item) {
            return [
                'created_at' => Carbon::createFromTimestamp($item['created_at'] / 1000)->toDateTimeString(),
                'username' => $item['username'],
                'id' => $item['id'],
            ];
        }, $items);
        $response['data'] = $items;
        return parent::success($request, $response); // TODO: Change the autogenerated stub
    }
}