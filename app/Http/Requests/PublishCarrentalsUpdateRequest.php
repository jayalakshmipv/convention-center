<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PublishCarrentalsUpdateRequest extends Request
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
        'name'=> 'required',
        'place' => 'required',
        'phone_no' => 'required',
        'vehicle' => 'required',
        'rate' => 'required',
        'featured_image' => 'required',
        ];
    }
}