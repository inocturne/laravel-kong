<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 2018/7/27
 * Time: 下午2:13
 */

namespace App\Src\Form\Auth;

use Lin\Src\Basic\Form;

class RoleBindingForm extends Form
{
    public function rules()
    {
        return [
            'roleId' => 'required',
            'routerId' => 'required',
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
            'roleId' => '角色Id',
            'routerId' => '路由Id',
        ];
    }

    public function validation()
    {
    }
}