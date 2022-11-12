<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CountryFormRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "continent_id" => ["required"],
            "iso_code" => ["required", "unique:continents", "max:2"],
            "name" => ["required", "max:255"]
        ];
    }
}
