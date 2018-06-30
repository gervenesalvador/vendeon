<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'title' => 'required|string',
            'description' => 'required|string',
            'images*' => 'required|image|mimes:jpg,png',
            'price' => 'nullable|numeric',
            'compared_at_price' => 'nullable|numeric',
            'sku' => 'nullable|string',
            'barcode' => 'nullable|string',
            'is_track_stock' => 'required|numeric',
            'type' => 'nullable|string',
            'collections' => 'nullable|string',
            'tags' => 'nullable|string',
        ];
    }
}
