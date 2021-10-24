<?php

namespace App\Http\Requests;

use App\Models\Promocode;
use Illuminate\Foundation\Http\FormRequest;

class UsePromoRequest extends FormRequest
{
    public $promo;
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
            'promo_code' => ['required', 'string','max:255'],
        ];
    }

    public function withValidator($validator)
    {
        $validator->after(function ($validator) {
            if (!$this->checkPromoCode()) {
                $validator->errors()->add('promo_code', __t('Промокод уже использован!'));
            }
        });
    }

    public function checkPromoCode(): bool
    {
        $this->promo = Promocode::code($this->input('promo_code'))->isNotUsed()->first();
        return (bool)$this->promo;
    }
}
