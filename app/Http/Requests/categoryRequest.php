<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PublishcategoryRequest extends Request {

	public function authorize() {
        return true;
    }


    //
}