<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DosenRequest extends FormRequest
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
        if (!$this->request->get('file_gambar')) {
            $rules = [
                'nama' => 'required',
                'jabatan' => 'required',
                'keahlian' => 'required',
                'prodi' => 'required',
                'strata' => 'required',
                'studi' => 'required',
                'file_gambar' => [
                    'required',
                    'image'
                ]
            ];
        } else {

            $rules = [
                'nama' => 'required',
                'jabatan' => 'required',
                'keahlian' => 'required',
                'prodi' => 'required',
                'studi' => 'required'
            ];
        }
        return $rules;
    }
}
