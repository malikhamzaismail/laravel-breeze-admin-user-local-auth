<?php

namespace App\Http\Requests;

use App\Models\Contactinfo;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ContactinfoUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'city' => ['string', 'max:255'],
            'state' => ['string', 'max:255'],
            'country' => ['string', 'max:255'],
        ];
    }
}
