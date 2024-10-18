<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAutoRequest extends FormRequest
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
            'brand' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'year' => 'required|numeric',
            'fuel_type' => 'required|string|max:255',
            'horsepower' => 'required|integer',
            'doors' => 'required|integer|max:5',
            'change_type' => 'required|string|max:255',
            'color' => 'required|string|max:50',
            'mileage' => 'required|integer',
            'price' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'quantity' => 'required|integer|min:1',
            'status' => 'nullable|string|in:available,sold',
        ];
    }
    public function messages() {
        return [
            'brand.required' => 'Inserisci nome brand',
            'brand.max' => 'Il nome del brand non può superare i :max caratteri',
            'model.required' => 'Inserisci nome del modello',
            'model.max' => 'Il nome del modello non può superare i :max caratteri',
            'year.required' => 'Inserisci l\'anno di produzione',
            'year.numeric' => 'Il campo deve essere di tipo numerico',
            'fuel_type.required' => 'Inserisci il tipo di carburante',
            'fuel_type.max' => 'Il nome del carburante non può superare i :max caratteri',
            'horsepower.required' => 'Inserisci il numero di cavalli',
            'horsepower.numeric' => 'Il campo deve essere di tipo numerico',
            'doors.required' => 'Inserisci un numero di porte',
            'doors.max' => 'L\'auto puo avere massimo :max porte',
            'change_type.required' => 'Inserisci la tipologia di cambio',
            'change_type.max' => 'La tipologia di cambio non può superare i :max caratteri',
            'color.required' => 'Inserisci un colore',
            'color.max' => 'il nome del colore non può superare i :max caratteri',
            'mileage.required' => 'Inserisci il chilometraggio',
            'mileage.numeric' => 'Il campo deve essere di tipo numerico',
            'price.required' => 'Inserisci un prezzo',
            'price.min' => 'Il prezzo deve avere un costo di almeno :min euro',
            'price.numeric' => 'Il prezzo deve essere numerico',
            'quantity.required' => 'Inserisci la quantità di auto disponibili',
            'quantity.min' => 'la quantità delle auto disponibili non può essere inferiore a :min',
            'status.required' => 'Inserisci uno status',
            'status.in' => 'puoi selezionare solo uno tra i seguenti status: :in'
        ];
    }
}
