<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DisapproveBalanceWithdrawalRequest extends FormRequest
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
            'rejected'=>'required'
        ];
    }
    /**
     * Method messages
     *
     * @return array
     */
    public function messages():array{
        return [
            'rejected.required'=>'Anda harus memberikan alasan yang valid'
        ];
    }
}
