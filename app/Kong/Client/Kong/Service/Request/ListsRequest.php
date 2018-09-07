<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 2018/7/7
 * Time: 下午4:21
 */

namespace App\Kong\Client\Kong\Service\Request;

use Lin\Src\Basic\Request;

class ListsRequest extends Request
{
    public function getUri()
    {
        return '/services/';
    }

    public function getMethod() {
        return "GET";
    }

    public function getName()
    {
        return 'kong.service';
    }
}