<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdiRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        if ($this->hasFile('file_gambar')) {
            // Jika upload file baru, validasi sebagai image
            $rules = [
                'prodi' => 'required',
                'isi' => 'required',
                'file_gambar' => [
                    'required',
                    'image'
                ]
            ];
        } else {
            // Jika tidak upload file (update tanpa ganti gambar), file_gambar tidak required
            $rules = [
                'prodi' => 'required',
                'isi' => 'required'
            ];
        }
        return $rules;
    }

    public function getCustomRules($type)
    {
        $rules = [];

        switch ($type) {
            case "create":
            case "update":
        }
    }
}
