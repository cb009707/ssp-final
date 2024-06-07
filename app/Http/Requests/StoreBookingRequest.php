<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBookingRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'full_name' => 'required'
        ];
        return [
            'nic' => 'required'
        ];
        return [
            'phone_number' => 'required'
        ];
        return [
            'type' => 'required'
        ];
        return [
            'payment' => 'required'
        ];
        return [
            'card_No' => ''
        ];
        return [
            'sec_No' => ''
        ];
        return [
            'service' => 'required'
        ];
        return [
            'address' => 'required'
        ];
        return [
            'plate' => 'required'
        ];
        return [
            'chasis' => 'required'
        ];
        return [
            'discount' => 'required'
        ];
    }
}
