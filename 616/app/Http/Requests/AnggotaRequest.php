<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AnggotaRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'foto'=>'image',
            'name'=>'required|string',
            'tgl_lhr'=>'required|date',
            'address'=>'required|string',
            'ig'=>'required|string',
            ];
    }
}
