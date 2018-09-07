<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 2018/7/7
 * Time: 下午8:15
 */

namespace App\Kong\Client\Kong\Api\Response;

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
        foreach ($items ?? [] as $k => $v) {
            $items[$k]['created_at'] = Carbon::createFromTimestamp($v['created_at'] / 1000)->toDateTimeString();
        }
        $response['data'] = $items;
        return parent::success($request, $response); // TODO: Change the autogenerated stub
    }
}