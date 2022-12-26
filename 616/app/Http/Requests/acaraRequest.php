<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AcaraRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name'=>'required|string',
            'description'=>'required|string',
            'date'=>'required|date',
            'place'=>'required|string',
            'pj'=>'required|string',
        ];
    
    }
}
