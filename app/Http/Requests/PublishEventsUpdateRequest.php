<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PublishEventsUpdateRequest extends Request
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
        'event_name'=> 'required',
        'event_date_from' => 'required',
        'event_date_to' => 'required',
        'event_hoster' => 'required',
        'hoster_phno' => 'required|numeric',
        'hoster_emailid' => 'required|email',
        'event_details' => 'required',
        'featured_image' => 'required'
        ];
    }
}