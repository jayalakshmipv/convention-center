<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PublishEventsRequest extends Request
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
        'event_name'=> 'required',
        'event_date_from' => 'required',
        'event_date_to' => 'required',
        'event_hoster' => 'required',
        'hoster_phno' => 'required|numeric',
        'hoster_emailid' => 'required|email',
        'event_details' => 'required',
        'featured_image' => 'required|mimes:jpg,png,jpeg'
        ];
    }
}
