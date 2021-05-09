<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RefreshTokenRequest extends FormRequest
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
            'token' => 'required',
            'code' => 'required',
            'reason' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'token.required' => 'Kode Token tidak boleh dikosongkan.',
            'code.required' => 'Kode Kode tidak boleh dikosongkan',
            'reason.required' => 'Mohon tuliskan alasan atau penjelasan.'
        ];
    }
}
