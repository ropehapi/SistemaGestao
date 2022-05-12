<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
            'name' => ['required','string','min:2','max:50'],
            'cod' =>  ['string','min:2','max:50'],
            'product_category_id' => ['required','integer'],
            'cost_price' => ['required','numeric'],
            'sale_price' => ['required','numeric'],
            'stock' => ['required','integer'],
            'minimum_stock' => ['integer'],
            'comment' => ['string','min:2','max:255'],
        ];
    }
}
