<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 2018/7/7
 * Time: 下午8:14
 */

namespace App\Kong\Client\Kong\Routes\Form;

use App\Src\Basic\Form;

class UploadForm extends Form
{
    public function rules()
    {
        return [
            'id' => 'required',
            'service.id' => 'required',
            'protocols' => 'required',
            'methods' => 'required',
            'paths' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'required' => ':attribute必填。',
        ];
    }

    public function attributes()
    {
        return [
            'id' => '路由Id',
            'service.id' => '服务Id',
            'protocols' => '协议列表',
            'methods' => '方法列表',
            'paths' => '路径列表',
        ];
    }

    public function validation()
    {
        $paths = $this->data['paths'];
        unset($this->data['paths']);
        $this->data['paths'][] = $paths;
    }
}