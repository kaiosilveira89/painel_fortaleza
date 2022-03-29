<?php

namespace App\Http\Requests\Action;

use Illuminate\Foundation\Http\FormRequest;

class ActionCreateRequest extends FormRequest
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
            "id_equip" => "required",
            "id_task" => "required",
            "value" => "required",
            "data" => "required",
        ];
    }

    public function messages()
    {
        return [
            'id_equip.required' => 'O nome do equipamenteo é requerido',
            'id_task.required' => 'A ação é requerida',
            'value.required' => 'O valor é requerido',
            'data.required' => 'A data é requerida',
        ];
    }}
