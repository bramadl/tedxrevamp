<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePaymentRequest extends FormRequest
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
            'payment_method' => 'required|string',
            'payment_proof' => 'required|mimes:jpg,jpeg,png,svg|max:2048'
        ];
    }

    public function message()
    {
        return [
            'payment_method.required' => 'Mohon pilih metode pembayaran.',
            'payment_proof.required' => 'Mohon unggah bukti pembayaran.',
            'payment_proof.mimes' => 'Format bukti pembayaran tidak sesuai.',
            'payment_proof.max' => 'Ukuran bukti pembayaran melebihi batas.'
        ];
    }
}
