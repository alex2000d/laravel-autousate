<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAutoRequest extends FormRequest
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
            'optionals' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'engine' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'quantity' => 'required|integer|min:1',
            'status' => 'nullable|string|in:available,sold',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }
    public function messages() {
        return [
            'optionals.required' => 'Inserisci gli optionals',
            'optionals.max' => 'gli optionals non possono superare i :max caratteri',
            'name.required' => 'Inserisci un nome',
            'name.max' => 'il nome non può superare i :max caratteri',
            'engine.required' => 'Inserisci un tipo di motore',
            'optionals.max' => 'il tipo di motore non può superare i :max caratteri',
            'price.required' => 'Inserisci un prezzo',
            'price.min' => 'il prezzo deve avere un costo di almeno :min euro',
            'price.numeric' => 'Il prezzo deve essere numerico',
            'quantity.required' => 'Inserisci la quantità di auto disponibili',
            'quantity.min' => 'la quantità delle auto disponibili non può essere inferiore a :min',
            'status.required' => 'Inserisci uno status',
            'status.in' => 'puoi selezionare solo uno tra i seguenti status: :in'
        ];
    }
}
