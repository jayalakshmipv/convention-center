<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PublishConventionsRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
        'name'=> 'required',
        'address' => 'required',
        'location' => 'required',
        'name_owner' => 'required',
        'phone_no' => 'required|numeric',
        'mobile_no' => 'required|numeric',
        'mail_id' => 'required|email',
        'website_address' => 'required',
        'latitude' => ['required','regex:/^(?=.+)(?:[1-9]\d*|0)?(?:\.\d+)?$/'],
        'longitude' => ['required','regex:/^(?=.+)(?:[1-9]\d*|0)?(?:\.\d+)?$/'],
        'featured_image' => 'required|mimes:jpg,png,jpeg'
        ];
    }
}
