<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 2018/7/7
 * Time: 下午8:14
 */

namespace App\Kong\Client\Kong\Plugins\Form;


use Lin\Src\Basic\Form;

class AddForm extends Form
{
    public function rules()
    {
        return [
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
        ];
    }

    public function validation()
    {
    }
}