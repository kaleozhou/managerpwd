<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CardRequest extends FormRequest
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
            //
            'name'=>'required|unique:cards,name',
            'billamount'=>'required|numeric',
            'repayment'=>'required|date',
            'totalamount'=>'required|numeric',
            'balance'=>'required|numeric',
            'remark'=>'required',
        ];
    }
}
