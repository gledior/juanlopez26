<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticuloRequest extends FormRequest
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
            /*'articulos' => 'requiere',
            'cod_articulo' => 'numeric|required|max:888888888',
            'stock' => 'numeric|required|integer',
            'stock_min' => 'numeric|required|integer',
            'stock_max' => 'numeric|required|integer',
            'valor_unidad' => 'numeric|required'*/
        ];
    }

}
