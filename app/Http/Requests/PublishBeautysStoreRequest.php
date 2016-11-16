<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PublishBeautysStoreRequest extends Request
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
        'type' => 'required',
        'rate' => 'required',
        'featured_image' => 'required',
        ];
    }
}