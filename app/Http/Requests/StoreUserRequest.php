<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
            // name,email,role,phone,position,address,divisi
            'name' => 'required|max:100|min:3',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
            'position' => 'required',
            'address' => 'required',
            'divisi' => 'required',   
            'rul' => 'required|in:ADMIN,PEMATERI,PESERTA',
            'phone' => 'required',
           
           
            
           

            
        ];
    }
}
