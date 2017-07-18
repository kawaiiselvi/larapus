<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\Requests;

class UpdateBookRequest extends StoreBookRequest
{

    public function rules()
    {
        return [
            $rules = parent::rules();
            $rules['title'] = 'required|unique::books,title,' . $this->route('book');
            return $rules;
        ];
    }
}