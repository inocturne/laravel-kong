<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 2018/6/22
 * Time: 下午3:50
 */

namespace App\Http\Controllers\Kong;


use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function kong()
    {
        return api_response(['kong']);
    }

    public function add()
    {
        return api_response(['add']);
    }
}