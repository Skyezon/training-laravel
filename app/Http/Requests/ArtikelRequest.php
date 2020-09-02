<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArtikelRequest extends FormRequest
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
            'judul' => 'required|max:255',
            'konten' => 'required',
            'image' => 'required',
            'penulis' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'judul.required' => 'judul tolong dimasukin',
            'konten.required' => 'koten must ada',
            'image.required' => 'gambarang tolong diisi',
            'penulis.required' => 'ini yang nulis siapa',
            'judul.max' => 'terlalu panjang'
        ];
    }
}
