<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CalculatorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'num1' => 'required|numeric',
            'num2' => 'required|numeric',
            'operation' => 'required|in:add,subtract,multiply,divide',
        ];
    }
    public function messages()
    {
        return [
            'num1.required' => 'Number 1 is required.',
            'num2.required' => 'Number 2 is required.',
            'num1.numeric' => 'Number 1 must be a numeric value.',
            'num2.numeric' => 'Number 2 must be a numeric value.',
            'operation.required' => 'Operation is required.',
            'operation.in' => 'Invalid operation selected.',
        ];
    }
}
