<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TicketRequest extends FormRequest
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
            "title" => "required|max:100|min:3",
            "date" => "required|date",
            "message" => "required",
            "operator_id" => "required",
            "status_id" => "required",
            "category_id" => "required",
        ];
    }

    public function messages(){

        return [

            "title.required" => "Il campo è obbligatorio",
            "title.max" => "L'oggetto non può avere più di 100 caratteri",
            "title.min" => "L'oggetto non può avere meno di 3 caratteri",
            "date.required" => "Il campo è obbligatorio",
            "date.date" => "Devi inserire un numero valido",
            "message" => "Il campo è obbligatorio",
            "operator_id" => "Il campo è obbligatorio",
            "category_id" => "Il campo è obbligatorio",
            "status_id" => "Il campo è obbligatorio"


        ];
    }
}
