<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarRequest extends FormRequest
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
        $id = $this->car ? $this->car->id : null;
        return [
            'name' => $id
                ? "required|max:190|unique:cars,name,$id"
                : 'required|max:190|unique:cars,name',
            'category_id' => 'required|exists:categories,id'
        ];
    }
}
