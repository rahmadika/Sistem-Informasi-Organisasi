<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TransactionRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'debit'=>'nullable|integer',
            'nd'=>'nullable|string',
            'kredit'=>'nullable|integer',
            'nk'=>'nullable|string',
            'saldo'=>'nullable|integer',
            ];
    }
}
