<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class EmployeeRequest extends FormRequest
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
        $id = $this->employee ? $this->employee->id : null;

        $nameRule = Rule::unique('employees')->where('surname', $this->surname);

        return [
            'name' => $id
                ? ["required", "max:190", $nameRule->ignore($id)]
                : ["required", "max:190", $nameRule],
            'surname' => 'required',
            'gender' => 'required|in:male,gender',
            'dob' => 'required|date'
        ];
    }
}
