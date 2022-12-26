<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'avatar',
            'tmpt_lhr',
            'tgl_lhr',
            'address',
            'instagram',
            'whatsapp',
            ];
    }
}
